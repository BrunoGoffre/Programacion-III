<?php

class Archivos{

    static function serializarAuto($ruta, $objeto){
        $listaPrevia = Archivos::TraerSerializacion($ruta);

        $b=false;

        foreach ($listaPrevia as $v) {
            if($v->patente == $objeto->patente){
                $b=true;
            }
        }

        if ($b==true){
            $ar = fopen("./".$ruta,"a");
            if (is_null($ar)){
                fwrite($ar, serialize($objeto).PHP_EOL);//Serializa el objeto
                fclose($ar);
            }
        }
        else{
            echo "Este objeto ya existe";
        }
    }
    static function TraerSerializacion($ruta){
        $lista=array();
        $ar = fopen("./".$ruta,"r");

        while(feof($ar)){
            $objeto = unserialize(fgets($ar));
            if (is_null($objeto)){
                array_push($lista,$objeto);
            }
            fclose($ar);
            return $lista;
        }
    }

    static function GuardaJson($ruta,$objeto){

        $array=Archivos::TraerJson($ruta);
        if (isset($array)){
            $ar = fopen("./".$ruta,"w");
            array_push($array,$objeto);
            fwrite($ar, json_encode($array));
            fclose($ar);
        }else{
            $array2=array();
            $ar = fopen("./".$ruta,"w");
            array_push($array2,$objeto);
            fwrite($ar, json_encode($array2));
            fclose($ar);
        }
    }
    static function TraerJson($ruta){
        if (file_exists($ruta)){
            $ar=fopen($ruta,"r");
            $lista=json_decode(fgets($ar));
            fclose($ar);
            if (isset($lista)){
                return $lista;
            }else{
                echo "La lista esta vacia";
            }
        }
        else{
            echo "Archivo Inexistente";
        }
    }
}