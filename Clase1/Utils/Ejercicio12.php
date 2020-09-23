<?php

function EjercicioDose(){
    $palabra = "HOLA";
    echo "Original: $palabra <br>";    
    echo "Palabra invertida: ".InvertirPalabra($palabra)."<br>";
}

function InvertirPalabra($palabra){
    return strrev($palabra);    
}