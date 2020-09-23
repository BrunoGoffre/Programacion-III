<?php

require "..\Files\archivos.php";

class Profesor{
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['idMateria']) == 1 && isset($_POST['legajo']) == 1 && isset($_POST['turno']) == 1){
        
        $Profesor = new Profesor($_POST['idMateria'] ?? '',$_POST['legajo'], $_POST['turno']);

        if (ValidarLegajo(Archivos::TraerJson("materia-profesor.txt"),$Profesor)){

            Archivos::GuardaJson("materia-profesor.txt",$Profesor);
            echo "<br>Carga Exitosa";

        }else{
            echo "<br>Error legajo existente";
        }
    }else{
        echo "<br> Error datos incorrectos <br>";
    }
}

function ValidarLegajo($array,$nuevoProfesor){
    if (isset($array) == 1){
        foreach ($array as $value) {
            if ($value->_legajo == $nuevoProfesor->_legajo){
                if ($value->_idMateria == $nuevoProfesor->_idMateria && $value->_turno == $nuevoProfesor->_turno){
                    return false;
                }
            }
        }
        return true;
    }else{
        return true;
    }

}