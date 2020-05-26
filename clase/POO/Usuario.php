<?php

class Usuario{//Estoy es this

    //Constante
    const NOMBRE_DEF="PEPE";

    //Propiedades o variables
    public $nombre="Paco";
    private $dni="22453079W";
    private $edad=0;

    //Método constructor
    public function __construct(){
        echo "Creado nuevo objeto Usuario";
        echo "<br>----------------<br>";
    }

    //Métodos o funciones
    public function mostrarNombre(){
        return $this->anyadirBr($this->nombre);
    }

    public function mostrarDni(){
        return $this->dni . "<br>";
    }
    public function modificarDni($nuevoValor){
        $this->dni=$nuevoValor;
    }

    public function mostrarEdad(){
        return $this->edad . "<br>";
    }

    public function modificarEdad($nuevaEdad){
        if($nuevaEdad<0){
            $this->edad=0;
        }else{
            $this->edad=$nuevaEdad;
        }
        
    }

    private function escribirHTML($texto){
        echo "<div>";
        echo $texto;
        echo "</div>";
    }

    private function anyadirBr($texto){
        return $texto."<br>";
    }
}