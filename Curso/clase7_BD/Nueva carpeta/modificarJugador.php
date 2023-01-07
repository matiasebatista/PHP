<?php
require 'connectDB.php';

$connect = conectar();

if ($connect) {
    // me traigo los datos tipeados en el form por el empleado
    $id=$_POST['id'];
    $nombre1 = $_POST['nombre']; 
    $edad1 = $_POST['edad'];
    $camiseta1 = $_POST['camiseta'];
    $club1 = $_POST['club'];

    $sql="Update jugador set nombre='".$nombre1."', camiseta=".$camiseta1.", edad=".$edad1.", club=".$club1." where idjugador=".$id;


    $rpta = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    print "Jugador Id " . $id . " fue modificado";
    desconectar($connect);
} else {
    print "<h3>NO Conexion a la BD cursophp<h3>";
}




?>