<?php
$personajes = array(
    array(
        "nombre" => "Pablo",
        "apellido" => "Gonzales",
        "edad" => 34,
    ),
    array(
        "nombre" => "Micaela",
        "apellido" => "Martinez",
        "edad" => 35,
    ),
    array(
        "nombre" => "Miguel",
        "apellido" => "Molina",
        "edad" => 30,
    )
);

foreach($personajes as $key => $value){
    print_r($personajes[$key]);
    echo "<br>";
}

?>