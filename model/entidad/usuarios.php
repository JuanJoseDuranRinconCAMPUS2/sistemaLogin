<?php
       class usuarios extends conexion{
        public $usuario;
        protected $constrasena;
        public $data;
        public function __construct($usuario, $constrasena,$path){
           parent::__construct($path);
           $this->usuario = $usuario;
           $this->constrasena = $constrasena;
           $this->data = $this->getData()[__CLASS__];
        }
        public function getUser(){
           $usu = array_column($this->data, 'usuario');
           $con = array_column($this->data, 'contrasena');
           $key = array_keys($this->data);
           $com = array_combine($usu, $con);
           $val = array_combine($usu, $key);
           
           if($com[$this->usuario] == $this->constrasena){
              return $this->data[$val[$this->usuario]];
           }
        }
     }
?>