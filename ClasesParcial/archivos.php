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
    static function LeerArchivo($fileName,$objeto,$separador){
        $file = $fileName;
        $modo = 'r';
    
        $NuevoArray = array();
        $archivo = fopen($file, $modo);
    
        while (!feof($archivo)){
            $linea = fgets($archivo);    
            $datos = explode($separador,$linea);            
            if (count($datos) > 1) {
                $nuevoObjeto = new $objeto($datos[0],$datos[1]);//Elegir la menera en la que se guarde
                array_push($NuevoArray, $nuevoObjeto);
            }    
        }
        $close = fclose($archivo);
        return $NuevoArray;
    }
    static function EscribirArchivo($fileName,$objeto="",$modoArchivo){
        $file = $fileName;
        $modo = $modoArchivo;
        $archivo = fopen($file, $modo);
        if (is_array($objeto)){
            foreach($objeto as $value)
            {
               $fwrite = fwrite($archivo, $value);
               if ($value == $objeto[count($objeto)-1]){
                   fwrite($archivo,"\n");
               }
            }  
            return true;   
        }
        else if (is_string($objeto)){
            if ($modoArchivo == "a"){
                fwrite($archivo,"\n");
            }
            $fwrite = fwrite($archivo, $objeto);
            return true;
        }
        else
        {
            return false;
        }
        $close = fclose($archivo);
    }
}