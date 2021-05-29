<?php

function autocargar_clases($class){
    // $class_rep = str_replace('\\', '/', $class);
    // require_once 'clases/' . $class_rep . '.php';
    //las clases estan en mayuscula por eso el error que daba son strtolower
    require_once 'clases/' . strtolower($class).'.php';
}

spl_autoload_register('autocargar_clases');