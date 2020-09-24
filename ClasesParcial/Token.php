<?php
require __DIR__."/../vendor/autoload.php";
use \Firebase\JWT\JWT;

function ObtenerToken($email,$foto,$key){
  $payload = array(
    "email" => $email,
    "foto" => $foto
  );
  return JWT::encode($payload, $key);
}

function DecodeJWT ($jwt,$key){
  $decode = JWT::decode($jwt, $key, array('HS256'));
  return (array) $decode;
}

// JWT::$leeway = 60; // $leeway in seconds
// $decoded = JWT::decode($jwt, $key, array('HS256'));