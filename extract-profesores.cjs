const fs = require('fs');
const path = require('path');

const dir = path.join(__dirname, 'src', 'pages', 'maestria', 'profesores');
const output = path.join(__dirname, 'src', 'data', 'profesores.json');

// Crear src/data si no existe
if (!fs.existsSync(path.join(__dirname, 'src', 'data'))) {
    fs.mkdirSync(path.join(__dirname, 'src', 'data'), { recursive: true });
}

const files = [
    'abdiel-gomez.astro', 'armando-martinez.astro', 'celerino-resendiz.astro',
    'edgar-vera.astro', 'erika-avila.astro', 'hugo-abundis.astro',
    'ignacio-ramirez.astro', 'luis-palacios.astro', 'mario-rodriguez.astro',
    'marisa-moreno.astro'
];

function extractBetween(str, start, end) {
    const s = str.indexOf(start);
    if (s === -1) return '';
    const e = str.indexOf(end, s + start.length);
    if (e === -1) return '';
    return str.substring(s + start.length, e).trim();
}

function extractSection(content, id) {
    // Buscar <div id="formacion" class="tab-panel active">
    const regex = new RegExp(`<div id="${id}"[^>]*>[\\s\\S]*?<div class="card-content">([\\s\\S]*?)</div>\\s*</div>`);
    const match = content.match(regex);
    if (match) return match[1].trim();

    // Fallback: Si el section está comentado (como proyectos a veces)
    const regexComment = new RegExp(`<!--\\s*<div id="${id}"[^>]*>[\\s\\S]*?<div class="card-content">([\\s\\S]*?)</div>\\s*</div>\\s*-->`);
    const matchC = content.match(regexComment);
    if (matchC) return matchC[1].trim();

    return '';
}

const data = files.map(file => {
    const content = fs.readFileSync(path.join(dir, file), 'utf-8');
    const slug = file.replace('.astro', '');

    const nombre = extractBetween(content, '<h1 class="profile-name">', '</h1>').replace(/\s+/g, ' ');
    const titulo = extractBetween(content, '<div class="profile-title">', '</div>').replace(/\s+/g, ' ');
    const imgSrc = extractBetween(content, '<img', 'class="profile-image"').match(/src=`\$\{BASE\}([^`]+)`/);
    const imagen = imgSrc ? imgSrc[1] : '';

    const emailMatch = content.match(/<a href="mailto:([^"]+)"/);
    const email = emailMatch ? emailMatch[1] : '';

    const telMatch = content.match(/<i class="fa-solid fa-phone"><\/i>([^<]+)/);
    const telefono = telMatch ? telMatch[1].trim() : '';

    const badgesStr = extractBetween(content, '<div class="interest-badges">', '</div>');
    const areasInterest = [...badgesStr.matchAll(/<span class="badge">([^<]+)<\/span>/g)].map(m => m[1].trim());

    return {
        slug,
        nombre: nombre.trim().replace(/^(Dr\.|Dra\.)\s*/, ''), // Nombre sin prefijo para cruzar, aunque guardaremos el completo
        prefijo: nombre.includes('Dra.') ? 'Dra.' : 'Dr.',
        nombreCompleto: nombre.trim(),
        titulo: titulo.trim(),
        imagen,
        contacto: { email, telefono },
        areas: areasInterest,
        formacion: extractSection(content, 'formacion'),
        distinciones: extractSection(content, 'distinciones'),
        productividad: extractSection(content, 'productividad'),
        proyectos: extractSection(content, 'proyectos')
    };
});

fs.writeFileSync(output, JSON.stringify(data, null, 2));
console.log('Extracción completada en ' + output);
