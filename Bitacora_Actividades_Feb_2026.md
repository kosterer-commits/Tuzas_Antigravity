# Bitácora de Actividades (1 - 12 de Febrero 2026)

## 01 de Febrero - 02 de Febrero
*Sin actividad registrada.*

## 03 de Febrero
**Refinamiento de Página "Extraescolares":**
- Actualización completa de `extraescolares.php` para eliminar variables CSS obsoletas.
- Implementación de una nueva paleta de colores vibrantes sobre fondo blanco.
- Estandarización de clases HTML para alinearse con el nuevo sistema de diseño.

## 04 de Febrero
**Corrección de Estilos y Títulos:**
- Implementación del estilo de título "White Pill Premium" en secciones clave.
- Depuración de conflictos en `noticias.js` y `tecnologico.js` para asegurar la correcta renderización de los títulos animados.
- Unificación de estilos en `noticias.css` y `tecnologico.css`.

## 05 de Febrero
**Construcción de Contenido Principal (Index):**
- Desarrollo de las secciones "Nosotros" y "Oferta Educativa" en la página de inicio.
- Diseño de un layout asimétrico moderno para la sección "Nosotros".
- Implementación de una cuadrícula interactiva de tarjetas para mostrar las carreras disponibles.

## 06 de Febrero
**Mejoras en Interacciones del Banner:**
- Implementación de efectos avanzados de desplazamiento (drag-to-scroll) con inercia en el carrusel principal.
- Desarrollo de funcionalidad de auto-scroll inteligente que se pausa al interactuar.
- Adición de indicadores de navegación (barra de progreso y botones) para mejorar la usabilidad.

## 09 de Febrero
**Limpieza del Proyecto y Nuevo Footer:**
- Limpieza general del código: eliminación de archivos y scripts duplicados (ej. `Welcome.astro`).
- Creación e integración del componente `Footer.astro` en la plantilla principal (`Layout.astro`).
- Refinamiento visual de la página "Centro de Idiomas" con animaciones dinámicas Astro.

## 10 de Febrero
**Migración de Departamentos a Astro:**
- Migración de las páginas "Ingeniería Ferroviaria" y "Tecnologías de la Información (ITICS)" de PHP a Astro.
- Diseño de componentes temáticos personalizados (acero/naranja para Ferroviaria, cian para ITICS).
- Implementación de títulos SVG animados complejos y efectos interactivos `canvas` para alto impacto visual.

## 11 de Febrero
**Creación de Página de Alumnos:**
- Desarrollo de la nueva página "Alumnos", accesible desde el menú principal.
- Diseño de tarjetas informativas para accesos rápidos a servicios esenciales (SII, Calendarios, Pagos, Correo, Inscripciones, Reglamento, Seguro Facultativo).

## 12 de Febrero
**Refinamiento de Desarrollo Académico:**
- Transformación completa de `Desarrollo_Academico.php` manteniendo su estructura PHP pero modernizando su interfaz visual.
- Implementación de componentes de "Acordeón" estilizados para las secciones de información.
- Mejora del Directorio de Tutores con tablas responsivas, filtros por carrera y recuperación de datos completos.
- Diseño profesional para la descarga de documentos (Lineamientos y Anexos).
- Adición de la sección "Programa Institucional de Tutorías" con acceso directo a calendarios y formatos específicos.

## 16 de Febrero
**Creación de Página de Servicio Médico Institucional:**
- Creación de `servicio-medico.astro` dentro de `pages/servicios-escolares/`.
- Integración del enlace desde `escolares.astro` para acceso desde el menú de Servicios Escolares.

## 17 de Febrero
**Migración de Páginas de Servicios Escolares (PHP → Astro):**
- Migración completa de `baja_definitivaCC.php`, `certificado_gen_ant.php` y `equivalencia_estudios.php` a componentes Astro.
- Actualización de los enlaces de navegación en `escolares.astro` y eliminación de los archivos PHP originales.

## 18 de Febrero
**Estandarización de Headers en Servicios Escolares:**
- Aplicación uniforme del estilo de encabezado azul con tipografía estandarizada en todas las páginas del directorio `servicios-escolares/`.
- Diseño de referencia tomado de `seguro-facultativo.astro` y `seguro-accidentes.astro`.

## 19 de Febrero
**Corrección de Rutas y Links:**
- Actualización de rutas de imágenes en `SectionBanners.astro` para incluir el prefijo `public/` correcto.
- Corrección de routing en `escolares.astro` y `alumnos.astro` implementando correctamente el `BASE_URL`.

## 20 de Febrero
**Corrección del Carrusel de Imágenes:**
- Revisión y corrección de `SectionBanners.astro` para asegurar la correcta visualización de todas las imágenes del carrusel.

## 23 de Febrero
**Actualización de Imágenes de Fondo:**
- Reemplazo de fondos en las páginas "Servicios Escolares" y "Nosotros (Historia)" con nuevas imágenes de `public/images/Fondos/`.
- Ajuste de transparencia y configuración de overlay en cada página.

## 24 de Febrero — Sesión AM
**Corrección de Imagen de Fondo — Centro de Cómputo (`cc.astro`):**
- Eliminado `linear-gradient(...)` colocado incorrectamente en el atributo `class` del `div` de fondo (no es un nombre de clase CSS válido).
- Corregida la ruta de la imagen a `${BASE}images/Centro%20de%20Computo/CC_Portada.jpg` con soporte completo de `BASE_URL`.

**Creación de Página de Contacto (`contacto.astro`):**
- Página premium de pantalla completa con canvas de partículas interactivas (repulsión con el cursor).
- Hero con orbs flotantes animados y título con gradiente animado.
- 4 tarjetas glassmorphism (teléfono, email, ubicación, horario).
- Formulario con validación en tiempo real por campo, contador de caracteres y animación de éxito.
- Mapa de Google embebido con estilo oscuro y grid de 8 departamentos con extensión directa.
- El botón **CONTACTO** en `Header.astro` ya apuntaba a la ruta correcta; sin cambios adicionales requeridos.

**Migración de Extraescolares (PHP → Astro) (`extraescolares.astro`):**
- Migración completa de `extraescolares_New.php` al nuevo componente `src/pages/extraescolares.astro`.
- Hero animado con gradiente rosa/coral, notas musicales flotantes y burbuja morph con CTA al SIAE.
- Galería fotográfica horizontal con las 8 imágenes reales de `public/images/Extraescolares/`.
- 3 tarjetas glassmorphism para el proceso de inscripción (Consulta → Regístrate → Cumple) con reveal en scroll.
- Cuadrícula de 16 actividades (Culturales/Cívicas + Deportes) con thumbnails reales disponibles.
- Gráfica de barras animada para la Escala de Evaluación (0-Insuficiente a 4-Excelente).
- Banner de contacto con enlace a `inscripciones.extraescolares@pachuca.tecnm.mx`.
- Actualizado el enlace en **Departamentos → Extraescolares** en `Header.astro` para apuntar a `/extraescolares`.

**Corrección del Footer (`Footer.astro`):**
- Reescritura completa eliminando clases de Tailwind CSS (no disponible en el proyecto) que impedían ver el layout completo.
- CSS propio con scope mediante `<style>` en el componente: grid de 4 columnas, tipografía, colores y responsive.
- Rutas de logos corregidas con `${BASE}icons/` para soporte de GitHub Pages.
