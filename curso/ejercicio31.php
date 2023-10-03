<?php

$txtNombre="";

$rdgLenguaje="";

if($_POST){
    $txtNombre=  (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    
    $rdgLenguaje=  (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
  
    <?php  if($_POST){ ?>
   <strong>Hola</strong>:  <?php echo $txtNombre;  ?>
   <br/>
   <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje;  ?>
    <?php   } ?>
    
    <form action="ejercicio31.php" method="post">
        Nombre: <br/>
        <input type="text" name="txtNombre" id="">
        <br/>
        ¿te gusta?: <br/>
        <br/>php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"" ?> name="lenguaje" value="php" id=""><br/>
        <br/>html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"" ?>name="lenguaje" value="html" id=""><br/>
        <br/>css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":"" ?> name="lenguaje" value="css" id=""><br/>


        Estas aprendiendo ... <br/>

        <br/>php:   <input type="checkbox" name="chkphp" id="">
        <br/>html:  <input type="checkbox" name="chkhtml" id="">
        <br/>css:   <input type="checkbox" name="chkcss" id="">


        <input type="submit" value="Enviar información">
    </form>
</body>
</html>