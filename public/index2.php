<?php ini_set('display_errors', 1) ?>

<h1> Esta es mi primera pagina web </h1>

<?php

    $soyvariable = "Heriberto Martínez";

    echo $soyvariable

?>

    <br>

<?php

    $yo = '';

    if ($yo == 'Pepe') {
        echo 'Yo soy Pepe';
    }   else {
        echo 'Yo no soy Pepe';
    }

?>

<?php $yo = ''; ?>

<?php if ($yo == 'Pepe') { ?>

    <p> Yo soy Pepe; </p>

<?php }  else {  ?>

    <p> Yo no soy Pepe; </p>

<?php } ?>

<?php 

    $variable1 = '1';
    $variable2 = 1;

    if ( $variable1 === $variable2) {
        echo 'Son iguales';
    }

        echo ($variable1 === $variable2) ? 'Son iguales' : 'No son iguales'; 

?>


