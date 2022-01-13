<?php

$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

// Opciones de lectura de la Url servida por la Api
$opciones = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

// Usamos la funcion get para leer el contenido
$respuesta= file_get_contents($url,false,stream_context_create($opciones));

// La almacenamos y decodificamos
$objetoApi=json_decode($respuesta);


// Y como ultimo paso lo leemos poco a poco
// print_r($objetoApi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumiendo Api</title>
</head>
<body>
    
    <h1>Consumiendo Api de dailymotion</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Channel</th>
        </thead>
        <tbody>
        <?php foreach($objetoApi->list as $video){?>
            <tr>
                <td><?php echo $video->id; ?></td>
                <td><?php echo $video->title; ?></td>
                <td><?php echo $video->channel; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>