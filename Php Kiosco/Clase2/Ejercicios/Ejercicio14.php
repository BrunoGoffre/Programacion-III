<?php

function EjercicioCatorce(){

    $numero = 342;

    echo "Primera funcion-----esPar---------<br>";
    if (esPar($numero)){
        echo "el numero es par. <br>";
    }
    else
    {
        echo "el numero es impar.<br>";
    }
    echo "Segunda funcion----------------<br>";
    if (esImpar($numero)){
        echo "el numero es impar. <br>";
    }
    else
    {
        echo "el numero es par.<br>";
    }
}

function esPar($numero){
    if ($numero % 2 == 0){
        return true;
    }
    else
    {
        return false;
    }
}
function esImpar($numero){
    return !(esPar($numero));
}