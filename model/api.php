<?php
    header("Content-Type: application/json");
    
    function autoload($class){
        require 'entidad/'.$class.'.php';
    }
    spl_autoload_register('autoload');

    $res = new usuarios("mrCarlos", "233", "../db.json");
    var_dump($res-> getUser());
?>