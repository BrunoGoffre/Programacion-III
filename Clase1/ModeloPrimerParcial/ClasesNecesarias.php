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
class Materia{
    var $_id;
    var $_nombre;
    var $_cuatrimestre;

    public function __construct($id,$nombre,$cuatrimestre){
        $this->_id = $id;
        $this->_nombre = $nombre;
        $this->_cuatrimestre = $cuatrimestre;
    }

     public function __toString(){
        return "id: $this->_id <br> nombre: $this->_nombre <br> cuatrimestre: $this->_cuatrimestre <br>";
       }
}
class Profesor1{
    var $_nombre;
    var $_legajo;

    public function __construct($nombre,$legajo){
        $this->_nombre = $nombre;
        $this->_legajo = $legajo;
    }

     public function __toString(){
        return "<br> nombre: $this->_nombre <br> legajo: $this->_legajo <br>";
       }
}
class Profesor2{
    var $_legajo;
    var $_idMateria;
    var $_turno;

    public function __construct($legajo,$idMateria,$turno){
        $this->_idMateria = $idMateria;
        $this->_legajo = $legajo;
        $this->_turno = $turno;
    }

     public function __toString(){
        return "<br> idMateria: $this->_idMateria <br> legajo: $this->_legajo <br> turno: $this->_turno <br>";
       }
}
