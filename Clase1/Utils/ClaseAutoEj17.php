<?php

    class Auto{
        var $patente;
        var $color;
        var $precio;
        var $marca;
        var $fecha;
        

        public function __construct($patente,$marca, $color,$precio = 0, $fecha=""){
            $this->patente = $patente;
            $this->color = $color;
            $this->precio = $precio;
            $this->marca = $marca;
            if ($fecha == ""){
                $this->fecha = date('Y');
            }
            
        }

        public function AgregarImpuestos($impuesto){
            if (is_numeric($impuesto)){
                $this->_precio += $impuesto;
            }
        }

         public function __toString(){
            return "Patente: $this->patente <br> Color: $this->color <br> Precio: $this->precio <br>Marca: $this->marca <br> Fecha: $this->fecha <br>";
           }
        function MostrarAuto(){
           echo $this->__toString();
        }
        public static function Equals($auto1,$auto2){
            if ($auto1->_marca === $auto2->_marca){
                return true;
            }
            else{
                return false;
            }            
        }
        public static function Add($auto1,$auto2){
            if (Auto::Equals($auto1,$auto2) && $auto1->_color === $auto2->_color){
                return $auto1->_precio + $auto2->_precio;
            }
            else{
                echo "Nose puede realizar la operacion.<br>";
                return 0;
            }
        }
    }
