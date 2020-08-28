<?php

function EjercicioOnce(){
    CalcularPotencia(1);
    echo "<br> ------- <br>";
    CalcularPotencia(2);
    echo "<br> ------- <br>";
    CalcularPotencia(3);
    echo "<br> ------- <br>" ;   
    CalcularPotencia(4);
}

function CalcularPotencia($numero){
    echo pow($numero,1)."<br>";
    echo pow($numero,2)."<br>";
    echo pow($numero,3)."<br>";
    echo pow($numero,4)."<br>";
}