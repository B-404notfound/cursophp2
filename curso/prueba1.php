<?php


if($_POST){
    $mayorEdad=18;
    $edad=$_POST['txtEdad'];

    if($edad >=$mayorEdad){
        echo "Puedes entrar";
    }else{
        echo "Necesitas permiso de tus papas";
    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="prueba1.php" method="post">
        Ingresa tu edad: 
        <input type="text" name="txtEdad" id="">
        <br/>
        <input type="submit" value="verificar">

    </form>


</body>
</html>