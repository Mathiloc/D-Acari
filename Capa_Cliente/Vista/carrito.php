<?php
session_start();

// Verificar si se ha solicitado agregar un producto al carrito
if (isset($_GET['agregar'])) {
    $id_producto = (int)$_GET['id'];
    $nombre_producto = $_GET['nombre'];
    $precio_producto = (float)$_GET['precio'];

    // Verificar si el carrito ya tiene el producto
    $producto_encontrado = false;
    if (!empty($_SESSION['CARRITO'])) {
        foreach ($_SESSION['CARRITO'] as $key => $producto) {
            if ($producto['id'] == $id_producto) {
                // Si el producto ya está en el carrito, incrementar la cantidad
                $_SESSION['CARRITO'][$key]['cantidad']++;
                $producto_encontrado = true;
                break;
            }
        }
    }

    // Si no se encontró el producto, agregarlo al carrito
    if (!$producto_encontrado) {
        $_SESSION['CARRITO'][] = [
            'id' => $id_producto,
            'nombre' => $nombre_producto,
            'precio' => $precio_producto,
            'cantidad' => 1
        ];
    }

    // Redirigir al carrito para actualizar la vista
    header('Location: carrito.php');
    exit();
}

// Verificar si se ha solicitado eliminar un producto del carrito
if (isset($_GET['eliminar'])) {
    $indice_eliminar = (int)$_GET['eliminar'];

    // Verificar si el índice es válido
    if (isset($_SESSION['CARRITO'][$indice_eliminar])) {
        // Eliminar el producto del carrito
        unset($_SESSION['CARRITO'][$indice_eliminar]);

        // Reindexar el carrito para evitar huecos en el array
        $_SESSION['CARRITO'] = array_values($_SESSION['CARRITO']);
    }

    // Redirigir de nuevo al carrito para actualizar la vista
    header('Location: carrito.php');
    exit();
}

// Verificar si el carrito existe
if (!isset($_SESSION['CARRITO'])) {
    $_SESSION['CARRITO'] = []; // Inicializamos el carrito si no existe
}

$total = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Carrito de Compras</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($_SESSION['CARRITO'])): ?>
            <?php foreach ($_SESSION['CARRITO'] as $indice => $item): ?>
                <?php
                $subtotal = $item['precio'] * $item['cantidad'];
                $total += $subtotal;
                ?>
                <tr>
                    <td><?= htmlspecialchars($item['nombre']) ?></td>
                    <td>S/ <?= number_format($item['precio'], 2) ?></td>
                    <td><?= $item['cantidad'] ?></td>
                    <td>S/ <?= number_format($subtotal, 2) ?></td>
                    <td>
                        <a href="carrito.php?eliminar=<?= $indice ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">Tu carrito está vacío.</td>
            </tr>
        <?php endif; ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3" class="text-end"><strong>Total</strong></td>
            <td>S/ <?= number_format($total, 2) ?></td>
            <td></td>
        </tr>
        </tfoot>
    </table>
    <div class="text-end">
        <a href="Menu.php" class="btn btn-primary">Seguir Comprando</a>
        <?php if (!empty($_SESSION['CARRITO'])): ?>
            <a href="pagar.php" class="btn btn-success">Proceder al Pago</a>
        <?php endif; ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>