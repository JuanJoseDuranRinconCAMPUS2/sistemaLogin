<?php
       class user{
         static $config = array(
            'http'=>['header'=>"Content-Type: application/json"]
         ); 
         public $usuario;
         protected $constrasena;
         public function __construct($usuario, $constrasena){
            $this->usuario = $usuario;
            $this->constrasena = $constrasena;
         }
         public function getUser(){
            self::$config["http"]["method"] =  "GET";
            $res = file_get_contents('http://localhost:41987/usuarios?usuario='.$this->usuario.'&contrasena='.$this->constrasena, false, stream_context_create(self::$config));
            return $res;
         }
      }
?>