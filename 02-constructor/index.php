<?php 
require_once 'coche.php';

$coche=new Coche("Amarillo","Renault","9",150,200,5);
$coche1=new Coche("Verde","Seat","Panda",250,250,5);


$coche->color="Rosa";
// $coche->marca="Ferrari";
$coche->setMarca("Ferrari");

// var_dump($coche);
// var_dump($coche->getModelo());
echo $coche->mostrarInformacion($coche1);
// echo $coche->mostrarInformacion("Hola mundo");



?>
