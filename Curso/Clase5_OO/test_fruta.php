<?php

include 'frutas.php';

$manzana = new Fruta('Manzana');
$banana = new Fruta('Banana');



echo $manzana->getNombre();
echo "<br>";
echo $banana->getNombre();
?>