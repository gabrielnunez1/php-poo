<?php
require_once 'configuracion.php';

Configuracion::setColor('<h1>blanco</h1>');
Configuracion::setEntorno('localhost');
Configuracion::setNewsletter(true);


echo Configuracion::$color."<br>";
echo Configuracion::$entorno."<br>";
echo Configuracion::$newsletter."<br>";

$configuracion = new Configuracion();
Configuracion::$color='Rojo';
echo $configuracion::getColor();
var_dump($configuracion);
?>