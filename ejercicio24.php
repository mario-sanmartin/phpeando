<?php

class persona{

    public $nombre; // Propiedades
    private $edad;

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

$objetoPersona = new persona(); //Instancia o creacion de objetos
$objetoPersona->asignacionNombre("Sauron"); // llamando a un metodo


$objetoPersona1 = new persona();
$objetoPersona1->asignacionNombre("AlePoto");
$objetoPersona1->imprimirNombre();

$objetoPersona1->imprimirEdad();
// echo $objetoPersona1->mostrarEdad();

echo $objetoPersona1->nombre;
echo $objetoPersona->nombre; // imprimir una propiedad 

?>