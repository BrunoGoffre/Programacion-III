<?php

function EjercicioUno()
{
    echo "Ejercicio 1 <br>";
echo "--------------------------- <br>";
$numero = 1;
$fin = 0;
while($numero <= 1000)
{
    echo "$numero <br>";
    $numero = $numero+$numero;
}
echo "----------estoy desde el otro archivo----------------- <br> <br>";
}