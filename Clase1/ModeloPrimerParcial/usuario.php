<?php

require "ClaseClientes.php";
require "..\Files\archivos.php";


$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    if (isset($_POST['email']) == 1 && isset($_POST['key']) == 1){

        $cliente = new Cliente($_POST['email'] ?? '',$_POST['key'] ?? '');    
        if (isset($_FILES['foto']) == 1){
            CargarFoto($cliente);
        }
    }
}
Archivos::GuardaJson("users.txt",$cliente);

function CargarFoto($cliente){

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