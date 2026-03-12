<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programas</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/style_programas.css">
</head>
<body>

<!-- 
======================================================================
1. HEADER & NAVEGACION
Contiene el branding y el menú desplegable con lógica de grid.
====================================================================== 
-->

<?php $base = '../'; // Estamos en /paginas/, necesitamos subir una carpeta para llegar a la raíz ?>
<?php include('../includes/header.php'); // Subimos una carpeta para encontrar el header ?>

<!-- 
======================================================================
2 HERO VIDEO SECTION
Banner visual de alto impacto con video en loop.
====================================================================== 
-->
        <section class="hero-video">
            <div class="video-wrapper">

                <!-- 
                    Atributos:
                    - muted: Obligatorio para que el autoplay funcione en navegadores modernos.
                    - playsinline: Evita que iOS abra el video en pantalla completa nativa.
                    - poster: Imagen de respaldo por si el video falla o tarda en cargar.
                -->
                <video autoplay muted loop playsinline poster="../img/poster-video.png" class="video-bg">
                    <source src="../video/video-hero-prog-luceros.mp4" type="video/mp4">
                </video>
                <div class="video-overlay"></div>
            </div>
        </section>

<!-- 
======================================================================
3. SECTION: INFORMACION Y DESCRIPCION DE LA PAGINA 
titulo y descripcion principal 
====================================================================== 
-->
        <section class="hero-informacion">
            <div class="cont-contenido">
                <h1>FORMACIÓN PRO</h1>
                <span class="texto-importante">Controla tu MENTE + Cuida tu CUERPO + Domina el BALÓN = FÚTBOL DE ÉLITE</span>
                <p>
                    <span class="texto-negrita">El fútbol actual va mucho más allá del talento individual.</span> La aparición de las <span class="texto-negrita">redes sociales y de las tecnologías basadas en datos</span> ha convertido este deporte en un escenario donde <span class="texto-negrita">cada detalle marca la diferencia.</span> <br><br>

                    Por ello, en <span class="texto-negrita">LUCEROS International Football Academy</span> promovemos una filosofía de <span class="texto-negrita">formación integral</span>, con programas diseñados <span class="texto-negrita">para que nuestros alumnos y alumnas se desarrollen como atletas completos</span>, preparados a nivel mental, físico y técnico/táctico, <span class="texto-negrita">capaces de unir su talento natural con disciplina e inteligencia.</span><br>
                    <div class="cont-texto-importante">
                        <span class="texto-importante">LUCEROS International Football Academy ofrece un PROGRAMA FORMATIVO <br> TOTAL para que jóvenes futbolistas se formen como verdaderos profesionales, <br> combinando tanto conceptos técnicos/tácticos, como psicológicos y nutricionales.</span><br><br>
                    </div>
                    Nuestros programas están diseñados para potenciar al máximo las habilidades de los jugadores/as, brindándoles recursos que les permitan competir en sus ligas y/o
                    optar a becas deportivas.
                </p>
            </div>
        </section>
    </main>

<!-- 
======================================================================
4. SECTION: SELECCIÓN DE CATEGORÍA
Selector principal para filtrar entre programas internos y externos.
====================================================================== 
-->
    <section>
        <div class="con-den-fue">
            <h2>PROGRAMAS FORMATIVOS</h2>
            <p class="destacado">¡EL FUTBOLISTA ADEMÁS DE <span class="texto-negrita">SERLO</span> HA DE <span class="texto-negrita">PARECERLO</span>!</p>
            <div class="cont-botones">
                <a href="#card-1" class="btn bt-dentro">SERLO</a>
                <a href="#card-7" class="btn bt-fuera">PARECERLO</a>
            </div>
        </div>
    </section>

<!-- 
======================================================================
5. SECTION: LISTADO DE PROGRAMAS (CARDS)
----------------------------------------------------------------------
ESTADO: Contenedor Dinámico.
ORIGEN DE DATOS: /js/cursos.js (programasData)
DESCRIPCIÓN: Esta sección actúa como un "cascarón" vacío. 
La función renderizarCursos() inyecta aquí los artículos (<article>)
correspondientes a cada programa formativo, divididos en dos bloques:
'Dentro del Campo' y 'Fuera del Campo'.
====================================================================== 
-->
    <section class="programas">

        <!-- Bloque 3.1: Dentro del Campo (Esquema rojo) -->
        <div class="programas__block programas__block--dentro">

            <!-- Contenedor para inyección de Cards 1 a 6 -->
            <div id="container-dentro" class="programas__container"></div>

        </div>

        <!-- Bloque 3.2: Fuera del Campo (Esquema negro) -->
        <div class="programas__block programas__block--fuera">

            <!-- Contenedor para inyección de Cards 7 a 12 -->
            <div id="container-fuera" class="programas__container"></div>

        </div>
    </section>

<!-- 
======================================================================
6. CONTACTO: Enlace a pagina contacto con logo luceros 
====================================================================== 
--> 
    <section class="contacto">
        <div class="cont__cuerpo">
            <div class="cont__cuerpo-enlace">
                <span>Contacta con nosotros para</span>
                <a href="#contacto">+ INFORMACIÓN</a>
            </div>
            <div class="cont__cuerpo-img">
                <img src="../img/logo_LUCEROS_IFA.png" alt="Logo Luceros IFA">
            </div>
        </div>
    </section>

<!-- 
======================================================================
7. FOOTER: INFORMACIÓN LEGAL Y CONTACTO
====================================================================== 
-->    

    <?php $base = '../'; // Estamos en /paginas/, necesitamos subir una carpeta para llegar a la raíz ?>
    <?php include('../includes/footer.php'); // Subimos una carpeta para encontrar el header ?>

    <script src="../js/cards.js"></script>
</body>
</html>

