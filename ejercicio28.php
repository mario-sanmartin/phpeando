<?php

$server="localhost";
$user="root";
$pass="";


try {
    
    $conexion= new PDO("mysql:host=$server;dbname=album",$user,$pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $insert ="INSERT INTO fotos (nombre,ruta) VALUES('sauron bebe','sauron.jpg')";
    $conexion->exec($insert);
    echo "Insert realizado con exito";

    echo "Conexion establecida correctamente";

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
    <title>Conexion a Mysql usando PDO</title>
</head>
<body>
    
</body>
</html>