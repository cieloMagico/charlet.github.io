<?php
session_start(); // Inicia la sesión

// Verificar si la sesión está activa y destruirla
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) {
    session_unset();  // Elimina todas las variables de sesión
    session_destroy();  // Destruye la sesión
}

// Redirige al usuario a la página de inicio o login
header("Location: index.php");
exit;
?>
