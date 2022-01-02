<?php

session_start();

$_SESSION["usuario"]="Mario";
$_SESSION["estatus"]="Conectado";

echo "Sesión iniciada"."<br/>";

echo "Usuario: ".$_SESSION["usuario"]. ", estatus: ".$_SESSION["estatus"];