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

// $decoded = JWT::decode($jwt, $key, array('HS256'));
// print_r($decoded);

// /*
//  NOTE: This will now be an object instead of an associative array. To get
//  an associative array, you will need to cast it as such:
// */

// $decoded_array = (array) $decoded;

// /**
//  * You can add a leeway to account for when there is a clock skew times between
//  * the signing and verifying servers. It is recommended that this leeway should
//  * not be bigger than a few minutes.
//  *
//  * Source: http://self-issued.info/docs/draft-ietf-oauth-json-web-token.html#nbfDef
//  */
// JWT::$leeway = 60; // $leeway in seconds
// $decoded = JWT::decode($jwt, $key, array('HS256'));