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

        <h3>Resolucion del ejercicio 1 de la hoja 2</h3>

        <label for="valor1">Introduce el pimer valor </label>
        <input id="valor1" type="number" name="primerValor">

        <br>

        <label for="valor2">Introduce el segundo valor </label>
        <input id="valor2" type="number" name="segundoValor">

        <br>

        <label for="valor3">Introduce el segundo valor </label>
        <input id="valor3" type="number" name="tercerValor"> 

        <br>

        <?php

        $valor1 = $_POST["primerValor"];

        $valor2 = $_POST["segundoValor"];

        $valor3 = $_POST["tercerValor"];


        if($valor1 < 0) {

            $resultado1 = $valor1 * $valor2 * $valor3;

            echo '<br />' . "El producto de los 3 valores es: " . $resultado1 . '<br />';

        } else {

            $resultado2 = $valor1 + $valor2 + $valor3;

            echo '<br />' . "La suma de los 3 valores es: " . $resultado2 . '<br />';

        }

        ?>
        
        <br>

        <input type="submit" value="Enviar">

        </form>
    
        <a href="../">

        <button> Volver </button>

        </a>

</body>

</html>