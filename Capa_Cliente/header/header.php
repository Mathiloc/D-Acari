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
            <?php
        
        if (isset($_SESSION['usuario'])) {
            // Si el usuario está logueado, mostrar su nombre
            echo "<li>Bienvenido, " . $_SESSION['usuario']['nombre_cliente'] . "</li>";
            echo '<li><a href="logout.php">Cerrar sesión</a></li>';
        } else {
            // Si el usuario no está logueado, mostrar el enlace de login
            echo '<li><a href="../../Capa_Cliente/Vista/Login.php">Registrate</a></li>';
            echo '<li><button class="login-button" href="#">Login</button></li>';
        }
        ?>
            <li><button class="join-button" href="#">car</button></li>
        </ul>
    </nav>



    