<?php

class persona{

    public $nombre; // Propiedades
    private $edad;
    protected $altura;

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

// Herencia 
 class trabajador extends persona{
     public $puesto;

     public function presentacion(){
         echo "Hola mi nombre es ".$this->nombre .", y soy ".$this->puesto;
     }
 } 

$objTrabajador = new trabajador(); //Instancia o creacion de objetos
$objTrabajador->asignacionNombre("Mario"); // llamando a un metodo
$objTrabajador->puesto="Bodeguero";

$objTrabajador->presentacion();

?>