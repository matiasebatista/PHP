<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <script src="scripts.js"></script>
    <title>Ejercicio 6</title>
</head>
<body>
    <script language="JavaScript">
       function nombre(){
            var nombre = prompt("ingrese su nombre","Nombre")
            var apellido = prompt("ingrese su apellido","Apellido")
            document.writeln(nombre + " " + apellido) ;
            var caracteres = (nombre + " " + apellido).length; 
            document.writeln(" tiene  un total de  " +caracteres+ " caracteres.");
       } 
    </script>

<button type="button" onclick="nombre()">Nombre y Apellido</button>

</body>
</html>