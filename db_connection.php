<?php
// Configuración de la conexión
$servername = "18.230.66.209"; // Cambia esto si tu servidor no es local
$username = "root"; // Cambia esto por el usuario de tu base de datos
$password = "amaterasu1"; // Cambia esto por la contraseña de tu base de datos
$database = "redsalva"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Configuración adicional (opcional)
$conn->set_charset("utf8"); // Establecer codificación de caracteres UTF-8

// Mensaje opcional para pruebas (quitar en producción)
// echo "Conexión exitosa a la base de datos.";
?>
