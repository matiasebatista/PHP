<?php 
class Fruta{
    public $nombre;
    public $color;


    // metodo constructor
    function __construct($nombre){
        $this->nombre= $nombre;

}
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    

     function getNombre(){
        return $this->nombre;
    }

    function setColor($color){
        $this->color = $color;
    }

     function getColor(){
        return $this->color;
    }

}


?>