<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.4</title>
</head>
<body>
    
    <form method="post">

    <p>Siendo una raiz cuadrada ax^2 + bx + c</p>

    <label for="coeficienteA"> Introduce el coeficiente a</label>
    <input id="coeficienteA" name="coeficienteA" type="number"><br>
    
    <label for="coeficienteB"> Introduce el coeficiente b</label>
    <input id="coeficienteB" name="coeficienteB" type="number"><br>

    <label for="coeficienteC"> Introduce el coeficiente c</label>
    <input id="coeficienteC" name="coeficienteC" type="number"><br>

    <input type="submit" value="Enviar"> 

    </form>

    <?php 
    
    $coeficienteA = $_POST["coeficienteA"];
    $coeficienteB = $_POST["coeficienteB"];
    $coeficienteC = $_POST["coeficienteC"];

    $raizCuadrada = pow($coeficienteB, 2) - (4*$coeficienteA*$coeficienteC);

    if($raizCuadrada < 0) {

        echo " (" . $coeficienteB . "+" . $raizCuadrada . "i) /" . 2*$coeficienteA;

        echo '<br />' . " (" . $coeficienteB . $raizCuadrada . "i) /" . 2*$coeficienteA;

    } else {

        echo " (" . $coeficienteB . "+" . $raizCuadrada . ") /" . 2*$coeficienteA;

        echo '<br />' . " (" . $coeficienteB . "-" . $raizCuadrada . ") /" . 2*$coeficienteA;

    }

    ?>

    <br>

    <a href="../">

        <button> Volver </button>

    </a>


</body>
</html>