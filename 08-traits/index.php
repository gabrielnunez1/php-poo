
<!-- traits / sobrecarga -->
<?php

//traits nos permite crear metodos para compartir con clases

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellido;
    use Utilidades;

}

class VideoJuego{
    public $nombre;
    public $anio;
    use Utilidades;

}

$coche=new Coche();
$coche->nombre="Ferrari";
$coche->mostrarNombre();
$persona=new Persona();
$coche->nombre="Gabriel";
$coche->mostrarNombre();
$videojuego=new VideoJuego();
$coche->nombre="GTA 4";
$coche->mostrarNombre();

var_dump($coche);

