<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../Capa_Cliente/Estilos/style.css">
    <link rel="icon" href="../Img/imagenes/logoredondo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
     
    <header >
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
                            <li><a href="Club.html"><i class="fas fa-user-friends"></i> Club</a></li>
                            <?php
                    session_start();
                    if (isset($_SESSION['nombre_usuario'])) {
                        // Si el usuario está logueado, muestra su nombre y el enlace de "Cerrar Sesión"
                        echo '<li><a href="perfil.html"><i class="fas fa-user"></i> ' . htmlspecialchars($_SESSION['nombre_usuario']) . '</a></li>';
                        echo '<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>';
                    } else {
                        // Si el usuario no está logueado, muestra el enlace "Regístrate"
                        echo '<li><a href="login.php"><i class="fa-sharp fa-solid fa-user-plus"></i> Regístrate</a></li>';
                    }
                    ?>
                        </ul>
                    </div>
                    <img class="logo-2" src="../Img/imagenes/logoredondo.png" alt="">
                    <div class="menu-2">
                        <ul>
                            <li><a href="#"><i class="fas fa-clock"></i> Horario</a></li>
                          
                        </ul>
                     
                        <div class="socials">
                            <a href="https://www.facebook.com/restaurantdacari.ica">
                                 <div class="social">
                                    <img src="../Img/images/s1.svg" alt="">
                                </div>
                            </a>
                            <a href="#">
                                <div class="social">
                                    <img src="../Img/images/s2.svg" alt="">
                                </div>
                            </a>
                            <a href="https://www.instagram.com/d__acari/?hl=es">
                                <div class="social">
                                    <img src="../Img/images/s3.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </nav>
             </div>

             <div class="header-content container">

                <div class="swiper mySwiper-1">
                    <div class="swiper-wrapper">

                          <div class="swiper-slide">
                               <div class="slider">
                                    <div class="slider-txt">
                                        <h1>Lomo Saltado</h1>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                             Sapiente aliquid error dolore ad aliquam! Facere itaque 
                                             perferendis excepturi eos. Assumenda eum vitae unde 
                                             laboriosam, saepe in culpa aut molestias reiciendis.
                                        </p>
                                        <div class="botones">
                                            <a href="#" class="btn-1">Comprar</a>
                                            <a href="#" class="btn-1">Menu</a>
                                        </div>

                                    </div>
                                    <div class="slider-img">
                                        <img src="../Img/images/Lomo-Saltado.png" alt="">
                                    </div>
                               </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="slider">
                                 <div class="slider-txt">
                                     <h1>Ceviche</h1>
                                     <p>
                                         Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                          Sapiente aliquid error dolore ad aliquam! Facere itaque 
                                          perferendis excepturi eos. Assumenda eum vitae unde 
                                          laboriosam, saepe in culpa aut molestias reiciendis.
                                     </p>
                                     <div class="botones">
                                         <a href="#" class="btn-1">Comprar</a>
                                         <a href="#" class="btn-1">Menu</a>
                                     </div>

                                 </div>
                                 <div class="slider-img">
                                     <img src="../Img/images/ceviche.png" alt="">
                                 </div>
                            </div>
                       </div>
                       <div class="swiper-slide">
                        <div class="slider">
                             <div class="slider-txt">
                                 <h1>Alitas BBQ</h1>
                                 <p>
                                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                      Sapiente aliquid error dolore ad aliquam! Facere itaque 
                                      perferendis excepturi eos. Assumenda eum vitae unde 
                                      laboriosam, saepe in culpa aut molestias reiciendis.
                                 </p>
                                 <div class="botones">
                                     <a href="#" class="btn-1">Comprar</a>
                                     <a href="#" class="btn-1">Menu</a>
                                 </div>

                             </div>
                             <div class="slider-img">
                                 <img src="../Img/images/alitasbbq.png" alt="">
                             </div>
                        </div>
                        </div>


                          
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>


                </div>
             </div>
    </header>


    <main class="products">
        <div class="tabs container">

            <input type="radio" name="tabs" id="tab1" checked="checked" class="tabInput" value="1">
            <label for="tab1">Criollos</label>
            <div class="tab">
                <div class="swiper mySwiper-2" id="swiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product">
                              <div class="product-img">
                                   <h4>Nuevo</h4>
                                   <img src="../Img/images/Lomo-Saltado.png" alt="">                                 
                              </div>
                              <div class="product-txt">
                                  <h4>Lomo Saltado</h4>
                                  <p>calidad Premiun</p>
                                  <span class="price">$80.00</span>
                              </div>                           
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                              <div class="product-img">
                                   <h4>Nuevo</h4>
                                   <img src="../Img/images/arrozconpollo.webp" alt="">         
                              </div>
                              <div class="product-txt">
                                  <h4>Arroz con Pollo</h4>
                                  <p>calidad Premiun</p>
                                  <span class="price">$80.00</span>
                              </div>      
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                              <div class="product-img">
                                   <h4>Nuevo</h4>
                                   <img src="../Img/images/carapulcra.png" alt="">
                              </div>
                              <div class="product-txt">
                                  <h4>Carapulcra</h4>
                                  <p>calidad Premiun</p>
                                  <span class="price">$80.00</span>
                              </div>                           
                            </div>
                        </div>
                    </div> 
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        
            <input type="radio" name="tabs" id="tab2" checked="checked" class="tabInput" value="2">
            <label for="tab2">Marinos</label>
            <div class="tab">
                <div class="swiper mySwiper-2" id="swiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product">
                              <div class="product-img">
                                   <h4>Nuevo</h4>
                                   <img src="../Img/images/ceviche.png" alt="">                                 
                              </div>
                              <div class="product-txt">
                                  <h4>Producto</h4>
                                  <p>calidad Premiun</p>
                                  <span class="price">$80.00</span>
                              </div>                           
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                              <div class="product-img">
                                   <h4>Nuevo</h4>
                                   <img src="../Img/images/jalea.jpeg" alt="">         
                              </div>
                              <div class="product-txt">
                                  <h4>Jalea</h4>
                                  <p>calidad Premiun</p>
                                  <span class="price">$80.00</span>
                              </div>      
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                              <div class="product-img">
                                   <h4>Nuevo</h4>
                                   <img src="../Img/images/chicharron-mixto.png" alt="">
                              </div>
                              <div class="product-txt">
                                  <h4>Chicharon Marino</h4>
                                  <p>calidad Premiun</p>
                                  <span class="price">$80.00</span>
                              </div>                           
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                
                </div>
            </div>
            

            <input type="radio" name="tabs" id="tab3" checked="checked" class="tabInput" value="3">
            <label for="tab3">Variedad</label>
            <div class="tab">
                <div class="swiper mySwiper-3" id="swiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product">
                              <div class="product-img">
                                   <h4>Nuevo</h4>
                                   <img src="../Img/images/food8.png" alt="">                                 
                              </div>
                              <div class="product-txt">
                                  <h4>Producto</h4>
                                  <p>calidad Premiun</p>
                                  <span class="price">$80.00</span>
                              </div>                           
                            </div>     
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                              <div class="product-img">
                                   <h4>Nuevo</h4>
                                   <img src="../Img/images/food7.png" alt="">                                 
                              </div>
                              <div class="product-txt">
                                  <h4>hol</h4>
                                  <p>calidad Premiun</p>
                                  <span class="price">$80.00</span>
                              </div>                           
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                              <div class="product-img">
                                   <h4>Nuevo</h4>
                                   <img src="../Img/images/food9.png" alt="">
                              </div>
                              <div class="product-txt">
                                  <h4>Producto</h4>
                                  <p>calidad Premiun</p>
                                  <span class="price">$80.00</span>
                              </div>                           
                            </div>
                        </div>
                    </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                   </div>
                  </div>
                
                
        </div>
    </main>

    <section class="info container">

        <div class="info-img">
            <img src="../Img/images/causa.png" alt="">

        </div>

        <div class="info-txt">
            <h2>Informacion:</h2>
            <p>
                 
                Voluptate perferendis fuga inventore dignissimos animi, 
                id est facilis, natus illo, perspiciatis tenetur autem rerum 
                assumenda excepturi voluptatem illum dolorum. Sequi, doloremque.
            </p>
            <a href="#" class="btn-2">Mas informacion</a>
        </div>
        
    </section>

    <section class="horario">
        <div class="horario-info container">
            <h2>Horario</h2>
            <div class="horario-txt">
                <div class="txt">
                    <h4>Direccion</h4>
                    <p>
                        Lorem ipsum dolor sit amet, 
                    </p>
                    <p>
                         consectetur adipisicing elit.
                    </p>
                </div>
                <div class="txt">
                    <h4>Horario</h4>
                    <p>
                        Luner a Viernes :9 am - 8 pm 
                    </p>
                    <p>
                         Sabado a Domingo  : 11 am - 7 pm
                    </p>
                </div>
                <div class="txt">
                    <h4>Telefono</h4>
                    <p>
                        967433742
                    </p>
                    <p>
                         975325551
                    </p>
                </div>
                <div class="txt">
                    <h4>Redes Sociales</h4>
                    <div class="socials">
                        <a href="https://www.facebook.com/restaurantdacari.ica/photos">
                            <div class="social">
                                <img src="../Img/images/s1.svg" alt="">
                            </div>
                        </a>
                       
                        <a href="https://www.instagram.com/d__acari/?hl=es">
                            <div class="social">
                                <img src="../Img/images/s3.svg" alt="">
                            </div>
                        </a>
                    </div>
    
                </div>
               </div>
            </div>
    </section>



    <section class="">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.5072075021576!2d-75.75263112531394!3d-14.047199786376188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110e36ff0bab47f%3A0x89eb2f068f7726a8!2sRestaurant%20D&#39;acari!5e0!3m2!1ses-419!2spe!4v1729533139227!5m2!1ses-419!2spe" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
    </section>

    <footer class="footer container">

        <img class="logo-2" src="../Img/imagenes/logoredondo.png" alt="">
        <div class="links">
            <h4>Sitios</h4>
            <ul>
                <li><a href="index.html"> Inicio</a></li>
                <li><a href="sobrenosotros.html"> Sobre Nosotros</a></li>
                <li><a href="Menu.html">  Productos</a></li>
                <li><a href="#"> Reservas</a></li>
                <li><a href="Club.html"></i> Club</a></li>
                <li><a href="login2.html"></i> Registrate</i></a></li>
            </ul>

        </div>
        <div class="links">
            <h4>Platos a la Carta</h4>
            <ul>
                <li><a href="#">Criollos</a></li>
                <li><a href="#">Marinos</a></li>
                <li><a href="#">Mixtos</a></li>
                <li><a href="#">Hamburguesas</a></li>


            </ul>

        </div>
        <div class="links">
            <h4>Sitios web</h4>
            <ul>
                <li><a href="#">facebook</a></li>
                <li><a href="#">Whats App</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twiter</a></li>


            </ul>

        </div>
        <div class="links">
            <h4>Redes Sociales</h4>
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
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../../Capa_Negocio/script.js"></script>
</body>
</html>