<?php
session_start();
?>
    <nav>
        <link rel="stylesheet" href="../Estilos/header.css">

        <div class="logo">
            <img src="../Img/imagenes/logoredondo.png" alt="Logo Image">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="../../Capa_Cliente/Vista/Index.php">Inicio</a></li>
            <li><a href="../../Capa_Cliente/Vista/sobrenosotros.php">Sobre Nosotros</a></li>
            <li><a href="../../Capa_Cliente/Vista/Menu.php">Productos</a></li>
            <li><a href="#">Reservas</a></li>
            <li><a href="../../Capa_Cliente/Vista/PLatillos.php">Club</a></li>
            <?php if (isset($_SESSION['nombre_cliente'])): ?>
            <!-- Si el usuario está logueado, mostrar su nombre y opción para cerrar sesión -->
            <li>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre_cliente']); ?></li>
            <li><a href="../../Capa_Cliente/Vista/Logout.php">Cerrar sesión</a></li>
        <?php else: ?>
            <!-- Si el usuario no está logueado, mostrar enlaces de registro e inicio de sesión -->
            <li><a href="../../Capa_Cliente/Vista/Login.php">Regístrate</a></li>
            <li><a href="../../Capa_Cliente/Vista/Login.php" class="login-button">Login</a></li>
        <?php endif; ?>
            <li><button class="join-button" href="#">car</button></li>
        </ul>
    </nav>



    