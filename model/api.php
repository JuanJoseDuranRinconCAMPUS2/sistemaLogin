<?php
    header("Content-Type: application/json");
    
    function autoload($class){
        require 'entidad/'.$class.'.php';
    }
    spl_autoload_register('autoload');

    $res = new user("mrCarlos", "233");
    echo $res -> getUser();
    
?>