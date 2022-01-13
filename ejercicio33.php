<?php

echo "JSON ENCODE PASAR JSON A String";

    $objJson = '[
        {"nombre":"Mario","apellido":"San Martin"},
        {"nombre":"Alejandra","apellido":"Camarena"},
        {"nombre":"Sauron","apellido":"San Martín"}

    ]';

    $resultado = json_decode($objJson);

    // print_r($resultado);

    foreach($resultado as $obj){
        echo ($obj->nombre)." ".($obj->apellido)."<br/>";
    }

?>