<?php

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre="Gabriel Nuñez";
        $this->email="angelgabrielnunez1@gmail.com";
        echo "Creando el objeto<br>";
    }

    public function __toString(){
        return "Hola, {$this->nombre}, estas registrado con {$this->email} ";
    }

    public function __destruct(){
        echo "<br>Destruyendo el objeto";
    }
}

$usuario= new Usuario();

echo $usuario;

echo $usuario->email;
