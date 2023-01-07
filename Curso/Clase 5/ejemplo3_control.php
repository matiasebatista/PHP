<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['user'];
    $dire = $_POST['dire'];
    $producto = $_POST['producto'];
    if(empty($nombre) || empty($dire)){
        echo "Faltan datos";
    }else{
        echo "Bienvenido   ".$_POST['user']." su direccion es : ".$_POST['dire']."<br>";
    }
}
 //leo un solo producto
if(!empty($_REQUEST['producto'])){
    echo " ud eligio: " . $producto;
}else{
    echo "No selecciono ningun producto";
}

//leo varios productos
if(!empty($_REQUEST['productos'])){

    echo "<ul>";
   foreach($_REQUEST['productos'] as $elemento ){
        echo "<li>" . $elemento . "</li>";
   };
   echo "</ul>";
}else{
    echo "No selecciono ningun producto";
}

?>