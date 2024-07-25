<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = '';

$Conn = mysqli_connect($server,$user,$password,$db);

if ($Conn->connect_error) {
    die ('<script>alert("Conexion Fallida: ")</script>' .$Conn->connect_error);
} else {
    die ('<script>alert("Su Conexion fue Exitosa!")</script>');
}