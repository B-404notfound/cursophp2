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
    class Instalacion extends Persona{
        public $nombreInstalacion;
        public $supervisor;

        public function nombreSupervisor($nsuper){
                $this->supervisor=$nsuper;
        }
    }


    $super1 = new Instalacion();
    $pedad1 = new Persona();
    $persona1 = new Persona();

    $guardia1 = new Persona();

    $super1->nombreSupervisor("Alex Apablaza");

    $persona1->asignarNombre("Pedro"."<br/>");

    $guardia1->asignarNombre("Felipe");
    $pedad1->asignarEdad(44,"<br/>");

    echo $pedad1->edad;
    echo $persona1->nombre;
    echo $guardia1->nombre."<br/>";

    echo "El nombre del supervisor es : ".$super1->supervisor;
?>

