<?php

session_start();

$_SESSION["usuario"]="programador";
$_SESSION["estatus"]="logeado";


echo "Sesion iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];


?>