<?php

function ValidarBites($cantidad,$maximo,$minimo=0){
    $cantidadMB = $cantidad/1000000; 
    if($cantidadMB <= $maximo && $cantidadMB > $minimo ){
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