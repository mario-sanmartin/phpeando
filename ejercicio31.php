<?php

$txtNombre="";

$radioLenguaje="";
if ($_POST){
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $radioLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

    print_r($radioLenguaje);
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
    <strong> El lenguaje seleccionado es:  </strong> <?php  echo $radioLenguaje;?> 

    <form action="ejercicio31.php" method="post">
        
        <input type="text" name="txtNombre" value="<?php echo $txtNombre; ?>">
        <br/>
        ¿Cual te gusta mas?: <br/>
        <input type="radio" <?php echo ($radioLenguaje=="php"?"checked":""); ?> name="lenguaje" value="php" id=""> PHP
        <br/>
        <input type="radio" <?php echo ($radioLenguaje=="html"?"checked":""); ?> name="lenguaje" value="html" id=""> HTML
        <br/>
        <input type="radio" <?php echo ($radioLenguaje=="js"?"checked":""); ?> name="lenguaje" value="js" id=""> JS
        <br/>   
        <input type="submit" value="Enviar">
    </form>
</body>
</html>