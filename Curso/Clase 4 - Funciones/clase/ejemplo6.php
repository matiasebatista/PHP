<?php
$archivo = fopen('platos.csv', 'rb');

echo "<table border=1>";
echo "<th>Plato</th>";
echo "<th>Precio</th>";
echo "<th>Cantidad</th>";

while(!feof($archivo)){
    $filas = fgetcsv($archivo, 1024);
    echo "<tr>";
    echo "<td>".$filas[0]."</td>";
    echo "<td>".$filas[1]."</td>";
    echo "<td>".$filas[2]."</td>";
    echo "</tr>";
}
echo "</table>";
fclose($archivo);
?>