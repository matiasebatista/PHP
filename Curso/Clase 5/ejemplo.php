<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php 
    $numAdivinar=12;
    if(!isset($_POST['guess'])){
        print "Bienvenidos a la maquina de adivinar";
    }elseif($_POST['guess']== $numAdivinar){
        print "Adivinaste!";
    }else{
        print "Segui participando";
    }

    ?>
    <form action="ejemplo.php" method="POST">
        <input type="number" name="guess">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>