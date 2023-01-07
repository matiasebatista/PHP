<?php
function hacerCafe($tipo="capuccino"){
        // $nombre el ALCANCE ES GENERAL 
    global $nombre;
    $nombre = "Paula";

    return "Preparo un $tipo<br>";
}

echo hacerCafe();
echo hacerCafe("cafe con leche");
echo hacerCafe(null);

function hacerCafe1($tipos=array("capuccino"), $marca=NULL){
    $aparato = is_null($marca) ? "uso las manos" : $marca;
    return "Preparo un " . join("/", $tipos) . " con " . $aparato . "<br>";

}

echo hacerCafe1(array("expresso", "machiatto","caramel"), "Cabrales");

echo hacerCafe1();
?>

<?php
function hacerRicota($tipo="acida", $sabor){
    // $nombre el ALCANCE ES GENERAL 
    global $nombre;
    $nombre = "Alfredo";

    return "hago ricota $tipo de $sabor <br>";
}
// el 2do parametro es el OPCIONAL, queda con el valor default
function hacerRicota1($sabor, $tipo="acida"){
    // $nombre tiene un ALCANCE LOCAL
    $nombre = "Pedro";
    return "hago ricota $tipo de $sabor <br>";
}

echo hacerRicota("acida","vainilla"); // estoy obligada a pasar el 1er valor
echo hacerRicota1("vainilla");
?>

<?php
$nombre = "Ale";
echo $nombre." estoy en el main <br>"; // salida ALE
hacerRicota("acida","vainilla"); 
echo $nombre." estoy en el main <br>"; // salida ALFREDO
hacerCafe();
echo $nombre." estoy en el main <br>"; // salida PAULA
hacerRicota1("vainilla");
echo $nombre." estoy en el main <br>"; // salida PAULA, no PEDRO

?>