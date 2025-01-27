<?php
// Parámetros de conexión a la base de datos
$host = 'localhost:52000';  // Puede ser la IP o nombre del servidor
$usuario = 'alumne';  // Nombre de usuario para la base de datos
$contrasena = 'alumne';  // Contraseña de la base de datos
$base_de_datos = 'url';  // Nombre de la base de datos

// Crear la conexión
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

