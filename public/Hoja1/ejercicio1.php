<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.1</title>
</head>
<body>
    
    <form method="post">

    <h3>Resolucion de ejercicio 1 de la hoja 1</h3>

    <input type="number" name="pesetas"> Introduce el valor en pesetas
    
    <?php

    $pesetas = $_POST["pesetas"];

    $pesetastoeuros= $pesetas * 0.006;

    $resultado= number_format($pesetastoeuros, 2);

    echo '<br />' . '<br />' .$pesetas . ' pesetas son ' . $resultado . ' euros.';

    ?>

    </form>

    <br>

    <a href="../">

        <button> Volver </button>

    </a>
</body>
</html>