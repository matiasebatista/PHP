<?php 
echo "<b> ejercicio 1</b> <br>";
function calcularEDAD(){
    $fecha = date("Y");
    for ($i = 0;$i<5;$i++){
        $añoNacimiento = rand(1960, $fecha);
        print  "Edad:  ".$fecha - $añoNacimiento ."<br>" ;
    }
}
echo calcularEDAD();


echo "<br>";
echo "<br>";
echo "<b> ejercicio 2</b> <br>";

function area($lado,$radio,$pi=3.1416){
    $areaCirculo = pow($pi,2) * $radio;
    $areaCuadrado = pow($lado, 2);
    return "el radio del circulo es: $radio y su área: $areaCirculo <br>
     y el lado del cuadrado es: $lado y su área: $areaCuadrado";
      
    ;
}
echo area(rand(1,20),rand(1,20));

echo "<br>";
echo "<br>";
echo "<b> ejercicio 3</b> <br>";

function ParOImpar(){
    $numero = rand(1,1000);
    if(($numero % 2) == 0){
        print "Numero: " . $numero . " es Par.";
    }else{
        print "Numero: " . $numero . " es Impar.";
    }
}

echo ParOImpar();

echo "<br>";
echo "<br>";
echo "<b> ejercicio 4</b> <br>";

function formatoTexto($texto){
    return "<b><u> $texto </b></u>";
}
echo formatoTexto("Hola, este es un texto");

echo "<br>";
echo "<br>";
echo "<b> ejercicio 5</b><br>";
$arrayExample = array("hola", "que tal");
function addElementToArray(&$array, $element){
    array_push($array, $element);
    return $array;
}
 
print_r(addElementToArray($arrayExample, "chau"));echo "<br>";
print_r($arrayExample);

echo "<br>";
echo "<br>";
echo "<b> ejercicio 6</b><br>";

$fecha = date("d");
function agregarDia(){
    global $fecha;
    return "Dia de la fecha con 1 dia mas: ". $fecha + 1;
}
echo agregarDia();
?>