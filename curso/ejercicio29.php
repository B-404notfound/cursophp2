<?php

$server = "localhost"; // 127.0.0.1
$user = "root";
$password = "";

try {
    $conexion= new PDO("mysql:host=$server;dbname=album",$user,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    $sql="SELECT * FROM `fotos`";

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    print_r($resultado);

    foreach($resultado as $foto){
        print_r($foto);
    }

    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión erronea".$error;
}

?>