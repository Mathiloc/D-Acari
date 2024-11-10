const header = document.querySelector("header");
const footer = document.querySelector("footer");
header.innerHTML = `<nav>
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
            <li><a href="../../Capa_Cliente/Vista/Index.html">Inicio</a></li>
            <li><a href="../../Capa_Cliente/Vista/sobrenosotros.html">Sobre Nosotros</a></li>
            <li><a href="../../Capa_Cliente/Vista/Menu.html">Productos</a></li>
            <li><a href="#">Reservas</a></li>
            <li><a href="../../Capa_Cliente/Vista/PLatillos.html">Club</a></li>
            <li><a href="/../Capa_Cliente/Vista/login2.html">Registrate</a></li>
            <li><button class="login-button" href="#">Login</button></li>
            <li><button class="join-button" href="#">car</button></li>
        </ul>
    </nav>

<script src="ban.js"></script>
`;

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
const navbar = document.querySelector("nav");

// Función que detecta el scroll y aplica la clase
window.addEventListener("scroll", () => {
    if (window.scrollY === 0) {
        navbar.classList.add("transparent");
    } else {
        navbar.classList.remove("transparent");
    }
});

// Inicializa el estado del navbar como transparente
navbar.classList.add("transparent");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});