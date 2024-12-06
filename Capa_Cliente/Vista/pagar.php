<?php
session_start();
include '../../Capa_Cliente/header/header.php';
include_once '../../Capa_Dato/Conexion/conexion.php'; // Asegúrate de tener la conexión a la base de datos.

// Verificar si el usuario está logueado
$usuario_logueado = isset($_SESSION['id_cliente']);
if (!$usuario_logueado) {
    header('Location: login.php'); // Redirigir si no está logueado.
    exit();
}

// Obtener el total del carrito
$total = 0;
foreach ($_SESSION['CARRITO'] as $producto) {
    $total += $producto['precio'] * $producto['cantidad'];
}

// Procesar el pago (simulando aquí un pago exitoso)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar el método de pago
    if (!in_array($_POST['metodo_pago'], ['Tarjeta', 'Yape'])) {
        die('Método de pago no válido');
    }

    // Generar una clave de transacción única
    $clave_transaccion = uniqid('TXN-', true);

    // Insertar datos en la tabla VENTA
    $query_venta = "INSERT INTO VENTA (ClaveTransaccion, PagoDatos, Fecha_Venta, CorreoConfirmacion, Monto_Total, Status, Metodo_Pago, IGV, Importe_Total)
                    VALUES (?, ?, NOW(), ?, ?, 'Pendiente', ?, ?, ?)";

    $stmt = $conn->prepare($query_venta);
    $stmt->bind_param("ssssssss", $clave_transaccion, $_POST['pago_datos'], $_POST['correo'], $total, $_POST['metodo_pago'], 0.18 * $total, $total * 1.18);
    $stmt->execute();
    $id_venta = $stmt->insert_id;

    // Insertar los detalles de la venta en la tabla DETALLE_VENTA
    foreach ($_SESSION['CARRITO'] as $producto) {
        $query_detalle = "INSERT INTO DETALLE_VENTA (ID_Venta, ID_Producto, Precio_Unitario, Cantidad, Descarga)
                          VALUES (?, ?, ?, ?, ?)";
        $stmt_detalle = $conn->prepare($query_detalle);
        $stmt_detalle->bind_param("iiiii", $id_venta, $producto['id'], $producto['precio'], $producto['cantidad'], 0); // Suponiendo 0 para la columna Descarga
        $stmt_detalle->execute();
    }

    // Limpiar el carrito después de la compra
    unset($_SESSION['CARRITO']);

    // Redirigir a una página de confirmación o éxito
    header('Location: confirmacion.php?transaccion=' . $clave_transaccion);
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
</head>
<body>
    <h1>Pagar</h1>
    <form method="POST">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" required><br><br>

        <label for="pago_datos">Detalles del Pago:</label>
        <textarea name="pago_datos" required></textarea><br><br>

        <label for="metodo_pago">Método de Pago:</label>
        <select name="metodo_pago" required>
            <option value="Tarjeta">Tarjeta de Crédito</option>
            <option value="Yape">Yape</option>
            <!-- Agregar otros métodos de pago si es necesario -->
        </select><br><br>

        <button type="submit">Confirmar Pago</button>
    </form>
</body>
</html>
