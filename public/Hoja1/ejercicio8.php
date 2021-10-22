<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.8</title>
</head>
<body>
    
    <form method="post">

    <h3>Resolucion del ejercicio 8 de la hoja 1</h3>

    Introduce un numero <input type="number" name="numeroInicial"> 

    <br> 

    </form>

    <?php 

    $numeroInicial = $_POST["numeroInicial"];  ?>

    <table>
    
        
            
        <?php for ($i = $numeroInicial + 1; $i < $numeroInicial + 6; $i++) {

            $cuadradoNumero = pow($i, 2); ?>
        
            <tr><th><?php echo $cuadradoNumero?></th></tr>
    
    
    </table>  
    
    <table>

            <?php $cuboNumero = pow($i, 3); ?>

            <tr><th><?php echo $cuboNumero; ?></th></tr>

        <?php } ?>

            

    </table>

    

    <br>

    <a href="../">

        <button> Volver </button>

    </a>
</body>
</html>