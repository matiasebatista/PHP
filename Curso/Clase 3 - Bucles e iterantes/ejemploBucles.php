<?php

$cant = 1;
while($cant <=10){
    echo $cant . "*2 =" . ($cant * 2) . "<br>";
    $cant++;
}//imprime hasta 10 veces

$cant = 11;

do {
    echo $cant . "*2 =" . ($cant * 2) . "<br>";
    $cant++;
} while ($cant <= 10);
//entra al menos 1 vez al bucle

for ( $i=1 ; $i<=0 ;$i++){ //inicio , fin , incremento
    echo "$i * 3 =" . ($i * 3) . "<br>";
}
$contar = -4;
for (;$contar<=10 ;$contar++){ 
    echo $contar. "<br>";
    if($contar== 5){
        break;
    }
}

echo "<table border=1>";
for($fila=1;$fila<=7;$fila++){
    echo "<tr>";
    for($cols=1;$cols<=4;$cols++){
         echo "<td>";
             echo ($fila * $cols);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>