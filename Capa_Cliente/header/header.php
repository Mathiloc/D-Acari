<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
 <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/066cf224a7.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../Estilos/header.css">
</head>
<body>
    <script>
        const toggle=()=>{
            document.getElementById('nav').classList.toggle('navactive');
        };
    </script>
    <header>
        <div class="brand">
            <!-- <span class="fab fa-github"></span> -->
            <img src="../Img/imagenes/logoredondo.png" alt="Logo D'Acari" class="logo" />
            <!-- Aquí mostramos "Hola, Nombre" si el usuario ha iniciado sesión -->
        <h1>
            <?php
            if (isset($_SESSION['nombre_cliente'])) {
                echo "Hola, " . $_SESSION['nombre_cliente']; // Muestra el nombre del usuario
            } else {
                echo "D'Acari"; // Muestra "D'Acari" si el usuario no ha iniciado sesión
            }
            ?>
        </h1>
        
        </div>
        <span class="fas fa-bars" id="menuIcon" onclick="toggle()"></span>
        <div class="navbar" id="nav">
        <!-- <div class="searchBox">
            <input type="text" placeholder="Search Here..."/>
            <span class="fas fa-search" id="searchIcon"></span> 
        </div> -->
        <ul>
            <li>
                <span class="fas fa-home" id="headIcon"></span>
                <a href="../../Capa_Cliente/Vista/Index.php" >Inicio</a>
            </li>
            <li>
                <span class="fas fa-user-circle" id="headIcon"></span>
                <a href="../../Capa_Cliente/Vista/sobrenosotros.php">Nosotros</a>
            </li>
            <li>
                <span class="fa-solid fa-shop" id="headIcon"></span>
                <a href="../../Capa_Cliente/Vista/Menu.php">Productos</a>
            </li>
            <li>
                <span class="fa-solid fa-pen-to-square" id="headIcon"></span>
                <a href="../../Capa_Cliente/Vista/Reservas.php">Reservas</a>
            </li>
            <li>
                <span class="fa-solid fa-coins" id="headIcon"></span>
                <a href="../../Capa_Cliente/Vista/PLatillos.php">Club</a>
            </li>
          
            <?php if (isset($_SESSION['nombre_cliente'])): ?>
                <!-- Mostrar el nombre del cliente si está logueado -->
                <!-- <li>
                    <span class="fa-solid fa-user" id="headIcon"></span>
                    <a href="#">Hola, <?php echo $_SESSION['nombre_cliente']; ?></a>
                </li> -->
                <li>
                    <span class="fa-solid fa-sign-out-alt" id="headIcon"></span>
                    <a href="../../Capa_Cliente/Vista/logout.php">Salir</a>
                </li>
            <?php else: ?>
                <!-- Si no está logueado, mostrar opción para ingresar -->
                <li>
                    <span class="fa-solid fa-user" id="headIcon"></span>
                    <a href="../../Capa_Cliente/Vista/Login.php">Ingresar</a>
                </li>
            <?php endif; ?>
            <li>
                    <span class="fa-solid fa-cart-shopping" id="headIcon"></span>
                    <h1><a class="nav-link" href="carrito.php">
                    (<?php 
                    $cantidadTotal = 0;
                    if (!empty($_SESSION['CARRITO'])) {
                        foreach ($_SESSION['CARRITO'] as $producto) {
                            $cantidadTotal += $producto['cantidad'];
                        }
                    }
                    echo $cantidadTotal;
                    ?>)</a></h1>
            </li>
            

        </ul>
        
    </header>
    
</body>

</html>

    <script src="header.js"></script>

    