<?php

$frutas = array("f"=>"fresa","m"=>"manzana","p"=>"platano");

print_r($frutas);

echo $frutas["m"]."<br/>";

foreach($frutas as $indice=>&$valor){

    echo "El valor ".$valor."Tiene el indice ".$indice."<br/>";
}

?>