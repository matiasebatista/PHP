<?php
$vector = array('uno',2,true,5.45);
for($i=0;$i<4;$i++){
    print $vector[$i]."<br>";
}
echo "<br>";

print_r($vector);//imprime posicion => valor
echo "<br>";
var_dump($vector);//imprime tambien tipo de datos
echo "<br>";
//diccionario
$a = array('a' => 'silla','b'=> 'mesa','c' => 30);
print_r(array_keys($a));echo "<br>";
print_r(array_values($a));echo "<br>";
print_r(array_flip($a));echo "<br>";//valor primero y luego claves

//unshif inserta al inicio y push al final

$z = array(1, 2, 3);
array_unshift($z, 0);
echo "<br>";
array_push($z,4);echo "<br>";
echo $z;echo "<br>";
//SHIFT borra el primer valor 
echo array_shift($z);echo "<br>";
print $z;echo "<br>";
// POP borra el ultimo
array_pop($z);
print $z
?>echo "<br>";