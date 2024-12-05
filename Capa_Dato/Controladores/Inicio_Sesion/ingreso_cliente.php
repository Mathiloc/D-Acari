<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'] ?? null;
    if ($action === "login") {
    $correo_cliente = $_POST['correo_cliente'] ?? null;
    $contrasena_cliente = $_POST['contraseña_cliente'] ?? null;

    if ($correo_cliente && $contrasena_cliente) {

    // Consulta SQL utilizando consultas preparadas para evitar inyecciones SQL
    $stmt = $conn->prepare("SELECT ID_Cliente, Nombre_Cliente FROM cliente WHERE Correo = ? AND Contraseña_Cliente = ?");
    $stmt->bind_param("ss", $correo_cliente, $contrasena_cliente);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Si el usuario existe, guarda su nombre en la sesión
        $row = $result->fetch_assoc();
        $_SESSION['id_cliente'] = $row['ID_Cliente'];
        $_SESSION['documento_cliente'] = $correo_cliente;
        $_SESSION['nombre_cliente'] = $row['Nombre_Cliente'];
        
        // Redirigir a la página de inicio
        header("Location: Index.php");
        exit();
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
    }

    // Cerrar la declaración
    $stmt->close();
} else {
    echo "<script>alert('Por favor, completa todos los campos');</script>";
}


} elseif ($action === "register") {
    // Proceso de registro
    $nombre_cliente = $_POST['nombre_cliente'] ?? null;
    $correo_cliente = $_POST['correo_cliente'] ?? null;
    $contrasena_cliente = $_POST['contraseña_cliente'] ?? null;

    if ($nombre_cliente && $correo_cliente && $contrasena_cliente) {
        $stmt = $conn->prepare("INSERT INTO cliente (Nombre_Cliente, Correo, Contraseña_Cliente) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre_cliente, $correo_cliente, $contrasena_cliente);

        if ($stmt->execute()) {
            echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.');</script>";
        } else {
            echo "<script>alert('Error al registrar. Verifica los datos e inténtalo nuevamente.');</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Por favor, completa todos los campos');</script>";
    }
} else {
    echo "<script>alert('Acción no válida');</script>";
}
}
?>