<?php
$palabra= "MatiasBatista";
echo strlen($palabra);
echo "<br>";
echo strpos($palabra, "s");
echo "<br>";


$frase = "    Hola mundo    ";
 print("*".$frase."*"."<br>");
 print("*".trim($frase)."*"."<br>");
 print("*".ltrim($frase)."*"."<br>");
 print("*".rtrim($frase)."*"."<br>");
echo str_replace("mundo", "gente", $frase);
echo "<br>";

$cadena1 = "HOLA,";
$cadena1 .= "que tal"; //se suman los textos
echo $cadena1;echo "<br>";

$nro = 123;
printf("Binario: %b <br>", $nro);echo "<br>"; //transformar la impresion segun el formato necesario

$test = "perro|gato|canario";
$separador = "|";
$animal = strtok($test, $separador);

while(is_string($animal)){
    if($animal){
        echo $animal."<br>";
    }
    $animal = strtok($separador);
}

?>