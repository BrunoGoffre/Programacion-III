<?php

class Producto{
    var $prod;
    var $cantidad;

    public function __construct($producto, $cantidad){
        $this->prod = $producto;
        $this->cantidad = $cantidad;
    }
    public function __toString(){
        return "$this->prod*$this->cantidad";
    }

}