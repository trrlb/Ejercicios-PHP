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

        $errores = [];

        include "funciones.php";

        $archivo = "citas.txt";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {  //consulta cabecera http para ver si le estas enviando algo por POST

            if (isset($_POST['cita']) && $_POST['cita'] != '' && isset($_POST['nombre']) && $_POST['nombre'] != '') { //Aqui consulta si los datos de cita y nombre existen, ademas pregunta si son diferentes de una cadena de texto vacia

                    if (is_writeable($archivo)) {  //aqui pregunta si el archivo "citas.txt" es escribible para poder enviarle los datos del formulario
                    
                        $fuente = fopen($archivo, 'a+');
                    
                        $reserva = $_POST['cita'] . ' : ' . $_POST['nombre'] . "\n";
                    
                        fwrite($fuente, $reserva);
                    
                        fclose($fuente);
                    
                        echo "<h2>Cita guardada correctamente</h2>";
                
                    }  else {

                    echo "<h2>La cita no ha podido ser guardada</a>";

                }    
        
            } else {

                if ( !isset($_POST['nombre'])) {

                    $errores['nombre'] = "No he recibido el nombre";

                } elseif ( strlen($_POST['nombre']) < 3) { 

                    $errores['nombre'] = "Campo nombre demasiado corto";

                }

                if ( !isset($_POST['cita'])) {

                    $errores['cita'] = "No he recibido la fecha de la cita";

                } elseif ( strlen($_POST['cita']) < 3) { 

                    $errores['cita'] = "Fecha de la cita no valida";

                }

                if ($errores) {
                    
                    mostrar_errores($datos);

                    include "formularioCitas.php";
                }

                //volver a mostrar el formulario con los errores
            
            } 
            
        } else {

            include "formularioCitas.php";

        }

    ?>

</body>
</html>