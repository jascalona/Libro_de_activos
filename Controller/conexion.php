<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'libro_activo';

// Create connection
$conexion = mysqli_connect($server, $user, $password, $db);

// Check connection
if (!$conexion) {
  die ('<script>alert("Conexion Fallida: !")</script>' . mysqli_connect_error());
} else{
  //  die ('<script>alert("Conexion Exitosa!")</script>');
}
