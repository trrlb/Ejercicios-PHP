hoy<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.3</title>
</head>
<body>
    <form method="post">

        <h3>Resolucion de ejercicio 3 de la hoja 1</h3>

        <input type="number" name="radio" value="Introduce el radio de la circunferencia">

        </form>
        
        <?php

        $radio = $_POST["radio"];

        $longitudCircunferencia = 2*pi()*$radio;

        $radioCircunferencia = pi() * pow($radio, 2);

        echo "<br />" . "<br />";

        echo "La longitud de la circunferencia es: " . $longitudCircunferencia;

        echo "<br />" . "<br />";   

        echo "El area de la circunferencia es: " . $radioCircunferencia;

        ?>

    
    
    <br>
    
    <a href="../">

        <button> Volver </button>

    </a>


</body>
</html>