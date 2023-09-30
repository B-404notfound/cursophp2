<?php

class Persona{
    
    public $nombre; // propiedades

    private $edad;

    protected $altura;

    public function asignarNombre($nuevoNombre){  // acciones o metodos 
        $this->nombre=$nuevoNombre;

    }

    public function imprimirNombre(){

        echo "Hola soy ".$this->nombre;
    }

    public function asignarEdad(){
        $this->edad=20;
        return $this->edad;
    }
    
}

$personaEdad = new Persona();

$objAlum = new Persona(); // instancia o creacion de un objeto
$objAlum->asignarNombre("Elias");



?>