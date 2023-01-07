<?php
//y --> AND , &&
//o --> OR, ||
//se pueden combinar y utilizar cualquiera de estos

//operadores de comparacion
// == , <,>, >=,< , =! or <> (distinto)

?>

<?php
$humor = "contenta";
$dia = 2;

if( $humor == 'feliz' && $dia==1){
    //salida para TRUE , ambos verdaderos
    echo "estoy feliz" . "<br>";
} else {
    echo "estoy contenta" . "<br>";
}

if( $humor == 'feliz' || $dia==2){
    //salida para TRUE , al menos 1 debe ser verdadera
    echo "estoy feliz" . "<br>";
} else {
    echo "estoy contenta" . "<br>";
}
//if anidado, se recomienda se use lo menor posible por un tema de velocidad

if( $humor == 'contenta' and $dia==2){
    //salida para TRUE , al menos 1 debe ser verdadera
    echo "estoy muy contenta" . "<br>";
} elseif($humor == "contenta" || $dia != 2){
    echo "estoy feliz" . "<br>";
}else{
    echo "no estoy contenta ni feliz";
}
//formato if reducido con operador terciaro ,se usa para guardar su resp en una variable
$humor = "triste";
$dia = 4;
$respuesta = ($humor == "feliz" && $dia == 3) ? "estoy triste en este dia" : "estoy feliz en este dia";
// despues del ? va lo verdadero y del : el caso falso



//SWITCH/ CASE
$hora = 25;
switch($hora){
    case 0:
        echo "estoy en 0"."<br>";
        break; //hace que no siga con los demas caso en caso de encontrarlo Verdadero
    case 5:
        echo "estoy en 5"."<br>";
        break; 
    case 10:
        echo "estoy en 5"."<br>";
        break; 
    default:
        echo "estoy en default";
}

//switch multiple
$cerveza = "negra";
switch($cerveza){
    case "ale":
    case "negra":  
    case "artesanal":
        echo "tengo cerveza > graduación"."<br>";
        break;
    case "rubia":
    case "trigo":
        echo "tengo cerveza de < graduación";
        break;
    default:
        echo "estoy en default";
}
?>