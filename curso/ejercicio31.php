<?php

$txtNombre="";
$rdgLenguaje="";

$chkphp="";
$chkhtml="";
$chkcss="";

$lsAnime="";
$txtComentario="";


if($_POST){
    $txtNombre=  (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje=  (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
    
    $chkphp= (isset($_POST['chkphp'])=="si")?"checked":"";
    $chkhtml= (isset($_POST['chkhtml'])=="si")?"checked":"";
    $chkcss= (isset($_POST['chkcss'])=="si")?"checked":"";

    $lsAnime= (isset($_POST['lsAnime']))?$_POST['lsAnime']:"";

    $txtComentario=  (isset($_POST['txtComentario']))?$_POST['txtComentario']:"";


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
    <strong>Tu mensaje es: </strong><?php echo $txtComentario;  ?>
    
    <form action="ejercicio31.php" method="post">
        Nombre: <br/>
        <input type="text" name="txtNombre" id="">
        <br/>
        ¿te gusta?: <br/>
        <br/>php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"" ?> name="lenguaje" value="php" id=""><br/>
        <br/>html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"" ?>name="lenguaje" value="html" id=""><br/>
        <br/>css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":"" ?> name="lenguaje" value="css" id=""><br/>


        Estas aprendiendo ... <br/>

        <br/>php:   <input type="checkbox"  <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br/>html:  <input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        <br/>css:   <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">


        ¿Qué anime te gusta?... <br/>

        <select name="lsAnime" id="">
            <option value="">[Ninguna Serie]</option>
            <option value="naruto">Naruto</option>
            <option value="bleach">Bleach</option>
            <option value="dragon">Dragon Ball</option>
        </select>
        <br/>

        ¿Tienes alguna duda?<br/>

        <textarea name="txtComentario" id="" cols="30" rows="10"></textarea>
        <br/>

        <input type="submit" value="Enviar información">
    </form>
</body>
</html>