const fs = require('fs');
const path = require('path');
const cheerio = require('cheerio');

const sourceDir = path.join(__dirname, 'src/pages/doctorado');
const outputFile = path.join(__dirname, 'public/data/profesores-doctorado.json');

const archivosAProcesar = [
    'mmr-d.php',
    'evc-d.php',
    'eoad-d.php',
    'aimp-d.php',
    'lmpp-d.php',
    'fndl-d.php',
    'hfaf-d.php',
    'jsa-d.php',
    'vhp-d.php',
    'irv-d.php',
    'merc-d.php'
];

const dataFinal = [];

function cleanHTML(str) {
    if (!str) return '';
    return str.replace(/<p[^>]*>\s*<\/p>/gi, '')
        .replace(/class="[^"]*"/gi, '')
        .replace(/style="[^"]*"/gi, '')
        .replace(/\s+/g, ' ')
        .replace(/>\s+</g, '><')
        .trim();
}

for (const archivo of archivosAProcesar) {
    try {
        const filePath = path.join(sourceDir, archivo);

        if (!fs.existsSync(filePath)) {
            console.log(`Archivo no encontrado: ${archivo}`);
            continue;
        }

        const rawContent = fs.readFileSync(filePath, 'utf-8');

        // Remove PHP includes so cheerio parses clean HTML
        const htmlContent = rawContent.replace(/<\?php[\s\S]*?\?>/g, '');

        const $ = cheerio.load(htmlContent);

        // --- Extracción de Datos Base ---
        const slug = archivo.replace('-d.php', '');

        // Nombre Completo y Título
        const h2Text = $('.glass-card h2').first().text().trim() || $('.tituloPrincipal').text().trim() || '';
        let nombreCompleto = h2Text;
        if (h2Text.includes('Dr.') || h2Text.includes('Dra.')) {
            // keeps full text as name if it contains Dr/Dra
        }

        // Image
        let foto = '';
        const imgTags = $('img');
        imgTags.each((i, img) => {
            const src = $(img).attr('src');
            if (src && (src.includes('maestros/') || src.includes('imagenes_vinculacion/'))) {
                foto = path.basename(src);
            }
        });

        // Contacto (Telefonos y email)
        const contactoInfo = [];
        $('.contact-item p, .contact-content, .info-text').each((i, el) => {
            const htmlMatches = $(el).html();
            if (htmlMatches && (htmlMatches.includes('@') || htmlMatches.includes('Ext'))) {
                const textLines = htmlMatches.split(/<br\s*\/?>/gi).map(l => cheerio.load(l).text().trim()).filter(l => l);
                textLines.forEach(line => {
                    const cleaned = line.replace(/Email:|Tel\.|Teléfonos:|Móvil:/gi, '').trim();
                    if (cleaned && !contactoInfo.includes(cleaned)) {
                        contactoInfo.push(cleaned);
                    }
                });
            }
        });

        // Áreas de Interés / LGAC
        const areas = [];
        const lh3 = $('h3');
        lh3.each((i, h3) => {
            const label = $(h3).text().toLowerCase();
            if (label.includes('área') || label.includes('lgac') || label.includes('líneas')) {
                const pTags = $(h3).nextUntil('h3, h2, div');
                pTags.each((j, p) => {
                    const items = $(p).html().split(/<br\s*\/?>/ig).map(x => cheerio.load(x).text().trim());
                    items.forEach(it => {
                        if (it && !areas.includes(it)) areas.push(it);
                    });
                });
            }
        });

        // --- Extracción de Pestañas ---
        const getTabContent = (titleKeywords) => {
            let sectionContent = '';
            $('h2, h3, h4').each((i, hNode) => {
                const titleText = $(hNode).text().toLowerCase();
                if (titleKeywords.some(kw => titleText.includes(kw))) {
                    const container = $(hNode).parent();
                    if (container.hasClass('glass-card') || container.hasClass('tab-pane') || container.hasClass('card-content')) {
                        const cloned = container.clone();
                        cloned.find('h2, h3').first().remove();
                        sectionContent = cloned.html();
                    } else {
                        let content = '';
                        let current = $(hNode).next();
                        while (current.length > 0 && !current.is('h2, h3')) {
                            content += $.html(current);
                            current = current.next();
                        }
                        sectionContent = content;
                    }
                }
            });
            return cleanHTML(sectionContent);
        };

        const formacion = getTabContent(['formación académica', 'formacion']);
        const distinciones = getTabContent(['distinciones']);
        const productividad = getTabContent(['publicaciones', 'productividad académica', 'productividad']);
        const proyectos = getTabContent(['proyectos de inv', 'proyectos', 'patentes']);

        // Fallback for contact if empty
        let fallbackContact = '';
        if (contactoInfo.length === 0) {
            fallbackContact = "Pendiente de actualizar";
        } else {
            fallbackContact = contactoInfo.join(' | ');
        }

        const profesorData = {
            slug,
            nombreCompleto,
            titulo: 'Profesor(a) del Núcleo Académico',
            foto,
            contacto: fallbackContact,
            areas: areas.length > 0 ? areas : ["Sin definir (Añadir manualmente)"],
            formacion,
            distinciones,
            productividad,
            proyectos
        };

        dataFinal.push(profesorData);
        console.log(`✓ Procesado: ${archivo} -> ${slug}`);

    } catch (error) {
        console.error(`Error procesando ${archivo}:`, error);
    }
}

// Escribir archivo final
fs.writeFileSync(outputFile, JSON.stringify(dataFinal, null, 4), 'utf-8');
console.log(`\n¡Extracción completada! Datos guardados en ${outputFile}`);
