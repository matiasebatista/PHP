<?php
$arcoiris = array("rojo", "verde", "amarillo");
echo $arcoiris[0];echo "<br>";//muestra 1er valor
$arcoiris[] = "rosa";//cargo al  final
print_r($arcoiris);echo "<br>";
$arcoiris[0] = "azul";//cargo segun posicion
print_r($arcoiris);echo "<br>";

?>