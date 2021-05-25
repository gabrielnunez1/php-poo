<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;
    

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments){
        // return "No Existe el método.";
        $prefix_metodo=substr($name,0,3);

        if($prefix_metodo=="get"){
            $nombre_metodo=substr(strtolower($name),3);
            
            if(!isset($this->$nombre_metodo)){
                return "el metodo no existe";
            }

            return $this->$nombre_metodo;
        
        }else if($prefix_metodo == "set"){

        }else{
            return "el metodo no existe";
        }
    }
}

$persona = new Persona("Gabriel", 21, "Posadas");

echo $persona->getNombre();
echo $persona->getNomb();

