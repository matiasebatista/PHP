<?php

/*
Ejercicio 1 : colocar una edad y obtener un mensaje dependiendo de la edad ingresada.
 */
$edad = 56;
if( $edad >= 18 and $edad <= 35){
    echo "Mensaje para JOVENES";
}elseif($edad >=1 and $edad<= 17){
    echo "Mensaje para los CHICOS";
}else{
   echo "Mensaje Generico";
}
echo "<br>";
echo "<br>";
echo "<br>";

/*
Ejercicio 2 : use un foreach para recorrer el array y sacar que tipo de dato es cada valor dentro de este mismo.
 */


$listaArmada = array(1, 'uno', 1.10, true);
foreach($listaArmada as $key => $value){
    echo gettype($listaArmada[$key]);
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

/*
Ejercicio 3 : comparar los numeros ingresados mediante el uso de un switch.
 */

$input1 = 12;
$input2 = 24; 
switch($input1){
    case $input1 == $input2:
        echo "valores iguales";
        break;
    case $input1 > $input2:
        echo "$input1 es mayor que $input2";
        break;
    case $input1 < $input2:
         echo "$input1 es menor que $input2";
        break;
    default:
        echo "no se insertaron datos correctamente";
}
echo "<br>";
echo "<br>";

if($input1 <= $input2){
    echo "$input1 es <= que $input2";
} else
    echo "$input1 es mayor que $input2";

echo "<br>";
echo "<br>";
echo "<br>";
/** 
 * Ejercicio hecho con el if reducido(nicolas pavon)
 */
$uno = 1;
$dos = 2;
 
$compare1 = ($uno == $dos) ? "son iguales" : "no son iguales";
echo $compare1 . "<br>";
$compare2 = ($uno < $dos) ? "es menor" : "es mayor o igual";
echo $compare2 . "<br>";
$compare3 = ($uno > $dos) ? "es mayor" : "es menor o igual";
echo $compare3 . "<br>";
$compare4 = ($uno <= $dos) ? "es menor o igual" : "es mayor";
echo $compare4 . "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
/*
Ejercicio 4 : setear los valores de cada producto para 
imprimir luego el total de lo sacado.
 */
$hamburguesa = 4.95;
$chocolatada = 1.95;
$cocacola = 0.85;
$IVA = 1.075;
$total = ($hamburguesa*2 +$chocolatada+$cocacola)*$IVA;
echo $total * 1.16;

echo "<br>";
echo "<br>";
echo "<br>";
/*
Ejercicio 5 : con los valores otorgados anteriormente imprimir todo en modo "ticket"
con la distribucion.
 */

 /** puede usarse table para imprimir de mejor manera la información*/

echo "Hamburguesa: 2x$ ".$hamburguesa;echo "<br>";
echo "Chocolatada: $".$chocolatada ;echo "<br>";
echo "CocaCola: $".$cocacola ;echo "<br>";
echo "IVA: ".$IVA ;echo "<br>";
echo "TOTAL: $".$total;echo "<br>";
echo "Propina: 16%";
echo "<br>";
echo "FINAL: $". $total * 1.16;echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
/*
Ejercicio 7 :uso del bucle for para utilizar el increment0
y luego el *= junto con otra variable la que denomine factorial.
 */

$factorial = 1; 
 for ($i = 1; $i < 6; $i++){ 
    print "numero: ".$i."<br>";
    $factorial *=  $i;
    print "factorial: ".$factorial . "<br>";
}
    
?>
