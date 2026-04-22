<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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

<main>
    <div class="contenedor-auth">
        <div class="caja-auth">
            <h1>CONTACTO</h1>
            <p style="text-align:center; color:var(--gris); margin-bottom:1.5rem; font-size:0.95rem;">
                ¿Quieres más información sobre nuestra academia? Rellena el formulario y te contactaremos.
            </p>

            <form action="mailto:info@tuacademia.com" method="POST" enctype="text/plain">
                <div class="campo-form">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre y apellidos" required>
                </div>

                <div class="campo-form">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required>
                </div>

                <div class="campo-form">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="612 345 678" required>
                </div>

                <div class="campo-form">
                    <label for="provincia">Provincia</label>
                    <select id="provincia" name="provincia" required>
                        <option value="" disabled selected>Selecciona tu provincia</option>
                        <option value="Álava">Álava</option>
                        <option value="Albacete">Albacete</option>
                        <option value="Alicante">Alicante</option>
                        <option value="Almería">Almería</option>
                        <option value="Asturias">Asturias</option>
                        <option value="Ávila">Ávila</option>
                        <option value="Badajoz">Badajoz</option>
                        <option value="Barcelona">Barcelona</option>
                        <option value="Burgos">Burgos</option>
                        <option value="Cáceres">Cáceres</option>
                        <option value="Cádiz">Cádiz</option>
                        <option value="Cantabria">Cantabria</option>
                        <option value="Castellón">Castellón</option>
                        <option value="Ciudad Real">Ciudad Real</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="A Coruña">A Coruña</option>
                        <option value="Cuenca">Cuenca</option>
                        <option value="Girona">Girona</option>
                        <option value="Granada">Granada</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="Gipuzkoa">Gipuzkoa</option>
                        <option value="Huelva">Huelva</option>
                        <option value="Huesca">Huesca</option>
                        <option value="Illes Balears">Illes Balears</option>
                        <option value="Jaén">Jaén</option>
                        <option value="León">León</option>
                        <option value="Lleida">Lleida</option>
                        <option value="Lugo">Lugo</option>
                        <option value="Madrid">Madrid</option>
                        <option value="Málaga">Málaga</option>
                        <option value="Murcia">Murcia</option>
                        <option value="Navarra">Navarra</option>
                        <option value="Ourense">Ourense</option>
                        <option value="Palencia">Palencia</option>
                        <option value="Las Palmas">Las Palmas</option>
                        <option value="Pontevedra">Pontevedra</option>
                        <option value="La Rioja">La Rioja</option>
                        <option value="Salamanca">Salamanca</option>
                        <option value="S.C. de Tenerife">S.C. de Tenerife</option>
                        <option value="Segovia">Segovia</option>
                        <option value="Sevilla">Sevilla</option>
                        <option value="Soria">Soria</option>
                        <option value="Tarragona">Tarragona</option>
                        <option value="Teruel">Teruel</option>
                        <option value="Toledo">Toledo</option>
                        <option value="Valencia">Valencia</option>
                        <option value="Valladolid">Valladolid</option>
                        <option value="Bizkaia">Bizkaia</option>
                        <option value="Zamora">Zamora</option>
                        <option value="Zaragoza">Zaragoza</option>
                    </select>
                </div>

                <div class="campo-form">
                    <label for="mensaje">Cuéntanos más (opcional)</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Edad del jugador, experiencia previa, horarios preferidos..."></textarea>
                </div>

                <button type="submit" class="btn-auth">ENVIAR MENSAJE</button>
            </form>

            <p class="enlace-auth">También puedes escribirnos a <a href="mailto:info@tuacademia.com">info@luceros.pro</a></p>
        </div>
    </div>
</main>

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