<?php
include 'utils/Ejercicio1.php';
include 'utils/Ejercicio4.php';
include 'utils/Ejercicio5.php';
include 'utils/Ejercicio6.php';
include 'utils/Ejercicio7.php';
include 'utils/Ejercicio8.php';
include 'utils/Ejercicio9.php';
include 'utils/Ejercicio17.php';
require 'FileMethods.php';
require 'productos.php';

$productos = LeerArchivo("archivo.txt", "Producto",'*');
//$nuevoProducto = new Producto ("JoyStick","24");
//array_push($productos,$nuevoProducto);
if (EscribirArchivo("archivo.txt","EsDeNoche","a")){
    echo "devolvio true";
}
else{
    echo "devolvio false";
}




// EjercicioUno();

// echo "Ejercicio 2 <br>";
// echo "--------------------------- <br>";
// echo date("l")."<br>";
// echo date('l jS \of F Y h:i:s A')."<br>";
// echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000))."<br>";

// switch(date("F"))
// {
//     case "August":
//         echo "Estamos en invierno";    
// }
// echo "<br>";



// echo "--------------------------- <br>";
// echo "Ejercicio 3 <br>";
// echo "--------------------------- <br>";
// $a = 23;
// $b = 12;
// $c = 32;
// $array = array($a,$b,$c);
// ksort($array);
// $correcta = $array[1];

// echo '$a='."$a ".'$b='."$b ".'$b='."$c"." => se muestra: $correcta";

// echo "<br>";
// echo "--------------------------- <br>";

// echo "Ejercicio 4 <br>";
// echo "--------------------------- <br>";
// EjercicioCuatro();
// echo "--------------------------- <br>";

// echo "Ejercicio 5 <br>";
// echo "--------------------------- <br>";
// EjercicioCinco();
// echo "<br>";
// echo "--------------------------- <br>";

// echo "<br>";
// echo "Ejercicio 6 <br>";
// echo "--------------------------- <br>";
// EjercicioSeis();
// echo "<br>--------------------------- <br>";
// echo "<br>";

// echo "Ejercicio 7";
// echo "<br>--------------------------- <br>";
// ejercicioSiete();
// echo "<br>--------------------------- <br>";

// echo "Ejercicio 8";
// echo "<br>--------------------------- <br>";
// ejercicioOcho();
// echo "<br>--------------------------- <br>";

// echo "Ejercicio 9";
// echo "<br>--------------------------- <br>";
// ejercicioNueve();
// echo "<br>--------------------------- <br>";

//EjercicioDiezYSiete();