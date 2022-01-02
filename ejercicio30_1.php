<?php
session_start();

if(isset($_SESSION["usuario"])){
    echo "Usuario: ".$_SESSION["usuario"]." Estado: ".$_SESSION["estatus"];
}else{
    echo "No existen datos";
}



?>