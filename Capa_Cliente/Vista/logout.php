<?php
session_start();
session_unset(); // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión
header("../../Capa_Cliente/Vista/Login.php"); // Redirige a la página de inicio
exit;
?>