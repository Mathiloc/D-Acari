<?php
session_start();
session_unset(); // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión
header("../../Capa_Cliente/Vista/Login.php"); // Redirige a la página de inicio

// Redirigir al usuario a la página desde la que vino
$redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php'; // Si no hay referencia, redirige al inicio
header("Location: $redirect_url");
exit;
?>

