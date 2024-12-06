<?php
session_start();
include_once '../../Capa_Dato/Conexion/conexion.php'; // Asegúrate de tener la conexión a la base de datos.

// Verificar si el usuario está logueado
$usuario_logueado = isset($_SESSION['id_cliente']);
if (!$usuario_logueado) {
    header('Location: login.php'); // Redirigir si no está logueado.
    exit();
}

// Verificar si el carrito tiene productos
if (empty($_SESSION['CARRITO'])) {
    die('El carrito está vacío');
}

// Obtener el total del carrito
$total = 0;
foreach ($_SESSION['CARRITO'] as $producto) {
    $total += $producto['precio'] * $producto['cantidad'];
}

// Calcular IGV y el importe total
$igv = 0.18 * $total;
$importe_total = $total * 1.18;
$monto_total = $total;  // Total sin IGV
$igv_valor = $igv;  // Valor de IGV
$importe_total_valor = $importe_total; 

// Procesar el pago (simulando aquí un pago exitoso)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar el método de pago
    if (!in_array($_POST['metodo_pago'], ['Tarjeta', 'Yape'])) {
        die('Método de pago no válido');
    }

    // Generar una clave de transacción única
    $clave_transaccion = uniqid('TXN-', true);

    // Insertar datos en la tabla VENTA
    $query_venta = "INSERT INTO VENTA (ClaveTransaccion, PagoDatos, Fecha_Venta, CorreoConfirmacion, Monto_Total, Metodo_Pago, IGV, Importe_Total, ID_Cliente)
                    VALUES (?, ?, NOW(), ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query_venta);

    // Obtener los datos del formulario
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $pago_datos = $_POST['pago_datos'];  // Asegúrate de que 'pago_datos' esté presente en el formulario
    $metodo_pago = $_POST['metodo_pago'];
    $id_cliente = $_SESSION['id_cliente']; // Asumimos que el ID de cliente está en la sesión
    
    // Crear variables para bind_param
    $total_pago = $monto_total; // Monto sin IGV
    $igv_valor_ref = $igv_valor;
    $importe_total_ref = $importe_total_valor;

    // Ejecutar la consulta para insertar la venta
    $stmt->bind_param("sssssssi", 
        $clave_transaccion, 
        $pago_datos, 
        $correo, 
        $total_pago,  // El monto sin IGV
        $metodo_pago, 
        $igv_valor_ref, 
        $importe_total_ref, 
        $id_cliente
    );
    $stmt->execute();

    $id_venta = $stmt->insert_id;  // Obtener el ID de la venta insertada

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

    // Mostrar mensaje de venta exitosa
    $mensaje = "Venta exitosa. ¡Gracias por su compra!";
    header('Location: confirmacion.php?transaccion=' . $clave_transaccion . '&mensaje=' . urlencode($mensaje));
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar - D'Acari</title>
    <link rel="stylesheet" href="../Estilos/pagar.css"> <!-- Asegúrate de tener tu CSS -->
    <style>
        /* Estilo del modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-contenido {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            cursor: pointer;
        }
    </style>
</head>
<body>
   <div class="form-container">
    <h1>Confirmar Pago</h1>

    <form method="POST" action="pagar.php">
        <!-- Campo para el correo electrónico -->
        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" id="correo" required><br><br>

        <!-- Campo para el método de pago -->
        <label for="metodo_pago">Método de Pago:</label>
        <select name="metodo_pago" id="metodo_pago" required>
            <option value="Tarjeta">Tarjeta de Crédito</option>
            <option value="Yape">Yape</option>
        </select><br><br>

        <!-- Campo para los datos de pago -->
        <label for="pago_datos">Datos de Pago:</label>
        <textarea name="pago_datos" id="pago_datos" required></textarea><br><br>

        <!-- Mostrar el total de la compra -->
        <p><strong>Total a Pagar:</strong> S/ <?php echo number_format($total, 2); ?></p>
        <p><strong>IGV:</strong> S/ <?php echo number_format($igv, 2); ?></p>
        <p><strong>Importe Total:</strong> S/ <?php echo number_format($importe_total, 2); ?></p>

        <!-- Botón para confirmar el pago -->
        <button type="submit">Confirmar Pago</button>
    </form>
    </div>

    <!-- Modal para el formulario de tarjeta -->
    <div id="modal-pago" class="modal">
        <div class="modal-contenido">
            <span id="cerrar-modal" class="close">&times;</span>
            <!-- Formulario de facturación y pago con tarjeta -->
            <div class="container">
                <form action="" id="formulario-pago">
                    <!-- Los campos del formulario -->
                </form>
            </div>
        </div>
    </div>

    <script>
        // Mostrar el modal cuando el usuario elige pagar con tarjeta
        document.querySelector("#metodo_pago").addEventListener("change", function() {
            const modal = document.getElementById('modal-pago');
            if (this.value === "Tarjeta") {
                modal.style.display = "flex";
            } else {
                modal.style.display = "none";
            }
        });

        // Cerrar el modal
        document.getElementById('cerrar-modal').addEventListener('click', function() {
            document.getElementById('modal-pago').style.display = 'none';
        });
    </script>
</body>
</html>
