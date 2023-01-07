<head>
    <title>Admin Jugadores</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
require 'connectDB.php';

$connect = conectar();

if ($connect) {
    print "<h1>Conexion Exitosa</h1>";
    //AGREGAR
if (isset($_POST['agregar'])) {
?>
<form action='insertJugador.php' method='POST'>
<span>Nombre</span>
<input type="text" name="nombre" value=''><br>
<span>Edad</span>
<input type="text" name="edad" value=''><br>
<span>Camiseta</span>
<input type="text" name="camiseta" value=''><br>
<span>Club</span>
<input type=text name='club' value=''><br>
<input type=submit value='Agregar'>
</form>
</body>
<?php
}
//BORRAR

if (!empty($_POST['aBorrar'])){
    foreach($_POST['aBorrar'] as $selected){
        $sql="delete from jugador where idjugador=".$selected;
        $resultado=mysqli_query($connect, $sql) or die(mysqli_error($connect));
        print "Usuario Id nro ".$selected." Borrado";
    }
    // }else {
    //    print "<h1>No hay checkbox seleccionados</h1>" ;
  }

  //MODIFICAR
if (!empty($_POST['aEditar'])){
    foreach($_POST['aEditar'] as $selected){
        $sql="Select * from jugador where idjugador=".$selected;
        $resultado=mysqli_query($connect, $sql) or die(mysqli_error($connect));
        $filas=mysqli_num_rows($resultado);
        if ($filas == 0){
            print ("no hay jugador para editar <br>");
        }else{
            while($fila=mysqli_fetch_array($resultado)){
?>
<form action="modificarJugador.php" method="POST">
<span>ID</span>
<input type=text name='id' value='<?php print $fila['idjugador']?>'><br>
<span>Nombre</span>
<input type=text name='nombre' value='<?php print $fila['nombre']?>'><br>
<span>Edad</span>
<input type=text name='edad' value='<?php print $fila['edad']?>'><br>
<span>Camiseta</span>
<input type=text name='camiseta' value='<?php print $fila['camiseta']?>'><br>
<span>Club</span>
<input type=text name='club' value='<?php print $fila['club']?>'><br>
<input type=submit value='Modificar'>
</form>

<?php
            }
        }
    }
}
    desconectar($connect);
} else {
    print "<h3>NO Conexion a la BD cursophp<h3>";
}
?>