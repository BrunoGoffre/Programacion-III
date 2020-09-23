<?php

function LeerArchivo($fileName,$objeto,$separador){
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

function EscribirArchivo($fileName,$objeto="",$modoArchivo){
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
// copy($file, 'nuevo_archivo.txt');
// unlink('nuevo_archivo.txt');

// $size = filesize($file);

// 

// echo "fwrite $fwrite <br>";
// $fread = fread($archivo, $size); // Todo el archivo
// echo $fread;


