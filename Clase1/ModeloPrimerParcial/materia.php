<?php

require "..\Files\archivos.php";

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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nombre']) == 1 && isset($_POST['cuatrimestre']) == 1){
        $materia = new Materia(ObtenerID(Archivos::TraerJson("materias.txt")), $_POST['nombre'] ?? '',$_POST['cuatrimestre'] ?? '');
        Archivos::GuardaJson("materias.txt",$materia);
    }
}

function ObtenerID($array){
    if (isset($array) == 1){
        if (is_null(end($array))){
            return 0;
        }else{
            return end($array)->_id+1;
        }
    }else
    {
        return 0;
    }

}