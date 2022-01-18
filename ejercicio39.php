<?php

//Nombre que tendra el archivo
$nombreArchivo="contenido.txt";

// Contenido del archivo
$contenidoArchivo="Buenas a todos ";

// Crear archivo y la accion es w = written (Escribir)
$archivoACrear=fopen($nombreArchivo,"w");

// Accion escribir - nombre del archivo a crear + el contenido del archivo
fwrite($archivoACrear,$contenidoArchivo);

fclose($archivoACrear);



?>