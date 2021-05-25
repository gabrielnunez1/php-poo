<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUsb();
}

class iMac implements Ordenador{
    public $modelo;

    function getModelo(){
        return $this->modelo;
    }

    function setModelo($modelo){
       $this->modelo=$modelo;
    }

    function encender(){
    ;
    }
    function apagar(){
     ;
    }
    function reiniciar(){
    ;
    }
    function desfragmentar(){
    ;
    }
    function detectarUsb(){
    ;
    }
}

$maquintos= new iMac();
$maquintos->setModelo('Macbook 2019');

var_dump($maquintos);