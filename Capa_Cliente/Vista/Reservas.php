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
                    <img src="/img-reservas/zona-exterior-1.jpeg" alt="Slider Exteior 1">
                </div>
                <div class="item-slide">
                    <img src="/img-reservas/zona-exterior-2.jpeg" alt="Slider Exteior 2">
                </div>
                <div class="item-slide">
                    <img src="/img-reservas/zona-exterior-3.jpeg" alt="Slider Exteior 3">
                </div>
            </div>


            <div class="pagination" id="paginationControls" style="display: none;">
                <label class="pagination-item" for="exterior1">
                    <img src="/img-reservas/zona-exterior-1.jpeg" alt="Control Slider 1">
                </label>
                <label class="pagination-item" for="exterior2">
                    <img src="/img-reservas/zona-exterior-2.jpeg" alt="Control Slider 2">
                </label>
                <label class="pagination-item" for="exterior3">
                    <img src="/img-reservas/zona-exterior-3.jpeg" alt="Control Slider 3">
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
                  <img src="/img-reservas/zona-interior-1.jpeg" alt="Slider interior 1">
              </div>
              <div class="item-slide">
                  <img src="/img-reservas/zona-interior-2.jpeg" alt="Slider interior 2">
              </div>
              <div class="item-slide">
                  <img src="/img-reservas/zona-interior-3.jpeg" alt="Slider interior 3">
              </div>
          </div>


          <div class="pagination" id="paginationControls" style="display: none;">
              <label class="pagination-item" for="interior 1">
                  <img src="/img-reservas/zona-interior-1.jpeg" alt="Control Slider 1">
              </label>
              <label class="pagination-item" for="interior 2">
                  <img src="/img-reservas/zona-interior-2.jpeg" alt="Control Slider 2">
              </label>
              <label class="pagination-item" for="interior 3">
                  <img src="/img-reservas/zona-interior-3.jpeg" alt="Control Slider 3">
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
                <img src="/img-reservas/zona-trasera-1.jpeg" alt="Slider trasera 1">
            </div>
            <div class="item-slide">
                <img src="/img-reservas/zona-trasera-2.jpeg" alt="Slider trasera 2">
            </div>
            <div class="item-slide">
                <img src="/img-reservas/zona-trasera-3.jpeg" alt="Slider trasera 3">
            </div>
        </div>


        <div class="pagination" id="paginationControls" style="display: none;">
            <label class="pagination-item" for="trasera 1">
                <img src="/img-reservas/zona-trasera-1.jpeg" alt="Control Slider 1">
            </label>
            <label class="pagination-item" for="trasera 2">
                <img src="/img-reservas/zona-trasera-2.jpeg" alt="Control Slider 2">
            </label>
            <label class="pagination-item" for="trasera 3">
                <img src="/img-reservas/zona-trasera-3.jpeg" alt="Control Slider 3">
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
              <form action="#">
                <h2 class="heading heading-yellow">Reservación</h2>
      
                <div class="form-field">
                  <p>Nombres:</p>
                  <input type="text" placeholder="Tus nombres">
                </div>
                <div class="form-field">
                  <p>Correo electronico:</p>
                  <input type="email" placeholder="Tu correo electronico">
                </div>
                <div class="form-field">
                  <p>Fecha:</p>
                  <input type="date">
                </div>
                <div class="form-field">
                  <p>Hora:</p>
                  <input type="time">
                </div>
                <div class="form-field">
                  <p>¿Cuántas personas?</p>
                  <select name="select" id="#">
                    <option value="1">1 persona</option>
                    <option value="2">2 personas</option>
                    <option value="3">3 personas</option>
                    <option value="4">4 personas</option>
                    <option value="5">5 personas</option>
                    <option value="5+">5+ personas</option>
                  </select>
                </div>
                <div class="form-field">
                  <p>¿En que zona deseas reservar?</p>
                  <select name="select" id="#">
                    <option value="zona exterior">Zona Exterior</option>
                    <option value="zona interior">Zona Interior</option>
                    <option value="zona trasera">Zona Trasera</option>
                  
                  </select>
                </div>
      
                <button class="btn-form">Reservar</button>
              </form>
          </div>
        </div>
      </div>	
      
        
      
    
    <script src="/Reservas.js"></script>
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
