<?php
$archivo = fopen('people.txt','rb'); //r=read, b=begin

echo "<ul>";
for ($filas = fgets($archivo); !feof($archivo);$filas = fgets($archivo)){
    $filas = trim($filas);
    $info = explode("|", $filas);
    echo "<li>mail to: " . $info[0] . " de " . $info[1] . "</li>";
}
echo "</ul>";
fclose($archivo);
?>