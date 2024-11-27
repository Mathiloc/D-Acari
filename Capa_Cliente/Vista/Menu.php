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
<h1>1</h1>
    <h1></h1>
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

      <div class="section-center row">
        <!--Menu-->
        <div class="menu-items col-lg-6 col-sm-12">
          <img src=""
            alt="Sopa seca con carapulcra" class="photo">
          <div class="menu-info">
            <div class="menu-title">
              <h4>Sopa seca con carapulcra</h4>
              <h4 class="price">S/13.00</h4>
            </div>
            <div class="menu-text">
              Plato icónico de Ica que combina fideos sazonados con un guiso de papas secas y carne, aderezado con maní
              y ajíes.
            </div>
          </div>
        </div>

        <!--Carta-->
        <div class="menu-items col-lg-6 col-sm-12">
          <img
            src="https://i.ytimg.com/vi/r2oGrH__hT0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBtRrQkJyQYxpAJD7aR3yN2BhJ0Cw"
            alt="Lomo saltado" class="photo">
          <div class="menu-info">
            <div class="menu-title">
              <h4>Lomo saltado</h4>
              <h4 class="price">S/25.00</h4>
            </div>
            <div class="menu-text">Combina tiras de carne de res salteadas a fuego alto con cebolla, tomate y ají.
              Mezclado con papas fritas y acompañado de arroz.
            </div>
          </div>
        </div>
        
        <!--Marinos-->
        <div class="menu-items col-lg-6 col-sm-12">
          <img src="https://cdn0.recetasgratis.net/es/posts/7/4/1/ceviche_peruano_18147_600.jpg"
            alt="Ceviche carretillero" class="photo">
          <div class="menu-info">
            <div class="menu-title">
              <h4>Ceviche carretillero</h4>
              <h4 class="price">S/18.00</h4>
            </div>
            <div class="menu-text">Pescado fresco marinado en jugo de limón, ají, cebolla y cilantro. Acompañado de
              cancha, yuca o camote, y chicharrón de pescado.
            </div>
          </div>
        </div>
        <div class="menu-items col-lg-6 col-sm-12">
          <img src="https://aeronoticias.com.pe/noticiero/wp-content/uploads/2023/08/trucha-frita.jpg"
            alt="Trucha frita con yucas doradas" class="photo">
          <div class="menu-info">
            <div class="menu-title">
              <h4>Trucha frita con yucas doradas</h4>
              <h4 class="price">S/25.00</h4>
            </div>
            <div class="menu-text">Trucha fresca frita hasta quedar crujiente, acompañada de yucas doradas y crujientes.
              Acompañado con ensalada o arroz.
            </div>
          </div>
        </div>
        
        <!--Bebidas-->
        <div class="menu-items col-lg-6 col-sm-12">
          <img
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgH4FjFVxEJBu5LH4X7-L-cf-x4yxt81D9U_mSW3e-dQoJ9KyTMiqAaf0wR84MGKqZFtcu0ywz5YsLTBZOnJ4jSngHmwMfoIZbtvaNa7a3yqw1Kj_h1L-29NE8FDhxiYnENg_bvUCmI3r0/s1600/P9250004.JPG"
            alt="Pisco Sour" class="photo">
          <div class="menu-info">
            <div class="menu-title">
              <h4>Pisco sour</h4>
              <h4 class="price">S/25.00</h4>
            </div>
            <div class="menu-text">Disfruta de nuestro clásico Pisco sour , preparado con pisco, jugo de limón, jarabe
              de goma y clara de huevo.
            </div>
          </div>
        </div>
        
        

      </div>

    </section>
  </div>
  <script src="../../Capa_Negocio/Menu.js"></script>
  <script src="../header/header.js"></script>
</body>

</html>