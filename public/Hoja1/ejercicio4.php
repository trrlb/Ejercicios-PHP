<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.4</title>
</head>
<body>

        
    <form method="POST">

        <label for="valor1">Introduce el peso de la primera masa (en Kg) </label>
        <input id="valor1" type="number" name="valor1">

        <br>

        <label for="valor2">Introduce el peso de la segunda masa (en Kg) </label>
        <input id="valor2" type="number" name="valor2">

        <br>
        
        <label for="radio">Introduce el radio de las masas (en metros) </label>
        <input id="radio" type="number" name="radio"> 

        <br><br>

        <input type="submit" value="Enviar">
        
        </form> 

        <br>

        <a href="../">

            <button> Volver </button>

        </a>

        <?php
            
            $masa1 = $_POST["valor1"];

            $masa2 = $_POST["valor2"];

            $radio = $_POST["radio"];

            /*$masa1 = 14e23;

            $masa2 = 23e43;

            $radio = 23e19;*/

            define('constanteGravitacional', 6.67e-11);

            $fuerzaAtraccion = (constanteGravitacional * $masa1 * $masa2) / pow($radio, 2);

            echo '<br />' . '<br />' ."La fuerza de atraccion entre la masa 1($masa1 Kg) y la masa 2($masa2 Kg) con un radio de ($radio metros) es de $fuerzaAtraccion N" . '<br />'; 

        ?>

    <!-- Comentar profesor. Cada vez que runeo el programa el boton de enviar formulario y de volver al inicio desaparece --> 

    <br> 



</body>

</html>