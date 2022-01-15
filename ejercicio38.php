<?php

$archivo = 'archivo.txt';

$abrirArchivo=fopen($archivo,"r");

$contenido= fread($abrirArchivo,filesize($archivo));

echo $contenido;


?>