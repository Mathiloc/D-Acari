<?php
session_start();

// Mostrar el contenido del carrito (opcional, para depuración)
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
  // Solo se actualiza la sesión y no se redirige
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu D'Acari</title>
  <script src="https://kit.fontawesome.com/eb344c5846.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu:500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Zilla+Slab&display=swap" rel="stylesheet" />
  <link rel="icon" href="../Img/imagenes/logoredondo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />

  <link rel="stylesheet" href="../Estilos/Menu.css" />
</head>
<?php include '../header/header.php'; ?>
<body>
  <div class="container">
    

    <section class="menu">

    
    <?php include '../../Capa_Dato/Conexion/conexion.php'; ?>
      <div class="title">
        <h2>Menú D'Acari</h2>
      </div>

      <div class="btn-container">
        <button class="btn btn-outline-dark btn-item" data-id="Todos">Todos</button>
        <button class="btn btn-outline-dark btn-item" data-id="Menú">Menú</button>
        <button class="btn btn-outline-dark btn-item" data-id="Carta">Platos a la carta</button>
        <button class="btn btn-outline-dark btn-item" data-id="Marinos">Marinos</button>
        <button class="btn btn-outline-dark btn-item" data-id="Bebidas">Bebidas</button>
      </div>
      <?php  
        
        $query = "SELECT id_producto,nombre_producto, descripcion, precio_producto, imagen, tipo FROM producto";
        $result = $conn->query($query);
        echo '<div class="section-center row">';
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
               // Verificar si hay resultados
               echo '<div class="menu-items col-lg-6 col-sm-12">
           <img src="' . $row['imagen'] . '" 
           alt="' . $row['nombre_producto'] . '" class="photo"/>
           <div class="menu-info">
             <div class="menu-title">
               <h4>' . $row['nombre_producto'] . '</h4>
             </div>
             <div class="menu-text">' . $row['descripcion'] . '</div>
             <div class="menu-action">
               <h4 class="price">S/' . number_format($row['precio_producto'], 2) .'</h4>
               <!-- Enlace para añadir al carrito -->
                   <a href="carrito.php?agregar=1&id=' . $row['id_producto'] . 
                           '&nombre=' . urlencode($row['nombre_producto']) . 
                           '&precio=' . $row['precio_producto'] . 
                           '&imagen=' . urlencode($row['imagen']) . '" class="cart-button">Añadir al Carrito</a>
               </div>
              </div>
           </div>';
          }
          echo '</div>';
        } else {
          echo '<p>No hay productos disponibles en este momento.</p>';
        }

        // Cerrar conexión
        $conn->close();
        ?>
      </div>

    </section>
  </div>
  <!-- <script src="../../Capa_Negocio/Menu.js"></script> -->
  



  <script src="../header/header.js"></script>
</body>

</html>