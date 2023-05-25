<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    function autoload($class){
        require 'entidad/'.$class.'.php';
    }
    spl_autoload_register('autoload');

    $res = new users("mrCarlos", "233", "../db.json");
    $data = (array) ["user"=> "Fred", "name"=> "Hilbert", "pwd"=>1323, "age"=> 22];
    echo json_encode($res->postUser($data));
?>