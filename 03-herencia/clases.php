<?php
//herencia es la posibilidad de compartir atributos y metodos entre clases

class Persona{
    public $nombre;
    public $apellido;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura=$altura;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad=$edad;
    }

    public function hablar(){
        return "Estoy hablando";
    }

    public function caminar(){
        return "Estoy caminando";
    }
}


class Informatico extends Persona{

    public $lenguajes;
    public $experienciaProgramando;

    public function __construct(){
        $this->lenguajes="HTML, CSS, PHP y JS";
        $this->experienciaProgramando=10;
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes=$lenguajes;
        return $this->lenguajes;
    }

    public function programar(){
        return "Soy programador";
    }

    public function repararComputadoras(){
        return "Reparo computadoras";
    }

    public function hacerOfimatica(){
        return "Estoy escribiendo en Word";
    }
    
}

class TecnicoRedes extends Informatico{

    public $auditoria;
    public $experienciaEnRedes;

    public function __construct(){
        //sirve para heredar lo que tiene el constructor de informatico
        parent::__construct();
        $this->auditoria="Estoy auditando una red";
        $this->experienciaEnRedes=5;
        
    }

    public function Auditar(){
        return "Estoy auditando una red";
    }

}
?>