<?php
   interface collecion{
      public function validData();
   }

   class users extends connect implements collecion{
      public $user;
      protected $pwd;
      public $dataUser;
      public function __construct($user, $pwd,$path){
         parent::__construct($path);
         $this->user = $user;
         $this->pwd = $pwd;
      
         $this->dataUser = $this->getData()[__CLASS__];
      }
      public function validData(){
         $arg = (array) func_get_args();
         $arg = array_pop($arg);
         $arg = (array) array_pop($arg);
         $arg2 = $this->dataUser[0];
         return (array_diff_key($arg, $arg2)) ? null :$arg;
      }
      public function getUser(){
         $listUser = array_combine(array_column($this->dataUser, 'user'), array_column($this->dataUser, 'pwd'));
         $listIndex = array_combine(array_column($this->dataUser, 'user'), array_keys($this->dataUser));
         return ($listUser[$this->user] ?? null) == $this->pwd
         ? $this->dataUser[$listIndex[$this->user]] 
         : ["succes"=> "Error"];  
      }
      public function postUser(){
         return $this->postData(__CLASS__,$this->validData(func_get_args()));
      }
   }
?>