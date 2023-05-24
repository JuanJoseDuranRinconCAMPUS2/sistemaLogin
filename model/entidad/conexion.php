<?php
    class conexion{
        private $path;
        public $data;
        public function __construct($path){
            $this -> path = $path;
            $this -> data = json_decode(file_get_contents($this -> path), true);
        }
        public function getData(){
            return $this-> data;
        }
    }
?>