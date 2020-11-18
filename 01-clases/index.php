<?php
//Programacion  orientada a objetos en php (POO)
/// Definir una clase
//molde para crear objetos de tipo coche con caracteristicas parecidas
class Coche{
    //atributos o propiedades (variables)
    public $color = "rojo";
    public $marca = "Fererri";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje= 500;
    public $plazas = 2;

    //metodos , son acciones qyue hace el objeto(antes funciones)
    public function getColor(){
        //busca en esta clase la propiedad x
        return $this->color;
    }

    public function setColor($color){
        $this->color=$color;
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
} //fin definicion de la clase

// Crear un objeto / Instanciar una clase
$coche= new Coche();

//Usar los metodos
echo "Antes la velocidad era ".$coche->getVelocidad();

$coche->setColor('Negro');
echo "<br> El color del coche es: ".$coche->getColor()."<br>";
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Ahora la velocidad es ".$coche->getVelocidad();

$coche2=new Coche();
$coche2->setColor('Naranja como el de rapido y furioso que se quemo');
$coche2->setModelo('Lamborguini');

var_dump($coche);
var_dump($coche2);






