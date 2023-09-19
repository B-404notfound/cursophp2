<?php

class Persona{
    
    public $nombre; //propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){  //acciones o metodos
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola Soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
    
    
}

$objAlumno = new Persona(); // instancia o creacion de un objeto
$objAlumno->asignarNombre("Pedro");





?>