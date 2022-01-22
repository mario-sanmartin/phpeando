<?php

class Conexion{

    private $servidor="localhost";
    private $usuario="root";
    private $contraseña="";
    private $conexion;
    private $db="album";
    

    public function __construct()
    {
        try {
            
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->db",$this->usuario,$this->contraseña);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // Activamos los errores que nos pueda dar la conexion y las excepciones
        } catch (PDOException $e) {
            echo "Fallo la conexion ".$e;
        }
    }

    public function ejecutar($sql){

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }
}





?>