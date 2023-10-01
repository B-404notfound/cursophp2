<?php

class Persona{
    
    public $nombre; // propiedades

    private $edad;

    protected $altura;

    function __construct($nuevoNombre,$edad)
    {
        $this->nombre=$nuevoNombre;
        $this->edad=$edad;
    }

    public function asignarNombre($nuevoNombre){  // acciones o metodos 
        $this->nombre=$nuevoNombre;

    }

    public function imprimirNombre(){

        echo "Hola soy  ".$this->nombre ."<br/>";
    }

    public function asignarEdad($edad){
        $this->edad=20;
        return $this->edad;
    }

    public function imprimirEdad(){
        echo "tengo ".$this->edad." ANOS ,<br/>";
    }
   
    
}



$objAlum = new Persona("Juan",88); // instancia o creacion de un objeto
$objAlum1 = new Persona("Miguel",45);
//$objAlum->asignarNombre("Elias"); // llamando un metodo
$objAlum->imprimirNombre(); //
$objAlum->imprimirEdad(); 

$objAlum1->imprimirNombre();
$objAlum1->imprimirEdad();



?>