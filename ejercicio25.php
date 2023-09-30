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

class trabajador extends persona{
    public $puesto;

    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objAlumno = new Persona(); // instancia o creacion de un objeto
$objAlumno->asignarNombre("Pedro");

$objTrabajador = new trabajador();
$objTrabajador->nombre="Juan";
$objTrabajador->puesto="soldador";
$objTrabajador->presentarseComoTrabajador();




?>