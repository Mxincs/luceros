<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="<?= $base ?>css/styles.css"> <!-- Ruta al CSS desde la raíz -->
</head>
<body>
<!----------------NAVBAR---------------------->
<header>
    <nav class="navbar" aria-label="Navegación Principal">

        <a href="<?= $base ?>index.php" class="logo-luceros">
            <img src="<?= $base ?>img/logo_LUCEROS_IFA.png" alt="Logo Luceros IFA">
        </a>

        <ul class="nav-links">

            <!-- ÍTEM DESPLEGABLE -->
            <li class="desplegable">
                <a href="<?= $base ?>paginas/programas.php" class="programas-mod" aria-haspopup="true" aria-expanded="false">PROGRAMAS</a>

                <ul class="submenu">
                    <!-- SECCIÓN 1 -->
                    <li class="submenu-section">
                        <span class="titulo-submenu texto-rojo">SERLO</span>
                        <div class="program-grid">
                            <a href="<?= $base ?>paginas/programas.php#card-1">Control, pase y conducción</a>
                            <a href="<?= $base ?>paginas/programas.php#card-2">Dominio del regate</a>
                            <a href="<?= $base ?>paginas/programas.php#card-3">Ataque y defensa de la pared</a>
                            <a href="<?= $base ?>paginas/programas.php#card-4">Golpeos</a>
                            <a href="<?= $base ?>paginas/programas.php#card-5">Conceptos defensivos</a>
                            <a href="<?= $base ?>paginas/programas.php#card-6">Conceptos ofensivos</a>
                        </div>
                    </li>

                    <!-- SECCIÓN 2 -->
                    <li class="submenu-section">
                        <span class="titulo-submenu texto-negro">PARECERLO</span>
                        <div class="program-grid">
                            <a href="<?= $base ?>paginas/programas.php#card-7">Cómo gestionar la presión</a>
                            <a href="<?= $base ?>paginas/programas.php#card-8">Claves de la representación deportiva</a>
                            <a href="<?= $base ?>paginas/programas.php#card-9">Cómo interactuar con los árbitros</a>
                            <a href="<?= $base ?>paginas/programas.php#card-10">Aprende a alimentarte como un atleta</a>
                            <a href="<?= $base ?>paginas/programas.php#card-11">Cómo crear tu marca personal</a>
                            <a href="<?= $base ?>paginas/programas.php#card-12">Cómo llevar tus RR.SS.</a>
                        </div>
                    </li>
                </ul>
            </li>

            <li><a href="<?= $base ?>paginas/academia.php">ACADEMIA</a></li>
            <li><a href="<?= $base ?>paginas/equipo.php">EQUIPO</a></li>
            <li><a href="<?= $base ?>paginas/galeria.php">INSTALACIONES</a></li>
            <li><a href="<?= $base ?>paginas/noticias.php">NOTICIAS</a></li>
            <li><a href="<?= $base ?>paginas/porquealicante.php">¿POR QUÉ ALICANTE?</a></li>
            <li><a href="#contacto" class="contacto-mod">CONTACTO</a></li>

        </ul>
    </nav>
</header>

</body>
</html>