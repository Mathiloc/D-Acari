<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Platillos</title>
    <link rel="stylesheet" href="../Estilos/Menu.css">
    <link rel="icon" href="../Img/imagenes/logoredondo.png">
</head>
<?php include '../header/header.php'; ?>
<body>
    <div class="container">
        <h2>Platillos D'Acari</h2>
    </div>
    <main>
        <header>
            <ul class="menu-categories">
                <li data-filter="Todos" class="active"><a href="#">Todos</a></li>
                <li data-filter="Menu"><a href="#">Menú</a></li>
                <li data-filter="PlatosCarta"><a href="#">Platos a la carta</a></li>
                <li data-filter="Marinos"><a href="#">Marinos</a></li>
                <li data-filter="Bebidas"><a href="#">Bebidas</a></li>
            </ul>
        </header>
        <!--Menu-->
        <div class="menu-items">
            <div class="item" data-category="Menu">
                <img src="../Img/img/sopa-seca.jpg" alt="Sopa seca con carapulcra">
                <h3>Sopa seca con carapulcra</h3>
                <p>Plato icónico de Ica que combina fideos sazonados con un guiso de papas secas y carne, aderezado con maní y ajíes.</p>
                <p>PRECIO: S/ 13.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/pollo-cerveza.jpg" alt="Pollo a la cerveza">
                <h3>Pollo a la cerveza</h3>
                <p>Es un guiso en el que el pollo se cocina con cerveza, lo que le da un sabor suave y aromático.</p>
                <p>PRECIO: S/ 13.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/higado-plancha.jpg" alt="Higado a la plancha">
                <h3>Hígado a la plancha</h3>
                <p>Hígado cocinado en una plancha con aceite, sazonado con sal, pimienta y ajo. Acompañado con papas, ensalada o arroz.</p>
                <p>PRECIO: S/ 16.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/spaghetti-bolognesa.jpg" alt="Spaghetti a la bolognesa">
                <h3>Spaghetti a la bolognesa</h3>
                <p>Servidos con una salsa a base de carne molida, tomate, cebolla, zanahoria, ajo y vino.</p>
                <p>PRECIO: S/ 16.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/parrilla-chancho.jpeg" alt="Parrilla de chancho">
                <h3>Parrilla de chancho</h3>
                <p>Piezas de chancho a la parrilla, sazonadas con especias. Asado hasta que esté dorado y jugoso, servido con guarniciones como papas, choclo y salsas criollas.</p>
                <p>PRECIO: S/ 16.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/chaufa.jpg" alt="Sopa seca con carapulcra">
                <h3>Chaufa de pollo</h3>
                <p>Arroz frito mezclado con trozos de pollo, huevo, cebolla china y salsa de soya.</p>
                <p>PRECIO: S/ 16.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/Alitas-bbq.jpg" alt="Alitas a la BBQ">
                <h3>Alitas a la BBQ</h3>
                <p>Alitas de pollo cocinadas y cubiertas con salsa barbacoa, que les da un sabor dulce y ahumado.</p>
                <p>PRECIO: S/ 16.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/macarrones.jpg" alt="Macarrones al pesto con churrasco">
                <h3>Macarrones al pesto con churrasco</h3>
                <p>Macarrones bañados en salsa de albahaca, ajo, queso y nueces o piñones, con un jugoso churrasco a la parrilla.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/parrila-res.jpg" alt="Parrilla de res con papas fritas">
                <h3>Parrilla de res con papas fritas</h3>
                <p>Carne de res asados a la parrilla, servidos con papas fritas crujientes. Un plato sabroso y sustancioso.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/pollo-saltado.jpg" alt="Pollo saltado">
                <h3>Pollo saltado</h3>
                <p>Trozos de pollo salteados con cebolla, tomate y ají, todo cocinado a fuego alto. Servido con arroz y papas fritas.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/chaufa-bbq.jpg" alt="Chaufa con alitas a la BBQ">
                <h3>Chaufa con alitas a la BBQ</h3>
                <p>Arroz frito con trozos de pollo, cebolla china y salsa de soya, acompañado de alitas de pollo glaseadas con una salsa barbacoa dulce y ahumada.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/tallarin-saltado.jpg" alt="Tallarin saltado de pollo">
                <h3>Tallarin saltado de pollo</h3>
                <p>Fideos de tallarín salteados con trozos de pollo, cebolla, tomate y ají, todo cocinado a fuego alto.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/pollo-plancha.jpg" alt="Filete de pollo a la plancha">
                <h3>Filete de pollo a la plancha</h3>
                <p>Filete de pollo cocido a la plancha, sazonado con sal y especias, acompañado de crujientes papas fritas.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/Costillas con yuca.jpg" alt="Costillar de res con yucas">
                <h3>Costillar de res con yucas</h3>
                <p>Se cocina el costillar de res a la parrilla o al horno, logrando una carne tierna y jugosa. Acompañado de yucas fritas o sancochadas.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Menu">
                <img src="../Img/img/churrasco-plancha.jpeg" alt="Churrasco a la plancha">
                <h3>Churrasco a la plancha</h3>
                <p>Res cocido en una plancha caliente. Sazonado con sal y pimienta, logrando una carne jugosa y dorada por fuera.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <!--Platos a la carta-->
            <div class="item" data-category="PlatosCarta">
                <img src="../Img/img/lomo-saltado.jpg" alt="Lomo saltado">
                <h3>Lomo saltado</h3>
                <p>Combina tiras de carne de res salteadas a fuego alto con cebolla, tomate y ají. Mezclado con papas fritas y acompañado de arroz.</p>
                <p>PRECIO: S/ 25.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="PlatosCarta">
                <img src="../Img/img/Milanesa-pollo.jpg" alt="Milanesa de pollo">
                <h3>Milanesa de pollo</h3>
                <p>Filete de pollo empanizado con pan rallado y frito hasta quedar dorado y crujiente. Acompañado con papas fritas, ensalada o arroz.</p>
                <p>PRECIO: S/ 24.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="PlatosCarta">
                <img src="../Img/img/fetuccini-huancaina.jpg" alt="Fetuccini a la huancaina con lomo">
                <h3>Fetuccini a la huancaina con lomo</h3>
                <p>Plato que combina fetuccini cubiertos con una cremosa salsa huancaína, hecha a base de ají amarillo, queso fresco y leche, acompañado de tiras de lomo de res jugoso.</p>
                <p>PRECIO: S/ 30.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="PlatosCarta">
                <img src="../Img/img/tallarines-verdes.jpg" alt="Tallarin verde con chuleta">
                <h3>Tallarin verde con chuleta</h3>
                <p>Fideos bañados en salsa de albahaca y espinaca, acompañada de una chuleta de cerdo a la plancha.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="PlatosCarta">
                <img src="../Img/img/tallarin-saltado-res.jpg" alt="Tallarin saltado de res">
                <h3>Tallarin saltado de res</h3>
                <p>Tallarín salteados a fuego alto con tiras de carne de res, cebolla, tomate y ají, todo aderezado con salsa de soya.</p>
                <p>PRECIO: S/ 24.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="PlatosCarta">
                <img src="../Img/img/lomo_saltado_a_lo_pobre.jpg" alt="Lomo saltado a lo pobre">
                <h3>Lomo saltado a lo pobre</h3>
                <p>Combina tiras de carne de res salteadas con cebolla, tomate y ají, acompañado de papas fritas, arroz, plátano frito y un huevo frito.</p>
                <p>PRECIO: S/ 28.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="PlatosCarta">
                <img src="../Img/img/tallarin-verde-bistec.png" alt="Tallarines verdes con bisteck apanado">
                <h3>Tallarines verdes con bisteck apanado</h3>
                <p>Pasta bañada en una salsa cremosa de albahaca y espinaca, con un bisteck empanizado y frito hasta quedar crujiente.</p>
                <p>PRECIO: S/ 30.00</p>
                <button>Comprar</button>
            </div>
            <!--Marinos-->
            <div class="item" data-category="Marinos">
                <img src="../Img/img/ceviche_carretillero.jpg" alt="Ceviche carretillero">
                <h3>Ceviche carretillero</h3>
                <p>Pescado fresco marinado en jugo de limón, ají, cebolla y cilantro. Acompañado de cancha, yuca o camote, y chicharrón de pescado.</p>
                <p>PRECIO: S/ 18.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/trucha-frita.jpg" alt="Trucha frita con yucas doradas">
                <h3>Trucha frita con yucas doradas</h3>
                <p>Trucha fresca frita hasta quedar crujiente, acompañada de yucas doradas y crujientes. Acompañado con ensalada o arroz.</p>
                <p>PRECIO: S/ 25.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/lenguado.jpg" alt="Lenguado frito al plato">
                <h3>Lenguado frito al plato</h3>
                <p>Filete de lenguado frito hasta dorarse, sazonado con sal y especias. Acompañado con papas fritas, arroz o ensalada.</p>
                <p>PRECIO: S/ 30.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/chupe-camarones.jpg" alt="Chupe de camarones">
                <h3>Chupe de camarones</h3>
                <p>Sopa cremosa y sustanciosa elaborada con camarones frescos, papas, choclo, queso y especias, todo cocido en un caldo sabroso.</p>
                <p>PRECIO: S/ 35.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/chicharron-pescado.jpg" alt="Chicharron de pescado">
                <h3>Chicharron de pescado</h3>
                <p>Trozos de pescado rebozados y fritos hasta que quedan dorados y crujientes. Acompañado con yuca o papas fritas.</p>
                <p>PRECIO: S/ 16.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/arroz-chaufa-de-mariscos.webp" alt="Chaufa marino">
                <h3>Chaufa marino</h3>
                <p>Arroz frito con mariscos como camarones, calamares y pescado, junto con cebolla china, huevo y salsa de soya.</p>
                <p>PRECIO: S/ 16.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/ceviche-mixto.jpg" alt="Ceviche mixto">
                <h3>Ceviche mixto</h3>
                <p>Diferentes tipos de mariscos, como pescado, calamares, y camarones, marinados en jugo de limón, junto con cebolla, ají y cilantro.</p>
                <p>PRECIO: S/ 25.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/ceviche-pescado.jpg" alt="Ceviche de pescado">
                <h3>Ceviche de pescado</h3>
                <p>Pescado fresco (como corvina o lenguado) marinado en jugo de limón, junto con cebolla roja, ají, cilantro y sal.</p>
                <p>PRECIO: S/ 20.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/duo(ceviche-chicharron).png" alt="Duo (Ceviche + Chicharron)">
                <h3>Duo (Ceviche + Chicharron)</h3>
                <p>Una combinación perfecta que une la frescura del ceviche con la textura crujiente del chicharrón.</p>
                <p>PRECIO: S/ 25.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/trio-marino.jpg" alt="Trio marino">
                <h3>Trio marino</h3>
                <p>Una irresistible combinación de ceviche fresco, crujiente chicharron de pescado y arroz de mariscos.</p>
                <p>PRECIO: S/ 35.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/arroz-mariscos.jpg" alt="Arroz con mariscos">
                <h3>Arroz con mariscos</h3>
                <p>Arroz sazonado y salteado con una variedad de mariscos frescos, como camarones, calamares y conchas, acompañado de un toque de aji y especias.</p>
                <p>PRECIO: S/ 28.00</p>
                <button>Comprar</button>
            </div>
            <div class="item" data-category="Marinos">
                <img src="../Img/img/ceviche-camarones.jpg" alt="Ceviche de camarones">
                <h3>Ceviche de camarones</h3>
                <p>Frescos camarones marinados en jugo de limón mezclados con cebolla, aji y cilantro.</p>
                <p>PRECIO: S/ 60.00</p>
                <button>Comprar</button>
            </div>
            <!--Bebidas-->
            <div class="item item-bebida" data-category="Bebidas">
                <img src="../Img/img/pisco-sour.jpg" alt="Pisco Sour">
                <h3>Pisco Sour</h3>
                <p>Disfruta de nuestro clásico Pisco sour , preparado con pisco, jugo de limón, jarabe de goma y clara de huevo.</p>
                <p>PRECIO: S/ 25.00</p>
                <button>Comprar</button>
            </div>
            <div class="item item-bebida" data-category="Bebidas">
                <img src="../Img/img/vino-perfecto.webp" alt="Vino perfecto amor">
                <h3>Vino perfecto amor</h3>
                <p>Dulce y suave, ideal para acompañar momentos especiales. Su sabor afrutado y delicado lo convierte en la elección perfecta para celebrar con un toque de dulzura.</p>
                <p>PRECIO: S/ 22.00</p>
                <button>Comprar</button>
            </div>
            <div class="item item-bebida" data-category="Bebidas">
                <img src="../Img/img/pisco-quebranta.jpg" alt="Pisco quebranta">
                <h3>Pisco quebranta</h3>
                <p>Pisco puro elaborado con uvas quebranta, caracterizado por su sabor suave y afrutado.</p>
                <p>PRECIO: S/ 25.00</p>
                <button>Comprar</button>
            </div>
            
        </div>
    </main>

    <script src="../../Capa_Negocio/Menu.js"></script>
</body>
</html>
