<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Médicas</title>
</head>
<body>
    
    <?php

        $archivo = "citas.txt";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['cita']) && $_POST['cita'] != '' && isset($_POST['nombre']) && $_POST['nombre'] != '') {

                if (is_writeable($archivo)) {

                    $reserva = $_POST['cita'] . ' : ' . $_POST['nombre'] . "\n";

                    file_put_contents($fuente, $archivo);

                    echo "<h2>Cita guardada correctamente</a>";

                }  else 

                    echo "<h2>La cita no ha podido ser guardada</a>";

            } else {

                //volver a mostrar el formulario con los errores
            
            } 
            
        } else {

            include "formularioCitas.php";

        }

    ?>

</body>
</html>