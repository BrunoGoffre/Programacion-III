<?php
require_once 'archivos.php';
require '../Utils/ClaseAutoEj17.php';

$method = $_SERVER['REQUEST_METHOD'];


if ($method == 'POST') {
    $patente = $_POST['patente'] ?? '';
    $marca = $_POST['marca'] ?? '';
    $color = $_POST['color'] ?? '';
    $precio = $_POST['precio'] ?? 0;

    $auto = new Auto($patente, $marca, $color, $precio);
    
    echo $auto;
    Archivos::GuardaJson("DatosGuardados.txt",$auto);
} else if($method == 'GET'){
        $b=false;
        $patente2=$_GET['buscar']??'';
        $arrayJson=Archivos::TraerJson("DatosGuardados.txt");
        //$arrayAutosSerializados=Archivos::TraerSerializacion("DatosGuardados.txt");
        //var_dump($arrayAutosSerializados);
        if (strlen($patente2)>5 && strlen($patente2)<8){
            foreach ($arrayJson as $a) {
                if ($a->patente == $patente2){
                    echo "Se encontro: $a->patente <br>Color: $a->color<br>Marca: $a->marca<br>";
                    $b=true;
                }
            }  
        }
        if ($b == false){
            echo "No se encontro";
        }
        echo "JSON: ". filesize("DatosGuardados.txt")." bytes<br>".PHP_EOL;
}
else {
    echo "Metodo no permitido";
}


