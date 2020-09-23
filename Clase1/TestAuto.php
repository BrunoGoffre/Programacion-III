<?php

include 'utils/Ejercicio17.php';
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

require_once './clases/auto.php';

/**
 * METODOS
 * GET: OBTENER RECURSOS.
 * POST: CREAR RECURSOS.
 * PUT: MODIFICAR RECURSOS.
 * DELETE: BORRAR RECURSOS.
 */

// var_dump($_SERVER);
 
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? 0;

switch ($path) {
    case '/auto':
        if ($method == 'POST') {
            $patente = $_POST['patente'] ?? '';
            $marca = $_POST['marca'] ?? '';
            $color = $_POST['color'] ?? '';
            $precio = $_POST['precio'] ?? 0;

            $auto = new Auto($patente, $marca, $color, $precio);

            // $auto->_marca = 'Fiat';
            echo "<br>";
            echo $auto;
        } else if ($method == 'GET') {
            $patente = $_GET['patente'] ?? '';
            $marca = $_GET['marca'] ?? '';
            $color = $_GET['color'] ?? '';
            $precio = $_GET['precio'] ?? 0;

            $auto = new Auto($patente, $marca, $color, $precio);

            // $auto->_marca = 'Fiat';
            echo "<br>";
            echo $auto;
        } else {
            echo "Metodo no permitido";
        }
    break;
    case 'user':
    break;

    default:
        echo 'Path erroneo';
        
}


die();

echo $method . "<br>" . $path . "<br>";

var_dump($_POST);
$patente = $_POST['patente'] ?? '';
$marca = $_POST['marca'] ?? '';
$color = $_POST['color'] ?? '';
$precio = $_POST['precio'] ?? 0;

$auto = new Auto($patente, $marca, $color, $precio);

// $auto->_marca = 'Fiat';
echo "<br>";
echo $auto;


die();

var_dump($_GET);

$patente = $_GET['patente'] ?? '';
$marca = $_GET['marca'] ?? '';
$color = $_GET['color'] ?? '';
$precio = $_GET['precio'] ?? 0;

// if (isset($_GET['precio'])) {
//     $precio = $_GET['precio'];
// } else {
//     $precio = 0;
// }

$auto = new Auto($patente, $marca, $color, $precio);

// $auto->_marca = 'Fiat';
echo "<br>";
echo $auto;



var_dump($_POST);

$marca = $_POST['marca'] ?? '';
$color = $_POST['color'] ?? '';
$precio = $_POST['precio'] ?? 0;

$auto = new Auto($marca,$color,$precio);

echo $auto->MostrarAuto();

// var_dump($_GET);

// $patente = $_GET['marca'];
// $patente = $_GET['color'];
// $patente = $_GET['precio'] ?? 0; 

// if (isset($_GET['precio'])){
//     $patente = $_GET['precio'];
// }



// $auto1 = new Auto("Wolsvagen","Negro");
// $auto2 = new Auto("Wolsvagen","Blanco");
// $auto3 = new Auto("Ford","Azul",100000);
// $auto4 = new Auto("Ford","Azul",100000);
// $auto5 = new Auto("Fiat","Rojo",200000,"Hoy");

// $auto3->AgregarImpuestos(1500);
// $auto4->AgregarImpuestos(1500);
// $auto5->AgregarImpuestos(1500);

// echo "Auto1 + Auto2 = ".Auto::add($auto1,$auto2)."<br>";
// if (Auto::Equals($auto1,$auto5) == true && Auto::Equals($auto1,$auto2 == true)){
//     echo "Los autos son iguales <br>";
// }
// else{
//     echo "Los autos no son iguales<br>";
// }
// echo "<br>";
// $auto1->MostrarAuto();
// echo "<br>";
// $auto2->MostrarAuto();
// echo "<br>";
// $auto3->MostrarAuto();
// echo "<br>";
// $auto4->MostrarAuto();
// echo "<br>";
// $auto5->MostrarAuto();