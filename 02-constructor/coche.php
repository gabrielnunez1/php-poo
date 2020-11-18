<?php

class Coche{
    //atributos o propiedades (variables)
    //podesmos acceder a el desde cualquier lugar.
    //dentro de la clase actual, clases que hereden esta clase o fuera de la clase
    public $color;
    //se puede acceder desde la clase que lo define y desde clase que hereden esta clase
    protected $marca;
    // se puede acceder desde esta clase
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){

        $this->color=$color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje=$caballaje;
        $this->plazas =$plazas;
    }

    //metodos , son acciones qyue hace el objeto(antes funciones)
    public function getColor(){
        //busca en esta clase la propiedad x
        return $this->color;
    }

    public function setColor($color){
        $this->color=$color;
    }

    public function setMarca($marca){
        $this->marca=$marca;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function mostrarInformacion(Coche $miObjeto){
        if(is_object($miObjeto)){
            $informacion="<h1>Infomación del coche</h1>";
            $informacion.="Color: ".$miObjeto->color;
            $informacion.="<br>Modelo: ".$miObjeto->modelo;
            $informacion.="<br>Velocidad: ".$miObjeto->velocidad;
        }else{
            $informacion="Tu dato es este: ".$miObjeto;
        }
        

        return $informacion;

    }
} //fin definicion de la clase