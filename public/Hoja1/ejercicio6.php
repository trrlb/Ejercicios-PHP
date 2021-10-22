<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.6</title>
</head>
<body>
    <h3>Resolucion del ejercicio 6 de la hoja 1</h3>
    

    <?php

    $cantidad = 2345.67;

    $cantidadParcial = $cantidad;

    $b500 = (int) ($cantidadParcial / 500);

    $cantidadParcial = $cantidadParcial - $b500 * 500;

    $b200 = (int) ($cantidadParcial / 200);

    $cantidadParcial = $cantidadParcial - $b200 * 200;

    $b100 = (int) ($cantidadParcial / 100);

    $cantidadParcial = $cantidadParcial - $b100 * 100;

    $b50 = (int) ($cantidadParcial / 50);

    $cantidadParcial = $cantidadParcial - $b50 * 50;

    $b20 = (int) ($cantidadParcial / 20);

    $cantidadParcial = $cantidadParcial - $b20 * 20;

    $b10 = (int) ($cantidadParcial / 10);

    $cantidadParcial = $cantidadParcial - $b10 * 10;

    $b5 = (int) ($cantidadParcial / 5);

    $cantidadParcial = $cantidadParcial - $b5 * 5;
?>

    <a href="../">

    <button> Volver </button>

    </a>
</body>
</html>






