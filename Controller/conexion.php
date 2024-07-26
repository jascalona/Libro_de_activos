<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "libro_de_ingresos";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conexion) {
  die('<script>alert("Conexion Fallida")</script>' . mysqli_connect_error());
}
// die ('<script>alert("Su Conexion fue EXitosa!")</script>');
?>