<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles.css" rel="stylesheet">
    <title>Login</title>
</head>

<body >
  <?php
  require 'connect.php';
  $connect=conectar();
  if ($connect) {
  ?>

<form method="post" action="logear.php" name="signin-form">
    <div class="elemento">
        <label><b>Nombre</b></label>
        <input type="text" name="nombre" id="nombre" required />
    </div>
    <div class="elemento">
        <label><b>Password</b></label>
        <input type="password" name="password" id="password" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
    <button type="reset" name="login" value="login">Reset</button>
</form>


<?php
     desconectar($connect);
    } else {
        print "<h3>NO Conexion a la BD cursophp<h3>";
    }
?>
</body>
</html>