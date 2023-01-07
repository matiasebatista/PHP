<?php
//operadores
echo "hola"."<br>"; // el . concatena texto 
echo 10 + 3;print "<br>";
echo 10 - 3;print "<br>";
echo 10 * 3;print "<br>";
echo 10 / 3;print "<br>";
echo 10 % 3;print "<br>";
//reduccion de escritura de ecuaciones

$x = 4;
$x = $x + 1;
echo $x;print "<br>";
$x += 1; //hacen lo mismo
echo $x;print "<br>";
$y = 1;
$x = 4;
$x += $y;
echo $x;print "<br>";
$x++;
echo $x;print "<br>";

$x = 3;
$y = $x++;
$z = ++$x;
echo $y;print "<br>"; /* en el caso de la y primero asigna y luego opera por eso al imprimir imprime el valor de X */
echo $z;print "<br>"; // primero le suma y luego agina

?>