<?php

function EjercicioOcho(){
    $v_asoc = array(1 => 90,30 => 7, 'e' => 99,'hola' => "mundo");

    foreach($v_asoc as $key => $value){
        echo "[$key] = $value <br>";
    }
}