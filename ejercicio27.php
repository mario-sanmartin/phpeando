<?php

    class UnaClase{

        public static function unMetodo(){
            echo "Hola soy un metodo estatico <br/>";
        }
    }

    $obj = new UnaClase();
    $obj->unMetodo();

    UnaClase::unMetodo();

?>