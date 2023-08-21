<?php

class Persona{
    
    public $nombre; // propiedades

    public $apellido;

    public $edad;

    public function asignarNombre($nuevoNombre){  // acciones o metodos 
        $this->nombre=$nuevoNombre;

    }

    public function asignarApellido($nuevoApellido){

        $this->apellido=$nuevoApellido;
    }

    public function asignarEdad($edadPersona){
        $this->edad=$edadPersona;
    }
    
}

$personaEdad = new Persona();

$objAlum = new Persona(); // instancia o creacion de un objeto
$obj2 = new Persona();

$objAlum->asignarNombre("Elias"); // llamando a un metodo 
$obj2->asignarApellido("Lara");

$personaEdad->asignarEdad(33);

echo $personaEdad->edad;
echo $obj2->apellido;

echo $objAlum->nombre; // imprimir una propiedad 

?>