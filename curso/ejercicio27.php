<?php

class unaClase{

    public static function unMetodo(){
        echo "soy un metodo estatico";
    }
}

$obj1 = new unaClase();
$obj1->unMetodo();
?>