<?php
$z = array(1, 3, 6, 2, 9);
sort($z); //ordena;
$Y = array(1 =>'uno', 9=> 'nueve', 4 => 'cuartro');
echo asort($a); //ordena por valores
echo "<br>";
echo ksort($a);//ordena por keys
echo "<br>";
//serch, es keysensitive

array_search(6, $z);
echo "<br>";

?>