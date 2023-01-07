<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['user'];
    $dire = $_POST['dire'];
    if(empty($nombre) || empty($dire)){
        echo "Faltan datos";
    }else{
        echo "Bienvenido   ".$_POST['user']." su direccion es : ".$_POST['dire'];
    }
}
?>