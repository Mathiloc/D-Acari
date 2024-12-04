<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}



if (isset($_POST['registro'])) {
    // Recuperar y validar datos del formulario
    $nombre = $_POST['nombre_cliente'] ?? null;
    $apellido = $_POST['apellido'] ?? null;
    $documento = $_POST['documento'] ?? null;
    $fecha_nacimiento = $_POST['fecha_nacimiento'] ?? null;
    $telefono = $_POST['telefono'] ?? null;
    $correo = $_POST['correo'] ?? null;
    $contrasena = $_POST['contrasena'] ?? null;

    // Validación de campos
    if ($nombre && $apellido && $documento && $fecha_nacimiento && $telefono && $correo && $contrasena) {
        // Validación del correo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Correo electrónico no válido.');</script>";
        } else {
            // Preparar consulta SQL usando consultas preparadas para evitar inyección SQL
            $stmt = $conn->prepare("
                INSERT INTO cliente 
                (Tipo_Documento, Documento_Cliente, Nombre_Cliente, Apellido_Cliente, Fecha_Nacimiento, Correo, Contraseña_Cliente, Telefono, Direccion, Ruc_Cliente, Razon_Social)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, '', '', '')
            ");

            // Suponiendo que el tipo de documento es un valor estático, puedes ajustarlo según sea necesario
            $tipo_documento = ''; // Modificar según tu lógica
            $stmt->bind_param("ssssssss", $tipo_documento, $documento, $nombre, $apellido, $fecha_nacimiento, $correo, $contrasena, $telefono);

            // Ejecutar consulta
            if ($stmt->execute()) {
                echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.');</script>";
                header("Location: login.php"); // Redirigir a la página de inicio de sesión
                exit();
            } else {
                echo "<script>alert('Error al registrar: " . mysqli_error($conn) . "');</script>";
            }

            // Cerrar declaración y conexión
            $stmt->close();
        }
    } else {
        echo "<script>alert('Por favor, completa todos los campos.');</script>";
    }
}
?>



