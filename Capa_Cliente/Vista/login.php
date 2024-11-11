<?php
session_start();
include("../../Capa_Dato/Conexion/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento_cliente = $_POST['documento_cliente'];
    $contrasena_cliente = $_POST['contraseña_cliente'];

    // Consulta SQL para validar usuario y obtener el nombre
    $sql = "SELECT Nombre_Cliente FROM cliente WHERE Documento_Cliente = '$documento_cliente' AND Contraseña_Cliente = '$contrasena_cliente'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si el usuario existe, guarda su nombre en la sesión
        $row = $result->fetch_assoc();
        $_SESSION['documento_cliente'] = $documento_cliente;
        $_SESSION['nombre_cliente'] = $row['Nombre_Cliente'];
        
        // Redirigir a la página de inicio
        header("Location: Index.php");
        exit();
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../Capa_Cliente/Estilos/login2.css">
    <link rel="icon" href="../Img/imagenes/logoredondo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
    <?php include '../header/header.php'; ?>
    <!-- <header >
             <div class="menu container">
                <img  class="logo-1" src="../Img/imagenes/logoredondo.png" alt="">
                <input type="checkbox" id="menu">
                <label for="menu">
                    <img src="../Img/images/menu.png" class="menu-icono" alt="">
                </label>
                <nav class="navbar">
                    <div class="menu-1">
                        <ul>
                            <li><a href="index.html"><i class="fas fa-home"></i> Inicio</a></li>
                            <li><a href="sobrenosotros.html"><i class="fas fa-users"></i> Sobre Nosotros</a></li>
                            <li><a href="Menu.html"> <i  class="fas fa-box"></i> Productos</a></li>
                            <li><a href="#"><i class="fas fa-calendar-alt"></i> Reservas</a></li>
                            <li><a href="Platillos.html"><i class="fas fa-user-friends"></i> Club</a></li>
                            <?php if (isset($_SESSION['nombre_cliente'])): ?>
                                <li><span style="color: white;">Bienvenido, <?php echo $_SESSION['nombre_cliente']; ?></span></li>
                                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
                            <?php else: ?>
                                <li><a href="login2.html"><i class="fa-sharp fa-solid fa-user-plus"></i> Registrate</a></li>
                            <?php endif; ?>
                                </ul>
                    </div>
                    <img class="logo-2" src="../Img/imagenes/logoredondo.png" alt="">
                    <div class="menu-2">
                        <ul>
                            <li><a href="#"><i class="fas fa-clock"></i> Horario</a></li>
                          
                        </ul>
                     
                        <div class="socials">
                            <a href="#">
                                <div class="social">
                                    <img src="../Img/images/s1.svg" alt="">
                                </div>
                            </a>
                            <a href="#">
                                <div class="social">
                                    <img src="../Img/images/s2.svg" alt="">
                                </div>
                            </a>
                            <a href="#">
                                <div class="social">
                                    <img src="../Img/images/s3.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </nav>
             </div>

    </header> -->

    <section>
        <div class="imgBx">
            <img src="../Img/img-login/login.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Iniciar sesión</h2>
                <form method="POST" action="login.php">
                    <div class="inputBx">
                        <span>Nombre de usuario</span>
                        <input type="text" name="documento_cliente">
                    </div>
                    <div class="inputBx">
                        <span>Contraseña</span>
                        <input type="password" name="contraseña_cliente">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="">Recordar contraseña</label>
                    </div>
                    <div class="inputBx">
                  
                        <input type="submit" value="Ingresar" name="">
                    </div>
                    <div class="inputBx">
                        <p>¿No tienes una cuenta?<a href="#" id="open">Inscribirse</a></p>
                    </div>
                </form>
                <h3>Iniciar con redes sociales</h3>
                <ul class="sociales">
                    <li>
                        <a href="https://www.facebook.com/share/ctLabiRs8VnH2tCH/?mibextid=qi20mg"><ion-icon name="logo-facebook"></ion-icon></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/loracafe.ica?igsh=bGkwN3locXhpMWZw"><ion-icon name="logo-instagram"></ion-icon></a>
                    </li>
                    
                </ul>
            </div>

             <!-- Modal container -->
            <div class="modal-container" id="modal_container">
                <div class="contentBx">
                    <span id="close_modal" class="close-btn">&times;</span>
                    
          
                     <div class="container mt-5">
                     <h2 >Formulario de Registro</h2>
                     <form action="#" method="POST">
                         <div class="inputBx">
                             <label for="nombre" class="form-label">Nombre</label>
                             <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
                         </div>
                         <div class="inputBx">
                             <label for="apellido" class="form-label">Apellido</label>
                             <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" required>
                         </div>
                         
                         <div class="inputBx">
                             <label for="documento" class="form-label">Documento de Identidad</label>
                             <input type="text" class="form-control" id="documento" name="documento"  placeholder="documento" required>
                         </div>
                         <div class="inputBx">
                             <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                             <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="fecha_nacimiento" required>
                         </div>
                         <div class="inputBx">
                             <label for="telefono" class="form-label">Teléfono</label>
                             <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="telefono" required>
                         </div>
                         <div class="inputBx">
                             <label for="correo" class="form-label">Correo Electrónico</label>
                             <input type="email" class="form-control" id="correo" name="correo" placeholder="correo" required>
                         </div>
                         <div class="inputBx">
                             <label for="contrasena" class="form-label">Contraseña</label>
                             <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="contrasena" required>
                         </div>
                         <button type="inputBx" class="btn btn-primary" name="registro">Registrar</button>
           </form>
           
           </div>
           </div>
       </div>
   </div>
    
   
   <style>
    /* Estilos para la ventana modal */
    .modal-container {
        display: none; /* Inicialmente oculto */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1000;
        color:"Black";
    
    }
    
    .modal {
        background: white;
        padding: 20px;
        border-radius: 10px;
        width: 400px; /* Puedes ajustar el ancho */
        max-width: 90%; /* Asegura que no sea más grande que el 90% del viewport */
        position: relative;
        margin: auto; /* Esto asegura que se mantenga centrado */
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 25px;
        cursor: pointer;
    }
</style>
   <script>
    const openBtn = document.getElementById("open");
    const modalContainer = document.getElementById("modal_container");
    const closeModal = document.getElementById("close_modal");

    // Mostrar el modal cuando se hace clic en "Inscribirse"
    openBtn.addEventListener("click", () => {
        modalContainer.style.display = "block";
    });

    // Cerrar el modal cuando se hace clic en "X"
    closeModal.addEventListener("click", () => {
        modalContainer.style.display = "none";
    });

    // Cerrar el modal cuando el usuario hace clic fuera del modal
    window.addEventListener("click", (e) => {
        if (e.target === modalContainer) {
            modalContainer.style.display = "none";
        }
    });
</script>
        </section>
        
        <?php include '../../Capa_Dato/Controladores/Registro/registro_cliente.php'; ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



