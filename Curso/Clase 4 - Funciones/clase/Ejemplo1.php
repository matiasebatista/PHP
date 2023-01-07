<?php
// pasaje por valor
// viaja el dato crudo
function pasarXvalor($x){
    $x++;
    return $x;
}

//pasaje por referencia, pasa la posicion de memoria donde esta guardado $valor
function pasarXreferencia(&$x){
    $x++;
    return $x;
}

$valor = 3;

echo pasarXvalor($valor);
echo "<br>";
echo $valor;echo "<br>";
echo pasarXreferencia($valor);
echo "<br>";
echo $valor;echo "<br>";


?>