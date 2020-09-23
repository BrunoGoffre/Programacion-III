<?php

function Ejerciciosiete()
{
    $numeros = array();
    $contador = 0;

    while(count($numeros) < 10){
        $num = rand(1,100);
        if ($num%2 != 0 && end($numeros) != $num)
        {
            array_push($numeros,$num);
        }        
    }

    ksort($numeros);

    for($i = 0; $i < 10; $i++){
        echo $numeros[$i]."<br>";
    }

    echo "<br>";

    foreach($numeros as $value){
        echo $value."<br>";
    }

    echo "<br>";

    while(count($numeros) != $contador){
       echo $numeros[$contador]."<br>";
        $contador++;
    }
}
