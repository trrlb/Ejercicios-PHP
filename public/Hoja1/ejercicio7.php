<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.7</title>
</head>
<body>
    
    <form method="post">

        <h3>Resolucion del ejercicio 7 de la hoja 1</h3>

        Introduce un numero real <input type="number" name="numeroReal"> 

    <?php

        $numeroReal = $_POST["numeroReal"];

        for ($i = 1; $i <= 10; $i++) {

            $multiplicacion = $numeroReal * $i;
        
            echo '<br />' . $numeroReal . " x " . $i . " = " . $multiplicacion;

        }

    ?>

    </form>

    <br>

    <a href="../">

    <button> Volver </button>

    </a>

</body>
</html>