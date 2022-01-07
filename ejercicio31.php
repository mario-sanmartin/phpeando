<?php

$txtNombre="";
$radioLenguaje="";
$chkphp="";
$chkhtml="";
$chkjs="";

$listaPersonajes="";
$aprendiendo="";
if ($_POST){
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $radioLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
    
    $chkphp = ( isset($_POST['chkphp'])=="si")?"checked":"";
    $chkhtml = ( isset($_POST['chkhtml'])=="si")?"checked":"";
    $chkjs = ( isset($_POST['chkjs'])=="si")?"checked":"";

    $listaPersonajes= (isset($_POST['listaPersonajes']))?$_POST['listaPersonajes']:"";
    $aprendiendo = (isset($_POST['aprendiendo']))?$_POST['aprendiendo']:"";
    // print_r($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <strong> Hola:  </strong> <?php  echo $txtNombre;?> <br/>
    <strong> (Radio)El lenguaje seleccionado es:  </strong> <?php  echo $radioLenguaje;?><br>
    <strong> (Checkbox)Los lenguajes a estudiar son :  </strong> 
        <br><?php  echo ($chkphp=="checked"?"PHP":"");?> 
        <br><?php  echo ($chkhtml=="checked"?"HTML":"");?> 
        <br><?php  echo ($chkjs=="checked"?"JS":"");?> 
    <br>
    <br>    
    <i>Tu Personaje de OnePunchMan es: </i> <?php echo $listaPersonajes; ?>
    <br>
    <hr>
    <i>Estas aprendiendo : </i> <?php echo $aprendiendo;?>
    <form action="ejercicio31.php" method="post">
        <br>Ingrese un texto: 
        <input type="text" name="txtNombre" value="<?php echo $txtNombre; ?>">
        <br/>
        ¿Cual te gusta mas?: <br/>
        <input type="radio" <?php echo ($radioLenguaje=="php"?"checked":""); ?> name="lenguaje" value="php" id=""> PHP
        <br/>
        <input type="radio" <?php echo ($radioLenguaje=="html"?"checked":""); ?> name="lenguaje" value="html" id=""> HTML
        <br/>
        <input type="radio" <?php echo ($radioLenguaje=="js"?"checked":""); ?> name="lenguaje" value="js" id=""> JS
        <br/>
        ¿Cuales estudiaras?<br/>
        PHP <input type="checkbox" <?php echo $chkphp?> name="chkphp" value="si" id=""><br/>
        HTML<input type="checkbox" <?php echo $chkhtml?> name="chkhtml" value="si" id=""><br/>
        JS  <input type="checkbox" <?php echo $chkjs?> name="chkjs" value="si" id=""><br/>
        
        <hr>
        <strong>Personaje de One PunchMan</strong>
        <select name="listaPersonajes" id="">
            <option value=""></option>
            <option value="Saitama" <?php echo ($listaPersonajes=="Saitama"?"selected":""); ?> >Saitaman</option>
            <option value="Genos" <?php echo ($listaPersonajes=="Genos"?"selected":""); ?> >Genos</option>
            <option value="Garou" <?php echo ($listaPersonajes=="Garou"?"selected":""); ?> >Garou el kaijin</option>
        </select>
        <br>
        <i>¿Que estas aprendiendo?</i>
        <br>
        <textarea name="aprendiendo" id="" cols="30" rows="10">
            <?php echo $aprendiendo;?>
        </textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>