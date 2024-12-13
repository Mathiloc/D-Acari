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
<?php include '../header/header.php'; ?>
<body>

             <div class="header-content container">

                <div class="swiper mySwiper-1">
                    <div class="swiper-wrapper">

                          <div class="swiper-slide">
                               <div class="slider">
                                    <div class="slider-txt">
                                        <h1>Lomo Saltado</h1>
                                        <p>
                                        Combina tiras de carne de res salteadas a fuego alto con cebolla, tomate y ají. Mezclado con papas fritas y acompañado de arroz
                                        </p>
                                        <div class="botones">
                                            <a href="#" class="btn-1">S/. 16.00</a>
                                            <a href="../../Capa_Cliente//Vista/Menu.php" class="btn-1">Menu</a>
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
                                     Diferentes tipos de mariscos, como pescado, calamares, y camarones, marinados en jugo de limón, junto con cebolla, ají y cilantro.
                                     </p>
                                     <div class="botones">
                                         <a href="#" class="btn-1" >S/. 25.00</a>
                                         <a href="../../Capa_Cliente//Vista/Menu.php" class="btn-1">Menu</a>
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
                                 Alitas de pollo cocinadas y cubiertas con salsa barbacoa, que les da un sabor dulce y ahumado.
                                 </p>
                                 <div class="botones">
                                     <a href="#" class="btn-1">S/. 16.00</a>
                                     <a href="../../Capa_Cliente//Vista/Menu.php" class="btn-1">Menu</a>
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
            "En nuestro restaurante, todos los productos son preparados con tradición iqueña, combinando recetas ancestrales, ingredientes frescos y el auténtico sabor que caracteriza a nuestra tierra."

Esta versión resalta tanto la tradición como la calidad de los ingredientes, ideal para transmitir la esencia de tu restaurante. ¿Qué te parece?
            </p>
            <a href="../Vista/sobrenosotros.php" class="btn-2">Mas informacion</a>
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
                        Luner a Viernes :7 am - 10 pm 
                    </p>
                    <p>
                         Sabado a Domingo  : 9 am - 10 pm
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

    
       


    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../../Capa_Negocio/script.js"></script>
</body>
</html>