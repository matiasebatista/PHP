<?php 
Class Luz {
    public $nroDeWatts = 50;
    public $Indicador = true;
    public $Ubicacion = 10;
   
    function prender(){
        return $this->Indicador = true;
    }
    function apagar(){
        return $this->Indicador = false;
    }
    function estaPrendida():bool {
        return $this->Indicador;
    }
    function imprimirUbicacion(){
        return $this->Ubicacion;
    }
    function cambiarUbicacion($numero){
        $this->Ubicacion = $numero;
    }
}

Class LuzBombita extends Luz{
    public $forma = "esferica";
}
Class LuzTubo extends Luz{
    public $largo;
    public $color = "blanco";
    function __construct($largo)
    {
        $this->largo = $largo;
        
    }
    function imprimirInfo(){
        return "<br> Ubicacion actual: ".parent::imprimirUbicacion() . "<br> Esta prendida? : " . parent::estaPrendida() . "<br> Largo del tubo: " . $this->obtenerLargoTubo()."<br>";
    }
    function obtenerLargoTubo(){
        return $this ->largo;
    }   
    function cambiarLargo($largo){
        $this->largo = $largo;
    }
}

Class Tester {
    function pruebaBombillaTubo($largo, $numero) {
        $ejemploTubo = new LuzTubo($largo);

        try {
            if ($largo == 3 || $numero == 5) {
                throw new Exception("Estas medidas son imposibles");
            }else{
                
                 $ejemploTubo->estaPrendida()."<br>";
                 $ejemploTubo->cambiarUbicacion($numero);
                print "Ubicacion Tubo: ".$ejemploTubo->imprimirUbicacion()."<br>";
                $ejemploTubo->cambiarLargo($largo);
                print "LargoTubo: ".$ejemploTubo->obtenerLargoTubo()."<br>";
                print $ejemploTubo->imprimirInfo();
               
            }
        }catch(Exception $e){
            $mensaje = $e->getMessage();
            print $mensaje . "<br>";
        }
    }
    function pruebaLuz(){
        $ejemploLuz = new Luz();
        $ejemploLuz->apagar(); //aca controlo si la bombilla esta apagada o prendida
    
        try{
            if($ejemploLuz->estaPrendida() == 1){
                throw new Exception("No se puede mover,Esta prendida");
            } else {
                print "La Luz se encuentra en: ". $ejemploLuz->imprimirUbicacion()." mts. ...Voy a Bajar la bombilla... <br>";
                $ejemploLuz->cambiarUbicacion(3);
                print "Ahora esta en: ".$ejemploLuz->imprimirUbicacion()."  mts. y la puedo reparar la bombilla <br>";
                $ejemploLuz->cambiarUbicacion(100);
                print "La devuelvo a los: ". $ejemploLuz->imprimirUbicacion()." mts.";
            }   
        }catch(Exception $e){
            $mensaje = $e->getMessage();
             print $mensaje . "<br>";
        }

    }
   

}

$ejemplo1 = new Tester;

print $ejemplo1->pruebaBombillaTubo(3,6);
print "<br>";
print "<br>";
print $ejemplo1->pruebaBombillaTubo(4, 6);
print "<br>";
print "<br>";
print $ejemplo1->pruebaLuz();

?>