<?php

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    // suma
    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $multiplicacion=$valorA*$valorB;
    $division=$valorA/$valorB;

    echo "La suma de los numeros es: ".$suma."<br/>";
    echo "La resta de los numeros es: ". $resta."<br/>";
    echo "la multiplicacion de los numeros es: ".$multiplicacion."<br/>";
    echo "La division de los numeros es: ".$division."<br/>";
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
   <form action="ejercicio8.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    <br/>
    Valor B:
    <input type="text" name="valorB" id="">
    <br/>
    <input type="submit" value="Calcular">

   </form>


</body>
</html>