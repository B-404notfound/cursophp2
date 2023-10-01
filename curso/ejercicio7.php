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


    $super1 = new Instalacion("GTD Huerfanos","Alejandro");
    $pedad1 = new Persona("Miguel","Palacios",43);
    $persona1 = new Persona("Juan","Rodriguez",45);

    $guardia1 = new Persona("Lorena","Astudillo",56);

    $super1->nombreSupervisor("Alex Apablaza");

    $persona1->asignarNombre("Pedro"."<br/>");

    $guardia1->asignarNombre("Felipe");
    $pedad1->asignarEdad(44,"<br/>");

    echo $pedad1->edad;
    echo $persona1->nombre;
    echo $guardia1->nombre."<br/>";

    echo "El nombre del supervisor es : ".$super1->supervisor;
?>

