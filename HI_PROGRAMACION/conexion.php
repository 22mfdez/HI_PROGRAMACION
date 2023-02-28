<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'hito';

$conexion = mysqli_connect($host, $user, $password, $db);
if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
}
//REALIZAMOS LA CONEXION A LA BASE DE DATOS
?>
