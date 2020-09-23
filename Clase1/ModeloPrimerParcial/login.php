<?php

require "Token.php";
require "ClaseClientes.php";
require "..\Files\archivos.php";

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    if (isset($_POST['email']) == 1 && isset($_POST['key']) == 1){
            $usuarios = Archivos::TraerJson("users.txt");
            foreach ($usuarios as $valor) {
                if ($_POST['email'] == $valor->_email && $_POST['key'] == $valor->_key){
                    echo ObtenerToken($valor->_email,$valor->_foto,$valor->_key);
                    return;
                }
            }
            echo "<br>Email o clave incorrectos<br>";
        }
    }