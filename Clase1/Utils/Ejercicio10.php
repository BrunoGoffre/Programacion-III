<?php

function EjercicioDiez(){
    $array1 = array(1,2,3);
    $array2 = array("Bruno","Marina","Nitro");
    $array3 = array(4,5,6);
    $array_asoc = array("1"=>$array1,"2"=>$array2,"3"=>$array3);

    foreach($array_asoc as $key => $value){
        echo "Array numero: $key <br>"; 
        foreach ($value as $PERRO){
            echo  "$PERRO <br>" ; 
        }
        echo "<br>";
    }
}