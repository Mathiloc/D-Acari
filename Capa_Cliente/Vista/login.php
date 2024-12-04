<?php
session_start();
require '../../Capa_Dato/Conexion/conexion.php';
?>
<?php include '../../Capa_Dato/Controladores/Inicio_Sesion/ingreso_cliente.php'?>
<?php include '../../Capa_Dato/Controladores/Registro/registro_cliente.php'; ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://kit.fontawesome.com/eb344c5846.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../Estilos/EstiloLogin.css">
</head>
<body>
   <?php include '../header/header.php'; ?>
   <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // Aquí va tu código de verificación de inicio de sesión
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verificación del correo y la contraseña en la base de datos
        // Si la verificación es exitosa:
        $_SESSION['nombre_cliente'] = $nombre_del_cliente; // Suponiendo que ya recuperas el nombre del cliente
        header("Location: ../../Capa_Cliente/Vista/Index.php"); // Redirige al inicio
        exit();
    }
    ?>
    <div class="container">
        <div class="form-box login">
            <form action="Login.php" method="POST">
                <input type="hidden" name="action" value="login">
                <h1>Iniciar sesión</h1>
                <div class="input-box">
                    <input type="text" name="correo_cliente" placeholder="Correo" required>
                    <i class="fa-solid fa-user"></i>
                </div> 
                <div class="input-box">
                    <input type="password" name="contraseña_cliente" placeholder="Contraseña" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="forgot-link">
                    <a href="#">¿Has olvidado la contraseña?</a>
                </div>

                <button type="submit" value="Ingresar" class="btn">Iniciar sesión</button>
                
                <p>O registrarse con</p>
                <div class="social-icons">
                    <a href="#" ><i class="fa-brands fa-google"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-apple"></i></a>
                </div>
            </form>
        </div>


        <div class="form-box register">
            <form action="login.php" method="POST">
                <input type="hidden" name="action" value="register">
                <h1>Regístrate</h1>
                <div class="input-box">
                    <input type="text" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="number" id="documento" name="documento" placeholder="Documento" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-box">
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-box">
                    <input type="number" id="telefono" name="telefono" placeholder="Telefono" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-box">
                    <input type="email" id="correo" name="correo" placeholder="Correo" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-box">
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <button type="submit" class="btn" name="registro">Registrarse</button>
                <p>O iniciar sesión con</p>
                <div class="social-icons">
                    <a href="#" ><i class="fa-brands fa-google"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-apple"></i></a>
                </div>
            </form>
        </div>
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>¡Hola, bienvenido!</h1>
                <p>¿No tienes una cuenta?</p>
                <button class="btn register-btn">Registrarse</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>¡Bienvenido de nuevo!</h1>
                <p>¿Ya tienes una cuenta?</p>
                <button class="btn login-btn">Iniciar sesión</button>
            </div>
        </div>
      
    </div>   

</body>
<script src="../../Capa_Negocio/login.js"></script>
</html>