<?php

function EjercicioCuatro()
{    
    $operador = array("+","-","/","*");
    $op1 = 5;
    $op2 = 10;
    foreach($operador as $value){
     if ($value == "+")
     {
        Echo "Suma: ".($op1 + $op2)."<br>";
     }
     else if ($value == "-")
     {
        echo "Resta: ".($op1 - $op2)."<br>";
     }
     else if ($value == "/")
     {
        echo "Divicion: ".($op1 / $op2)."<br>";
     }
     else
     {
         echo "Multiplicacion: ".($op1 * $op2)."<br>";
     }

    }
}
