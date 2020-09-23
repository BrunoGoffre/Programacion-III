<?php

    class Cliente{
        var $_email;
        var $_key;
        var $_foto;

        public function __construct($email,$key,$foto=""){
            $this->_email = $email;
            $this->_key = $key;
            $this->_foto = $foto;
        }

         public function __toString(){
            return "Email: $this->_email <br> key: $this->_key <br>";
           }
        
        public static function Equals($cliente1,$cliente2){
            if ($cliente1->_email === $cliente2->_email && $cliente1->_key == $cliente2->_key && $cliente1->_foto == $cliente2->_foto){
                return true;
            }
            else{
                return false;
            }            
        }
}
