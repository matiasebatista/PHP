<html>
<head>
    <title>Jugadores</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="../bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Listado de Jugadores</h1>
<form action="adminJugadores.php" method="POST">
<br>
<input type=submit class="btn btn-info" value="Agregar" name="agregar">
<input type=submit class="btn btn-info" value="Modificar">
<input type=submit class="btn btn-info" value="Borrar">
<br>
<table class="table1">
<tr>
   <th>ID</th>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Camiseta</th>
    <th>ClubNro</th>
    <th>Modificar</th>
    <th>Borrar</th>
</tr>
<?php
require_once 'connectDB.php';

$connect=conectar(); // implica un OPEN de la BD

if ($connect) {
    print "<h1>Conexion a la BD cursophp<h1>";
// ejemplo 
$instruccion="Select * from jugador";
$consulta=mysqli_query($connect,$instruccion) or die ("Fallo en la consulta");
$filas=mysqli_num_rows($consulta);

    if ($filas == 0){
        print ("no hay jugadores <br>");
    }else {
        print "<table border=1 class='table1'>";
        while ($fila=mysqli_fetch_array($consulta)){
            print "<tr>
               <td>".$fila['idjugador']."</td>
               <td>".$fila['nombre']."</td>
               <td>".$fila['edad']."</td>
               <td>".$fila['camiseta']."</td>
               <td>".$fila['club']."</td>
               <td><input type='checkbox' name='aEditar[]' value=".$fila['idjugador']."></td>
               <td><input type='checkbox' name='aBorrar[]' value=".$fila['idjugador']."></td>
               </tr>";
        }
        print "</table>";

    }
 desconectar($connect);

} else {
    print "la conexion NO SE PUDO realizar <br>";
}

?>

</table>
</form>
</body>
</html>