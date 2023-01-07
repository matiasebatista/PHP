<?php
require 'connect.php';
$connect = conectar();
if(isset($_POST['login'])){
    $nombre = $_POST['nombre'];
    $password = md5($_POST['password']);
    $consulta = "SELECT * FROM usuarios  WHERE nombre='$nombre' AND password='$password'";
    $respuesta = mysqli_query($connect, $consulta) or die(mysqli_error($connect));
    $usuario = $respuesta->fetch_object();
    if($respuesta){
        $usuariologeado=$_SESSION['nombre'] = $usuario->nombre;
        $passlogeado = $_SESSION['password'] = $usuario->password;
        
        if($nombre == $usuariologeado & $password == $passlogeado){
            $instruccionjugador="Select * from cursoasap.jugador";
            $consultarjugador=mysqli_query($connect,$instruccionjugador) or die ("Fallo en la consulta");
            $filas=mysqli_num_rows($consultarjugador);
        if ($filas == 0){
            print ("no hay jugadores <br>");
        }else {
            print "<table border=1>";
            print "<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Camiseta</th><th>Club</th></tr>";
            while ($fila=mysqli_fetch_array($consultarjugador)){
                print "<tr>
                   <td>".$fila['idjugador']."</td>
                   <td>".$fila['nombre']."</td>
                   <td>".$fila['edad']."</td>
                   <td>".$fila['camiseta']."</td>
                   <td>".$fila['club']."</td>
                   </tr>";
            }
            print "</table>";
            print "<a href='login.php'>Volver</a>";
        }

        }else{
            
            print "<b>Los datos no son correctos</b> <br>";
            print "<a href='login.php'>Volver</a>";
        }
        
    }

}   

?>