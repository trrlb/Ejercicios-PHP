<?php

include "Etiqueta.php"; //Tengo que incluir esta antes que Enlace.php ya que en el fichero Enlace.php estamos haciendo referencia con extend a Etiqueta

include "Enlace.php"; 

include "MigasPan.php";

include "MigasPanContenedor.php";

$migas = new MigasPanContenedor('-', 'section');

$migas->agregaNodo('Home', 'http://www.iescierva.net');
$migas->agregaNodo('Noticias', 'http://www.iescierva.net/noticias');
$migas->agregaNodo('Noticias Academicas', 'http://www.iescierva.net/noticias/academicas');

echo $migas->mostrar();

?>