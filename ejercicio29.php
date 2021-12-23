<?php

$server="localhost";
$user="root";
$pass="";


try {
    
    $conexion= new PDO("mysql:host=$server;dbname=album",$user,$pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $select = "Select * from fotos";
    $sentencia=$conexion->prepare($select);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    foreach($resultado as $foto){
        echo $foto['id']."<br/>";
        echo $foto['nombre']."<br/>";
        echo $foto['ruta']."<br/>";

    }

} catch (PDOException $error) {
    echo "Fallo en la conexion ".$error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>
    
</body>
</html>