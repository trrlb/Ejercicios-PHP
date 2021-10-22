<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
</body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <!--"<*?= <*?*php echo" action envia el formulario al mismo sitio del script-->
    
        <p> 
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" 
            <?php mostrar_campo('nombre'); ?>
            placeholder="Introducce tu nombre">
            <?php mostrar_error_campo('nombre', $errores); ?>
        </p>

        <p>
            <label for="email">Email</label>
            <input type="email" name="email"
            <?php mostrar_campo('email'); ?>>
            <?php mostrar_error_campo('email', $errores); ?>
        </p>

        <p>
            <label for="clave1">Contraseña</label>
            <input type="password" name="clave1">
            <?php mostrar_error_campo('clave1', $errores); ?>
        </p>

        <p>
            <label for="clave2">Repetir Contraseña</label>
            <input type="password" name="clave2">
            <?php mostrar_error_campo('clave2', $errores); ?>
        </p>

        <p>
            <input type="submit" value="Enviar">
        </p>

    </form>

    <a href="../">

        <button> Volver </button>

    </a>

</html>