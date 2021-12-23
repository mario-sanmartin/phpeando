<?php

class persona{

    public $nombre; // Propiedades
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){

        $this->nombre=$nuevoNombre;
        $this->imprimirNombre();
    }


    public function asignacionNombre($nuevoNombre){
        //acciones o metodos...
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){

        echo "Hola mi querido/a ".$this->nombre." <br/>";
    }

    public function mostrarEdad(){
        $this->edad=31;
        return $this->edad;
    }

    public function imprimirEdad(){
        echo "Mi edad es ".$this->edad;
    }
}

$objetoPersona = new persona("Alejandra Camarena"); //Instancia o creacion de objetos
 
?>