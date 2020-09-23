<?php

 class Lapicera
 {
    var $color;
    var $marca;
    var $trazo;
    var $precio;

    public function __construct($color, $marca, $trazo, $precio){
        $this->color = $color;
        $this->marca = $marca;
        $this->trazo = $trazo;
        $this->precio = $precio;
    }
 }

function EjercicioNueve(){
    //$lapiceras_asoc = array($lapicera1_asoc, $lapicera2_asoc,$lapicera3_asoc);

    $lapicera1_asoc = new Lapicera ("Negro","Pelican","Fino", 20);
    //$lapicera1_asoc->color = "blanco";
    
    $lapicera2_asoc = new Lapicera ("azul","Pelican","Fino", 30);
    $lapicera3_asoc = new Lapicera ("Rojo","Pelican","Fino", 40);
    $lapiceras = array();
    array_push($lapiceras, $lapicera1_asoc);
    array_push($lapiceras, $lapicera2_asoc);
    array_push($lapiceras, $lapicera3_asoc);
    //var_dump($lapiceras);
    

    // $lapicera1_asoc = array("Color" => "Negra","Marca" => "Pelican", "Trazo" => "Fino", "Precio" => 20);
    // $lapicera2_asoc = array("Color" => "Azul","Marca" => "Pelican", "Trazo" => "Fino", "Precio" => 30);
    // $lapicera3_asoc = array("Color" => "Rojo","Marca" => "Pelican", "Trazo" => "Fino", "Precio" => 40);

    //echo $lapicera1_asoc->color;

    foreach ($lapiceras as $value) {
        echo "Color = $value->color <br>";   
        echo "Marca = $value->marca <br>";   
        echo "Trazo = $value->trazo <br>";   
        echo "Precio = $value->precio <br>";   
        echo "<br>";
    }

    // foreach ($lapicera1_asoc as $key => $value) {
    //     echo "$key = $value ";
    // }
    // echo "<br>";
    // foreach ($lapicera2_asoc as $key => $value) {
    //     echo "$key = $value ";
    // }
    
    // echo "<br>";

    // foreach ($lapicera3_asoc as $key => $value) {
    //     echo "$key = $value ";
    // }

    
}