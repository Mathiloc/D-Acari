
<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'bd_dacari');

// Consulta para obtener las zonas
$query_zonas = "SELECT id, nombre FROM zonas";
$zonas_result = $conn->query($query_zonas);

// Consulta dinámica para obtener mesas por zona
if (isset($_POST['zona_id'])) {
    $zona_id = intval($_POST['zona_id']);
    $query_mesas = "SELECT id, capacidad FROM mesas WHERE zona_id = ? AND estado = 'disponible'";
    $stmt = $conn->prepare($query_mesas);
    $stmt->bind_param("i", $zona_id);
    $stmt->execute();
    $mesas_result = $stmt->get_result();
    $stmt->close();
}
?>

<?php
if (isset($_POST['cantidad_personas'])) {
    $cantidad_personas = intval($_POST['cantidad_personas']);
    $mesas_necesarias = [];

    while ($mesa = $mesas_result->fetch_assoc()) {
        if ($cantidad_personas <= 0) break;
        $capacidad = intval($mesa['capacidad']);
        $mesas_necesarias[] = $mesa['id'];
        $cantidad_personas -= $capacidad;
    }

    if ($cantidad_personas > 0) {
        echo "<script>alert('No hay suficientes mesas disponibles para esta zona');</script>";
    } else {
        // Guardar las mesas asignadas
        foreach ($mesas_necesarias as $mesa_id) {
            $query_asignar = "UPDATE mesas SET estado = 'reservada' WHERE id = ?";
            $stmt = $conn->prepare($query_asignar);
            $stmt->bind_param("i", $mesa_id);
            $stmt->execute();
        }
        echo "<script>alert('Reserva realizada exitosamente');</script>";
    }
}
?>
