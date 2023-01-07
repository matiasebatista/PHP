<?php

// es una funcion de tipo RUTINA, de tipo VOID, no tienen retorno
function mostrarNombre($titulo = "Sr"){
    print "Estimado $titulo: ";
}
mostrarNombre();
echo "<br>";
mostrarNombre("Prof.");
// los argumentos que tienen valores 'predeterminados o default'
// siempre van AL FINAL de los argumentros de entrada
function mostrarNombreYtitulo($nombre,$titulo = "Sra"){
    print "Estimado $titulo $nombre: ";
}

mostrarNombreYtitulo("Alejandra");
echo "<br>";
mostrarNombreYtitulo("Alejandra","Prof.");
?>