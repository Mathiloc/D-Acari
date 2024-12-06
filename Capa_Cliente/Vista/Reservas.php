
<?php
session_start();  // Inicia la sesión

?>

<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'bd_dacari');
// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar reserva cuando se envíe el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['id_cliente'])) {
        echo "<script>alert('Debe iniciar sesión para realizar una reserva.');</script>";
        exit;
    }

    // Conexión a la base de datos
    $conn = new mysqli('localhost', 'root', '', 'bd_dacari');
    // Verificar conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    // Recibir los datos del formulario
    $cantidad_mesas = intval($_POST['cantidad_mesas']);
    $cantidad_personas = intval($_POST['cantidad_personas']);
    $numero_mesa = intval($_POST['numero_mesa']);
    $fecha_reserva = $_POST['fecha_reserva']; // Formato YYYY-MM-DD
    $hora_reserva = $_POST['hora_reserva'];   // Formato HH:MM
    $id_cliente = $_SESSION['id_cliente']; // Asumimos que el ID del cliente está en la sesión
    $zona = $_POST['zona'];


   
    // Validar campos obligatorios
    if (empty($cantidad_mesas) || empty($cantidad_personas) || empty($numero_mesa) || empty($fecha_reserva) || empty($hora_reserva)  || empty($zona)) {
        echo "<script>alert('Por favor, complete todos los campos requeridos.');</script>";
    } else {
        // Preparar la consulta SQL para insertar los datos
        $sql = "INSERT INTO reserva (Cantidad_Mesas, Cantidad_Personas, Numero_Mesa, Fecha_Reserva, Hora_Reserva, ID_Cliente, Zona)
                VALUES (?,?,?,?,?,?,?)";

        // Preparar la sentencia
        $stmt = $conn->prepare($sql);

        // Enlazar los parámetros a la consulta SQL
        $stmt->bind_param("iiissis", $cantidad_mesas, $cantidad_personas, $numero_mesa, $fecha_reserva, $hora_reserva, $id_cliente, $zona);
        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<script>alert('Reserva realizada con éxito.');</script>";
        } else {
            echo "<script>alert('Error al realizar la reserva. Intente nuevamente.');</script>";
        }
        error_log("El valor de numero_mesa es: " . $numero_mesa);
        // Cerrar la sentencia
        $stmt->close();
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservas</title>
    <link rel="stylesheet" href="../Estilos/Reservas.css" />
  </head>

  <?php include '../../Capa_Cliente/header/header.php'?>
  <body>
      
    

    <div class="heading">
      <h1>Reservas</h1>
      <p>
        En D'Acari, queremos asegurarnos de que vivas momentos
        inolvidables. A través de nuestra sección de reservas, puedes asegurarte
        de contar con la mesa perfecta para ti y tus acompañantes.
      </p>
    </div>
    <div class="container">
      <section class="about">
        <div class="about-image">
          <img src="../Img/img-reservas/mision.jpg" alt="Imagen d'acari" />
        </div>
        <div class="about-content">
          <h2>¡Reserva tu lugar y disfruta de una experiencia única!</h2>
          <p>
            En D'Acari, sabemos que cada comida es una oportunidad para
            disfrutar, compartir y crear recuerdos inolvidables. Por eso, te
            ofrecemos la posibilidad de reservar tu mesa de manera sencilla y
            rápida, asegurando que tengas el espacio perfecto para vivir una
            experiencia gastronómica única. Selecciona la zona, la fecha, hora y
            número de personas, y déjanos el resto a nosotros. Ya sea para una
            ocasión especial o una reunión casual, nuestro equipo está listo
            para recibirte con la calidez y calidad que caracterizan a D'Acari.
            ¡No esperes más! Reserva ahora y déjanos consentirte con nuestra
            deliciosa comida y atención personalizada.
          </p>
        </div>
      </section>
      <section class="heading">

        <div class="reserva-content container" id="myModal">
            <h2>NUESTRAS ZONAS</h2>

            <p>Te ofrecemos el espacio que mejor se adapte a tu experiencia. Contamos con diferentes
              ambientes cuidadosamente diseñados para brindarte comodidad y un entorno único. Escoge la zona que más te
              guste y déjanos encargarnos de hacer tu visita inolvidable
            </p>

        </div>


        <div class="container-all" id="SliderExterior" style="display: none;">
            <input type="radio" id="exterior1" name="image-slide-exterior" hidden />
            <input type="radio" id="exterior2" name="image-slide-exterior" hidden />
            <input type="radio" id="exterior3" name="image-slide-exterior" hidden />


            <div class="slide">
                <div class="item-slide">
                    <img src="../Img/img-reservas/zona-exterior-1.jpeg" alt="Slider Exteior 1">
                </div>
                <div class="item-slide">
                    <img src="../Img/img-reservas/zona-exterior-2.jpeg" alt="Slider Exteior 2">
                </div>
                <div class="item-slide">
                    <img src="../Img/img-reservas/zona-exterior-3.jpeg" alt="Slider Exteior 3">
                </div>
            </div>


            <div class="pagination" id="paginationControls" style="display: none;">
                <label class="pagination-item" for="exterior1">
                    <img src="../Img/img-reservas/zona-exterior-1.jpeg" alt="Control Slider 1">
                </label>
                <label class="pagination-item" for="exterior2">
                    <img src="../Img/img-reservas/zona-exterior-2.jpeg" alt="Control Slider 2">
                </label>
                <label class="pagination-item" for="exterior3">
                    <img src="../Img/img-reservas/zona-exterior-3.jpeg" alt="Control Slider 3">
                </label>
            </div>
        </div>


        <div class="reserva-content container">
            <a href="#" class="btn-zona" id="btnExterior">Ver zona exterior</a>
        </div>

        <!--Zona interior-->
        <div class="container-all" id="SliderInterior" style="display: none;">
          <input type="radio" id="interior1" name="image-slide-interior" hidden />
          <input type="radio" id="interior2" name="image-slide-interior" hidden />
          <input type="radio" id="interior3" name="image-slide-interior" hidden />


          <div class="slide">
              <div class="item-slide">
                  <img src="../Img/img-reservas/zona-interior-1.jpeg" alt="Slider interior 1">
              </div>
              <div class="item-slide">
                  <img src="../Img/img-reservas/zona-interior-2.jpeg" alt="Slider interior 2">
              </div>
              <div class="item-slide">
                  <img src="../Img/img-reservas/zona-interior-3.jpeg" alt="Slider interior 3">
              </div>
          </div>


          <div class="pagination" id="paginationControls" style="display: none;">
              <label class="pagination-item" for="interior 1">
                  <img src="../Img/img-reservas/zona-interior-1.jpeg" alt="Control Slider 1">
              </label>
              <label class="pagination-item" for="interior 2">
                  <img src="../Img/img-reservas/zona-interior-2.jpeg" alt="Control Slider 2">
              </label>
              <label class="pagination-item" for="interior 3">
                  <img src="../Img/img-reservas/zona-interior-3.jpeg" alt="Control Slider 3">
              </label>
          </div>
      </div>


      <div class="reserva-content container">
          <a href="#" class="btn-zona" id="btnInterior">Ver zona interior</a>
      </div>

      <!--Zona trasera-->
      <div class="container-all" id="SliderTrasera" style="display: none;">
        <input type="radio" id="trasera1" name="image-slide-trasera" hidden />
        <input type="radio" id="trasera2" name="image-slide-trasera" hidden />
        <input type="radio" id="trasera3" name="image-slide-trasera" hidden />


        <div class="slide">
            <div class="item-slide">
                <img src="../Img/img-reservas/zona-trasera-1.jpeg" alt="Slider trasera 1">
            </div>
            <div class="item-slide">
                <img src="../Img/img-reservas/zona-trasera-2.jpeg" alt="Slider trasera 2">
            </div>
            <div class="item-slide">
                <img src="../Img/img-reservas/zona-trasera-3.jpeg" alt="Slider trasera 3">
            </div>
        </div>


        <div class="pagination" id="paginationControls" style="display: none;">
            <label class="pagination-item" for="trasera 1">
                <img src="../Img/img-reservas/zona-trasera-1.jpeg" alt="Control Slider 1">
            </label>
            <label class="pagination-item" for="trasera 2">
                <img src="../Img/img-reservas/zona-trasera-2.jpeg" alt="Control Slider 2">
            </label>
            <label class="pagination-item" for="trasera 3">
                <img src="../Img/img-reservas/zona-trasera-3.jpeg" alt="Control Slider 3">
            </label>
        </div>
    </div>


    <div class="reserva-content container">
        <a href="#" class="btn-zona" id="btnTrasera">Ver zona trasera</a>
    </div>
    </section>
      
      </div>
      <!--Formulario-->
      <div>


        <div class="formulario">
          <div class="container-time">
              <h2 class="heading-form">Tiempo de atención</h2>
              <h3 class="heading-days">Lunes - Viernes</h3>
              <p>7 am - 11 am (Desayuno)</p>
              <p>11 am - 10 pm (Almuerzo/Cena)</p>
      
              <h3 class="heading-days">Sábado y Domingo</h3>
              <p>9 am - 11 am (Desayuno)</p>
              <p>11 am - 10 pm (Almuerzo/Cena)</p>
      
              <hr>
      
              <h4 class="heading-phone">Llamenos: +51 999 999 999</h4>
          </div>
      
          <div class="container-form">
          <form method="POST" action="Reservas.php">
          <label for="fecha_reserva">Fecha de Reserva:</label>
          <input type="date" id="fecha_reserva" name="fecha_reserva" required>

          <label for="cantidad_personas">Cantidad de Personas:</label>
          <input type="number" id="cantidad_mesas" name="cantidad_mesas" required>
          
          <label for="cantidad_mesas">Cantidad de Mesas:</label>
          <input type="number" id="cantidad_personas" name="cantidad_personas" required>
          
          <label for="numero_mesa">Número de Mesa:</label>
          <input type="number" id="numero_mesa" name="numero_mesa" required>
          
          <label for="hora_reserva">Hora de Reserva:</label>
          <input type="time" id="hora_reserva" name="hora_reserva" required>
          
          <label for="zona">Zona:</label>
          <input type="text" id="zona" name="zona" required>
      
          <button type="submit">Realizar Reserva</button>
          </form>
          </div>
        </div>
      </div>	

      
      
      
      <script>
// Actualizar mesas dinámicamente según la zona seleccionada
document.getElementById('zona').addEventListener('change', function () {
    const zonaId = this.value;

    // Fetch mesas disponibles
    fetch('procesar_reserva.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `zona_id=${zonaId}`
    })
    .then(response => response.json())
    .then(data => {
        console.log(data); // Maneja la actualización de mesas si es necesario
    });
});
</script>

        
      
    
    <script src="../../Capa_Negocio/Reservas.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script src="../header/header.js"></script>
  </body>
</html>
