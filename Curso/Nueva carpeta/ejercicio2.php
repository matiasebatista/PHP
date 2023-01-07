<?php 
interface Transferible
{
    function depositar($cantidad);
    function extraer($cantidad);
    function mover($cantidad, $nroCta);    
}


Class Cliente{
    public $legajo;
    public $nombre;
    public $apellido;
    public $nroCuenta;
    public $nroCajaAhorro;
    

 public function __construct($legajo,$nombre,$apellido,$nroCuenta,$nroCajaAhorro)
 {
        $this->apellido = $apellido;
        $this->nombre = $nombre;
        $this->legajo = $legajo;
        $this->nroCuenta = new Cuenta($nroCuenta);
        $this->nroCajaAhorro = new CajaDeAhorro($nroCajaAhorro);
        
         
 }

 function obtenerNombre(){
        return $this->nombre;
 }
 function obtenerApellido(){
    return $this->apellido;
}

function usarCajadeAhorro(){
        return $this->nroCajaAhorro;
}

function usarCuenta(){
        return $this->nroCuenta;
}

}

class Cuenta extends Cliente implements Transferible{
    public $saldo;
    public $nroCuenta;
    public $nroCheque;

    public function __construct($nroCuenta)
    {
        $this->nroCuenta = $nroCuenta;
    }

    function usarCheque(){
        $this->nroCheque = rand(1,1000);
    }

    function getSaldo(){
        return "Usted tiene ".$this->saldo." en su cuenta.";
    }
    function depositar($cantidad)
    {
        try{
            if($cantidad == 0){
                throw new Exception("No se puede agregar $0");
            }else{
                $this->saldo += $cantidad;
                return "Su saldo actual es: ".$this->saldo  ."<br>";
            }
        }catch(Exception $e){
            $mensaje = $e->getMessage();
            print $mensaje . "<br>";
        }
   
    }

    function extraer($cantidad)
    {
        try{
            if($this->saldo + 1000 < $cantidad ){
                throw new SobreGiroException(" Estas excediendo la cantidad disponible",3,1000+$cantidad);
            }else{
                print "Usted saco: ".$cantidad."<br>";
                $this->saldo -= $cantidad;
                print "Su nuevo saldo es: ".$this->saldo;
            }
        }catch(SobreGiroException $e){
            $mensaje = $e->getMessage();
            print "No es posible extraer ese monto, tiene  " .$e->getCantidad()." disponibles";
            print $mensaje . "<br>";
        }
    }
    function mover($cantidad, $nroCta){
      try{
            if($this->saldo < $cantidad ){
                throw new Exception("Su saldo es insuficiente");
            }else{
                $this->saldo;
                $this->saldo - $cantidad;
                print "Su nuevo saldo es: " . $this->saldo . "<br> Se logro mover: ".$cantidad;
            }
        }catch(Exception $e){
            $mensaje = $e->getMessage();
            print $mensaje . "<br>";
        }


    }
    function obtenerSaldo(){
        return $this->saldo ;
    }
    
}
class CajaDeAhorro extends Cuenta{
    public $saldoCajaAhorro;
    public $nroCajaAhorro;
    public function __construct($nroCajaAhorro)
    {
        $this->nroCajaAhorro = $nroCajaAhorro;
    }
    
    function agregarSaldo($cantidad){
        $this->saldoCajaAhorro += $cantidad;
    }
    
}
class Cheque extends Cuenta{
    public $nroCheque;

    function generarCheque(){
        $this->nroCheque = rand(1, 1000);
    }
    function obtenerUltimoNroCheque(){
        return $this->nroCheque;
    }
}

class SobreGiroException extends Exception
{
    public $cantidad =1000;
    function __construct($message = null, $code = 0, $cantidad)
    {
        parent::__construct($message, $code);
        $this->cantidad = $cantidad;
    }

    function getcantidad()
    {
        return $this->cantidad;
    }
}


$persona = new Cliente(1234, "Juan", "Perez", 994,1032);
print $persona->usarCuenta()->depositar(6501);
print $persona->usarCuenta()->getSaldo();
print "<br>";
print $persona->usarCuenta()->extraer(7400);


?>