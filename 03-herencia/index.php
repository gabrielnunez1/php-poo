<?php
require_once 'clases.php';

$persona=new Persona();
$informatico=new Informatico();
$redes=new TecnicoRedes();
$persona->setNombre('Gabriel');

var_dump($persona);


$informatico->programar();
var_dump($informatico);

var_dump($redes);

?>