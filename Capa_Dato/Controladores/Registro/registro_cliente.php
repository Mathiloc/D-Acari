<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require '../../Capa_Dato/Conexion/conexion.php';

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
            // Verificar si el correo ya existe
            $stmt_check = $conn->prepare("SELECT COUNT(*) FROM cliente WHERE Correo = ?");
            $stmt_check->bind_param("s", $correo);
            $stmt_check->execute();
            $stmt_check->bind_result($email_count);
            $stmt_check->fetch();

            if ($email_count > 0) {
                echo "<script>alert('El correo electrónico ya está registrado.');</script>";
                exit();
            }

            $stmt_check->close();

            // Encriptar la contraseña antes de guardarla
            $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

            // Preparar consulta SQL usando consultas preparadas para evitar inyección SQL
            $stmt = $conn->prepare("
                INSERT INTO cliente 
                (Tipo_Documento, Documento_Cliente, Nombre_Cliente, Apellido_Cliente, Fecha_Nacimiento, Correo, Contraseña_Cliente, Telefono, Direccion, Ruc_Cliente, Razon_Social)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, '', '', '')
            ");

            // Suponiendo que el tipo de documento es un valor estático, puedes ajustarlo según sea necesario
            $tipo_documento = ''; // Modificar según tu lógica
            $stmt->bind_param("ssssssss", $tipo_documento, $documento, $nombre, $apellido, $fecha_nacimiento, $correo, $contrasena_encriptada, $telefono);

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

$conn->close();
?>


