<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

    <h3>Introduce tu horario de cita</h3>
    
    <p>

        <label for="cita">Fecha:</label>
        <input type="text" name="cita" 
        <?php mostrar_campo('cita'); ?>
        placeholder="dd/mm/aaaa">
    
        <?= mostrar_error_campo('cita', $errores); ?>
    </p>

    <p>
    
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" 
        <?php mostrar_campo('nombre'); ?>
        placeholder="Introduce tu nombre completo">
    
        <?= mostrar_error_campo('nombre', $errores); ?>

    </p>

    <input type="submit" value="Agregar cita">

</form>

<a href="../">

<button> Volver </button>

</a>


