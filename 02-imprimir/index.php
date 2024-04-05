<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title> Imprimir en pantalla </title>
</head>

<body>
    <h1>Imprimir en pantalla master php</h1>

    <?= "Bien venido al curso de php master"?> <!-- Esto es en echo acortado -->

    <?php
        // Titulo de la seccion
        echo "<h3>Lista de videojuegos</h3>";

        // Listado de la seccion
        echo "<ul>"
             ."<li>Call Of Duty</li>"
             ."<li>Gears Of war</li>"
             ."<li>Halo</li>"
             ."<li>Plabtas vs Zombies GW</li>";

        echo "<p>Esta es toda la lista de videojuegos"." del año</p>";
    ?>
</body>

</html>