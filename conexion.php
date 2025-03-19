<?php
$servername = "127.0.0.1"; // Puede ser "localhost"
$username = "root";
$password = "";
$database = "charlet";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos.");
}

// Configurar la codificación de caracteres
$conn->set_charset("utf8mb4");
?>
