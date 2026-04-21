<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
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

<div class="nav-spacer"></div> 

<!-- 
======================================================================
HERO - VIDEO CON TÍTULO
====================================================================== 
-->

<section class="hero-video">
    <video autoplay muted loop playsinline>
        <source src="../video/video_hero_equipo.mov" type="video/mp4">
    </video>
    <div class="hero-overlay">
        <h1 class="hero-titulo">EL VALOR DEL EQUIPO</h1>
    </div>
</section>

<!-- 
======================================================================
DIRECCIÓN DEL PROYECTO
====================================================================== 
-->

<section class="seccion-estructura-direccion">

    <h2 class="texto-seccion-direccion texto-negro">DIRECCIÓN <br> DEL PROYECTO </h2>

    <p class="subtitulo-seccion">LUCEROS International Football Academy <span class="linea-separadora"></span></p>

    <div class="embajadores">

        <div class="embajador">
            <div class="foto">
                <img src="../img/balon.png" alt="Director General">
            </div>
            <p class="nombre">Nombre</p>
            <p class="cargos-directivos">DIRECTOR GENERAL</p>
        </div>

        <div class="embajador">
            <div class="foto">
                <img src="../img/balon.png" alt="Coordinador Academia Internacional">
            </div>
            <p class="nombre">Nombre</p>
            <p class="cargos-directivos">COORDINADOR ACADEMIA INTERNACIONAL</p>
        </div>

        <div class="embajador">
            <div class="foto">
                <img src="../img/balon.png" alt="Coordinador Fútbol Base">
            </div>
            <p class="nombre">Nombre</p>
            <p class="cargos-directivos">COORDINADOR FÚTBOL BASE</p>
        </div>

        <div class="embajador">
            <div class="foto">
                <img src="../img/balon.png" alt="Head of Scouting">
            </div>
            <p class="nombre">Nombre</p>
            <p class="cargos-directivos">HEAD OF SCOUTING</p>
        </div>

    </div>

</section>

<!-- 
======================================================================
STAFF TÉCNICO
Contiene el fondo de la cancha y imagenes con los entrenadores
====================================================================== 
-->

  <section class="seccion-estructura">

        <h2 class="texto-seccion texto-negro">STAFF TÉCNICO</h2>

        <div class="embajadores">

            <div class="embajador">
                <div class="foto">
                <img src="../img/balon.png" alt="Nombre Apellido">
                </div>
                <p class="nombre">Nombre</p>
                <p class="cargos-directivos">Entrenador</p>
            </div>

        </div>

        <div class="embajadores">

                <div class="embajador">
                    <div class="foto">
                    <img src="../img/balon.png" alt="Nombre Apellido">
                    </div>
                    <p class="nombre">Nombre</p>
                    <p class="cargos-directivos">PREPARADOR FÍSICO</p>
                </div>

                <div class="embajador">
                    <div class="foto">
                    <img src="../img/balon.png" alt="Nombre Apellido">
                    </div>
                    <p class="nombre">Nombre</p>
                    <p class="cargos-directivos">2º ENTRENADOR</p>
                </div>

                <div class="embajador">
                    <div class="foto">
                    <img src="../img/balon.png" alt="Nombre Apellido">
                    </div>
                    <p class="nombre">Nombre</p>
                    <p class="cargos-directivos">ENTRENADOR DE PORTEROS</p>
                </div>

            </div>

    </section>

<!-- 
======================================================================
EMBAJADORES
Contiene los embajadores de dicho país
====================================================================== 
-->

    <section class="seccion-embajadores color-fondo-blanco">

        <div class="info-aprendizaje-integral texto-negro">

        <h2 class="texto-seccion texto-negro texto-izquierda">EMBAJADORES</h2>

            <p>
                <strong>LUCEROS International Football Academy</strong> colabora con profesionales de reconocido prestigio. 
                Su generosa disposición para compartir sus conocimientos y
                experiencias enriquece el aprendizaje de nuestros alumnos, impulsando su crecimiento integral 
                y motivándolos a perseguir sus metas con determinación

            </p>

        </div>

        <div class="embajadores texto-negro">

            <div class="embajador">
                <div class="foto">
                <img src="../img/balon.png" alt="Nombre Apellido">
                </div>
                <p class="nombre">Nombre Apellido</p>
            </div>

            <div class="embajador">
                <div class="foto">
                <img src="../img/balon.png" alt="Nombre Apellido">
                </div>
                <p class="nombre">Nombre Apellido</p>
            </div>

            <div class="embajador">
                <div class="foto">
                <img src="../img/balon.png" alt="Nombre Apellido">
                </div>
                <p class="nombre">Nombre Apellido</p>
            </div>

            <div class="embajador">
                <div class="foto">
                <img src="../img/balon.png" alt="Nombre Apellido">
                </div>
                <p class="nombre">Nombre Apellido</p>
            </div>

            <div class="embajador">
                <div class="foto">
                <img src="../img/balon.png" alt="Nombre Apellido">
                </div>
                <p class="nombre">Nombre Apellido</p>
            </div>

            <div class="embajador">
                <div class="foto">
                <img src="../img/balon.png" alt="Nombre Apellido">
                </div>
                <p class="nombre">Nombre Apellido</p>
            </div>

            <div class="embajador">
                <div class="foto">
                <img src="../img/balon.png" alt="Nombre Apellido">
                </div>
                <p class="nombre">Nombre Apellido</p>
            </div>

            <div class="embajador">
                <div class="foto">
                <img src="../img/balon.png" alt="Nombre Apellido">
                </div>
                <p class="nombre">Nombre Apellido</p>
            </div>

        </div>

    </section>


<!-- 
======================================================================
FOOTER: INFORMACIÓN LEGAL Y CONTACTO
====================================================================== 
-->    

    <?php $base = '../'; // Estamos en /paginas/, necesitamos subir una carpeta para llegar a la raíz ?>
    <?php include('../includes/footer.php'); // Subimos una carpeta para encontrar el header ?>

    <script src="../js/cards.js"></script>
</body>
</html>

