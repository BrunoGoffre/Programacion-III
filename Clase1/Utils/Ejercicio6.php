<?php

function EjercicioSeis(){
    $numeros = array();
    $contador = 0;
    $num;

    for($i = 0 ; $i<5; $i++)
    {
        $num = rand(1,10);
        array_push($numeros,$num);
        echo $num."<br>";
    }
    foreach($numeros as $value){
        $contador += $value;
    }
    if (($contador/5) < 6){
            echo "Promedio: ".$contador/5 . "< 6";
    }
    else if (($contador/5) > 6){
        echo "Promedio: ".$contador/5 . "> 6";
    }
    else{
        echo "Promedio: ".$contador/5 . "= 6";
    }
}