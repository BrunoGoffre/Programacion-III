<?php

$nombre = "Bruno";
$edad = 21;
$sueldo = 00.21;

echo "su nombre es:"." $nombre";
echo "<br>";

print( "su edad es: $edad");
echo "<br>";

printf("su sueldo es: %f", $sueldo);
echo "<br>";

echo "La cantidad de letras de su nombre es: ". Strlen($nombre);
echo "<br>";

$array = array();


$array[1] = 1;
$array[2] = 2;
$array[3] = "Bruno";
print_r($array);
echo "<br>";
echo "<br>";
echo "<br>";

foreach($array as $value){
    echo $value.", ";
}

echo "<br>";
echo "<br>";
array_push($array,21);

print_r($array);
echo "<br>";
echo "<br>";

$array_asoc = array("Lucas"=>2,"Martin"=>3,"Ivan"=>4);

print_r($array_asoc);
echo "<br>";
echo "<br>";

foreach($array_asoc as $key => $value){
    echo "$key => $value <br>";
}
echo "<br>";
echo "<br>";
krsort($array_asoc);

foreach($array_asoc as $key => $value){
    echo "$key => $value <br>";
}


