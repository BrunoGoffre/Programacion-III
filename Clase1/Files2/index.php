<?php

//var_dump($_FILES);
$aleatorio = rand(100,10000);
//die();

if (isset($_FILES['archivo']) == 1){
    if (ValidarBites($_FILES['archivo']['size']) && ObtenerExtencion('archivo') == "jpg")
    {
        $origen = $_FILES['archivo']['tmp_name'];
        $destino = "img/".$_FILES['archivo']['name'].$aleatorio.'.'.ObtenerExtencion('archivo');
        move_uploaded_file($origen,$destino);
        echo "<br> Se cargo correctamente" ;
    }
}
//Chekear minuto 1:8:00 en clase 15/9 
//continuar a partir de las 2hs
function ValidarBites($cantidad){
    $cantidadMB = $cantidad/1000000; 
    if($cantidadMB < 3.5){
        return true;
    }
    else{
        return false;
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