<?php

require "..\Files\archivos.php";

class Profesor{
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nombre']) == 1 && isset($_POST['legajo']) == 1){
        if (ValidarLegajo(Archivos::TraerJson("profesores.txt"),$_POST['legajo'])){
            $Profesor = new Profesor($_POST['nombre'] ?? '',$_POST['legajo']);
            Archivos::GuardaJson("Profesores.txt",$Profesor);
            echo "<br>Carga Exitosa";
        }else{
            echo "<br>Error legajo existente";
        }
    }
}

function ValidarLegajo($array,$legajoNuevo){
    if (isset($array) == 1){
        foreach ($array as $value) {
            if ($value->_legajo == $legajoNuevo){
                return false;
            }
        }
        return true;
    }else{
        return true;
    }

}