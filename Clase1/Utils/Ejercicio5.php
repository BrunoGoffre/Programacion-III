<?php

function EjercicioCinco()
{
    $num = 21;
    Filtro($num);
}

function Filtro($num)
{
    switch($num)
    {
        case 20: 
            echo "Veinte";
            break;
        case 21:
            echo "Veinte y uno";
            break;
        case 26:
            echo "Veinte y seis";
            break;
    }
}