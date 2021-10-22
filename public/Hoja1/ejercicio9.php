<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.9</title>
</head>
<body>
    
    <form method="post">

    <h3>Resolucion del ejercicio 9 de la hoja 1</h3>

    Introduce un ángulo en radianes <input type="number" name="anguloRadian">

    <?php

    $anguloRadian = $_POST["anguloRadian"];

    $anguloGrados = rad2deg($anguloRadian);

    list($entero,$decimal)= explode(".",$anguloGrados);

    $grado=$entero; $minutos=("0.".$decimal)*60;

    list($entero,$decimal)= explode(".",$minutos);

    $minutos=$entero; $anguloGrados=("0.".$decimal)*60; 

    list($entero,$decimal)= explode(".",$anguloGrados);

    $segundos=$entero; $anguloGrados=("0.dct".$segundos)*60;


    if ($anguloRadian == 1) {

        echo '<br />' . '<br />' . $anguloRadian . ' radian son ' . $grado . 'º ' . $minutos . "' " . $segundos . '" ';

    } else { 

        echo '<br />' . '<br />' . $anguloRadian . ' radianes son ' . $grado . 'º ' . $minutos . "' " . $segundos . '" ';

    }

    ?>

    </form>

    <br>
    <a href="../">

        <button> Volver </button>

    </a>

</body>
</html>