<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.5</title>
</head>
<body>
    <form method="post">

    <h3>Resolucion del ejercicio 5 de la hoja 1</h3>

    <input type="txt" name="fechaNacimiento" placeholder="Introduce tu edad actual">

    <br><br>

    <input type="year" name="anioAcutal" placeholder="Introduce el año actual /aaaa">

    <br>

    <input type="submit" value="enviar">

    </form>

    <?php 
    
    $cumpleanos = $_POST['fechaNacimiento'];

    $anioActual = $_POST['anioAcutal'];

    $edad2020 = $anioActual - 2020;

    $resultado = $cumpleanos - $edad2020;
   
    echo 'Tu edad en 2020 fue: ' . $resultado . ' años';

    ?>

    <br>

    <a href="../">

        <button> Volver </button>

    </a>

</body>
</html>