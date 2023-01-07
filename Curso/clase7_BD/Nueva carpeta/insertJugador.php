<?php
require 'connectDB.php';

$connect = conectar();

if ($connect) {
    // me traigo los datos tipeados en el form por el empleado
    $nombre1 = $_POST['nombre']; 
    $edad1 = $_POST['edad'];
    $camiseta1 = $_POST['camiseta'];
    $club1 = $_POST['club'];

    $sql = "insert into jugador (nombre, edad, camiseta, club) values ('".$nombre1."', ".$edad1.", ".$camiseta1.", ".$club1.")";

    $rpta = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    print "Jugador " . $nombre1 . " fue agregado";
    desconectar($connect);
} else {
    print "<h3>NO Conexion a la BD cursophp<h3>";
}




?>