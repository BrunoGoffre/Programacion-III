<?php

require_once "ClasesNecesarias.php";
require_once "Token.php";
require_once "..\Files\archivos.php";

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    if (isset($_POST['email']) == 1 && isset($_POST['key']) == 1 && isset($_FILES['foto']) == 1)
    {
        $cliente = new Cliente($_POST['email'] ?? '',$_POST['key'] ?? '');    
        CargarFotoCliente($cliente);
        Archivos::GuardaJson("users.txt",$cliente);
    }
    else if (isset($_POST['email']) == 1 && isset($_POST['key']) == 1)
    {
        $usuarios = Archivos::TraerJson("users.txt");
        foreach ($usuarios as $valor) {
            if ($_POST['email'] == $valor->_email && $_POST['key'] == $valor->_key){
                echo ObtenerToken($valor->_email,$valor->_foto,$valor->_key);
                return;
            }
        }
        echo "<br>Email o clave incorrectos<br>";
    }
    else if (isset($_POST['nombre']) == 1 && isset($_POST['cuatrimestre']) == 1)
    {
        $materia = new Materia(ObtenerID(Archivos::TraerJson("materias.txt")), $_POST['nombre'] ?? '',$_POST['cuatrimestre'] ?? '');
        Archivos::GuardaJson("materias.txt",$materia);
        echo "<br> Cargo exitosa <br>";
    }
    else if (isset($_POST['nombre']) == 1 && isset($_POST['legajo']) == 1)
    {
        if (ValidarLegajo(Archivos::TraerJson("profesores.txt"),$_POST['legajo'])){
            $Profesor = new Profesor1($_POST['nombre'] ?? '',$_POST['legajo']);
            Archivos::GuardaJson("Profesores.txt",$Profesor);
            echo "<br>Carga Exitosa";
        }else{
            echo "<br>Error legajo existente";
        }
    }
    else if (isset($_POST['idMateria']) == 1 && isset($_POST['legajo']) == 1 && isset($_POST['turno']) == 1){
        
        $Profesor = new Profesor2($_POST['idMateria'] ?? '',$_POST['legajo'], $_POST['turno']);

        if (ValidarLegajoYTurno(Archivos::TraerJson("materia-profesor.txt"),$Profesor)){

            Archivos::GuardaJson("materia-profesor.txt",$Profesor);
            echo "<br>Carga Exitosa";

        }else{
            echo "<br>Error legajo existente";
        }
    }else{
        echo "<br> Error datos incorrectos <br>";
    }
}
else if ($method == 'GET'){
    if (isset($_GET['buscar']) == 1 && $_GET['buscar'] == "materias"){
            $materias = Archivos::TraerJson("materias.txt");
            echo "Las materias son: <br><br> ";
            foreach ($materias as $value) {
                echo "ID: $value->_id Nombre: $value->_nombre Cuatrimestre: $value->_cuatrimestre <br>";
            }
    }
    else if (isset($_GET['buscar']) == 1 && $_GET['buscar'] == "profesores"){
            $profesores = Archivos::TraerJson("profesores.txt");
            echo "Las profesores son: <br><br> ";
            foreach ($profesores as $value) {
                echo "Nombre: $value->_nombre Legajo: $value->_legajo <br>";
            }
    }
    else if (isset($_GET['buscar']) == 1 && $_GET['buscar'] == "materia_por_profesores"){
        $profesores = Archivos::TraerJson("materia-profesor.txt");
        echo "Las Materias son: <br><br> ";
        $profe = "";
        foreach ($profesores as $value) {
                if ($profe != $value->_legajo){
                    echo "<br>Profesor $value->_legajo<br>";
                }
                foreach ($profesores as $valor) {
                    if ($value->_legajo == $valor->_legajo && $valor->_legajo != $profe)
                    {
                        echo "Materia: $valor->_idMateria Turno: $valor->_turno <br>";
                    }
                }
                $profe = $value->_legajo;              
           }
    }
}





function CargarFotoCliente($cliente){

    $aleatorio = rand(100,10000);
        if (ObtenerExtencion('foto') == "jpg")
        {
            $origen = $_FILES['foto']['tmp_name'];
            $destino = "Fotos/".$_FILES['foto']['name'].$aleatorio.'.'.ObtenerExtencion('foto');
            move_uploaded_file($origen,$destino);
            $cliente->foto = $destino;
            echo "<br> Se cargo correctamente <br>" ;
        }
    
}
function ObtenerExtencion($file){
    if (isset($_FILES[$file]) == 1){
        $divicion = explode('.',$_FILES[$file]['name']);
        return end($divicion);
    }else{
        return "Archivo invalido";
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
function ValidarLegajoYTurno($array,$nuevoProfesor){
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