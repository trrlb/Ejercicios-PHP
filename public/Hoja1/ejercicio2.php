<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.2</title>
</head>
<body>

    <form method="post">
    

    <h3>Resolucion de ejercicio 2 de la hoja 1</h3>

    <input type="text" id="nombre" name="gradoCelsius" placeholder="Introduce los grados en Celsius">

    <?php

    $gradosCelsius = $_POST["gradoCelsius"];

    $gradosFahrenheit = ($gradosCelsius * 9/5) + 32;

    echo $gradosCelsius . ' grados Celsius son ' . $gradosFahrenheit . ' grados Fahrenheit.';

    ?>

    </form>

    <br>

    <a href="../">

        <button> Volver </button>

    </a>
    
</body>
</html>