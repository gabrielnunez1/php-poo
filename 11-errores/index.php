<?php
//capturar excepciones en codigo susceptibles a errores
try {
    if(isset($_GET['id'])){
        echo "existe usuario";
    }else{
        throw new Exception('No existe id');
    }
}catch(Exception $e){
    echo "Hubo un error ".$e->getMessage();
}finally{
    echo "Todo correcto";
}