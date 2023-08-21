<?php



    class Persona{
        public $nombre;
        public $apellido;
        public $edad;

        public function asignarEdad($edad1){
            $this->edad = $edad1;
        }
        public function asignarNombre($nombreP){
            $this->nombre=$nombreP;
        }

    }

    $pedad1 = new Persona();
    $persona1 = new Persona();

    $persona1->asignarNombre("Pedro"."<br/>");

    $pedad1->asignarEdad(44,"<br/>");

    echo $pedad1->edad;
    echo $persona1->nombre;

?>

