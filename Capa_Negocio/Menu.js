const menu = [
  {
    id: 1,
    title: "Sopa seca con carapulcra",
    category: "Menú",
    price: 13.00,
    img:
      "https://t4.ftcdn.net/jpg/05/04/78/29/360_F_504782924_osLGjQmoipSb0uDjcfK0meROIQfMePE5.jpg",
    desc: `Plato icónico de Ica que combina fideos sazonados con un guiso de papas secas y carne, aderezado con maní y ajíes. `,
  },
  {
    id: 2,
    title: "Pollo a la cerveza",
    category: "Menú",
    price: 13.00,
    img:
      "https://i.ytimg.com/vi/iTv6RTt0K5s/maxresdefault.jpg",
    desc: `Es un guiso en el que el pollo se cocina con cerveza, lo que le da un sabor suave y aromático. `,
  },
  {
    id: 3,
    title: "Hígado a la plancha",
    category: "Menú",
    price: 16.00,
    img:
      "https://img-global.cpcdn.com/recipes/4fff9b3d4f71b09b/680x482cq70/higado-de-ternera-a-la-plancha-foto-principal.jpg",
    desc: `Hígado cocinado en una plancha con aceite, sazonado con sal, pimienta y ajo. Acompañado con papas, ensalada o arroz. `,
  },
  {
    id: 4,
    title: "Spaghetti a la bolognesa",
    category: "Menú",
    price: 16.00,
    img:
      "https://peopleenespanol.com/thmb/6t7A-dem6ZyHI6zXy62cQ-0MBJY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/recetas-4115-spaghetti-boloesa-facil-2000-d4cbc49cc28d4e78bf8266662cc037e1.jpg",
    desc: `Servidos con una salsa a base de carne molida, tomate, cebolla, zanahoria, ajo y vino. `,
  },
  {
    id: 5,
    title: "Parrilla de chancho",
    category: "Menú",
    price: 16.00,
    img:
      "https://ranchera.com.co/wp-content/uploads/2022/07/lomo-de-cerdo-a-la-parilla-1-scaled.jpeg",
    desc: `Piezas de chancho a la parrilla, sazonadas con especias. Asado hasta que esté dorado y jugoso, servido con guarniciones como papas, choclo y salsas criollas. `,
  },
  {
    id: 6,
    title: "Chaufa de pollo",
    category: "Menú",
    price: 16.00,
    img:
      "https://www.paulinacocina.net/wp-content/uploads/2021/12/arroz-chaufa-peruano-receta.jpg",
    desc: `Arroz frito mezclado con trozos de pollo, huevo, cebolla china y salsa de soya. `,
  },
  {
    id: 7,
    title: "Alitas a la BBQ",
    category: "Menú",
    price: 16.00,
    img:
      "https://www.unileverfoodsolutions.com.co/dam/global-ufs/mcos/NOLA/calcmenu/recipes/col-recipies/fruco/ALITAS-SALSA-1024X1024-px.jpg",
    desc: `Alitas de pollo cocinadas y cubiertas con salsa barbacoa, que les da un sabor dulce y ahumado. `,
  },
  {
    id: 8,
    title: "Macarrones al pesto con churrasco",
    category: "Menú",
    price: 20.00,
    img:
      "https://cdn0.recetasgratis.net/es/posts/8/2/6/macarrones_al_pesto_38628_orig.jpg",
    desc: `Macarrones bañados en salsa de albahaca, ajo, queso y nueces o piñones, con un jugoso churrasco a la parrilla. `,
  },
  {
    id: 9,
    title: "Parrilla de res con papas fritas",
    category: "Menú",
    price: 20.00,
    img:
      "https://png.pngtree.com/background/20230326/original/pngtree-grilled-meat-with-french-fries-vector-picture-image_2175842.jpg",
    desc: `Carne de res asados a la parrilla, servidos con papas fritas crujientes. Un plato sabroso y sustancioso. `,
  },
  {
    id: 10,
    title: "Pollo saltado",
    category: "Menú",
    price: 20.00,
    img:
      "https://es.cravingsjournal.com/wp-content/uploads/2020/06/pollo-saltado-3-500x500.jpg",
    desc: `Trozos de pollo salteados con cebolla, tomate y ají, todo cocinado a fuego alto. Servido con arroz y papas fritas. `,
  },
  {
    id: 11,
    title: "Chaufa con alitas a la BBQ",
    category: "Menú",
    price: 20.00,
    img:
      "https://oipacyl.com.es/wp-content/uploads/alitas-de-pollo-con-arroz.jpg",
    desc: `Arroz frito con trozos de pollo, cebolla china y salsa de soya, acompañado de alitas de pollo glaseadas con una salsa barbacoa dulce y ahumada. `,
  },
  {
    id: 12,
    title: "Tallarin saltado de pollo",
    category: "Menú",
    price: 20.00,
    img:
      "https://static.wixstatic.com/media/9755d8_7ac78d4b176e4f43b4b44e1709b9227e~mv2.jpg/v1/fill/w_1000,h_667,al_c,q_85,usm_0.66_1.00_0.01/9755d8_7ac78d4b176e4f43b4b44e1709b9227e~mv2.jpg",
    desc: `Fideos de tallarín salteados con trozos de pollo, cebolla, tomate y ají, todo cocinado a fuego alto. `,
  },
  {
    id: 13,
    title: "Filete de pollo a la plancha",
    category: "Menú",
    price: 20.00,
    img:
      "https://media-cdn.tripadvisor.com/media/photo-s/0f/22/ac/a1/pechuga-de-pollo-a-la.jpg",
    desc: `Filete de pollo cocido a la plancha, sazonado con sal y especias, acompañado de crujientes papas fritas. `,
  },
  {
    id: 14,
    title: "Costillar de res con yucas",
    category: "Menú",
    price: 20.00,
    img:
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhYHlxauKucdIR5ifFhrvjfFJL8Y6SJFPkHSwKoWzlJ9j7NhsnGINCaPbpvEAlUeh42rSthKlzHrQyBD-1xmNq7lHPEA-wSh3E_pzpKftMkZMC3-do3uE1s91rtiunMWMq7YGwuSurujirf/s1600/rEstofado+de+Costillas+con+yuca.jpg",
    desc: `Se cocina el costillar de res a la parrilla o al horno, logrando una carne tierna y jugosa. Acompañado de yucas fritas o sancochadas. `,
  },
  {
    id: 15,
    title: "Churrasco a la plancha",
    category: "Menú",
    price: 20.00,
    img:
      "https://carniceriaangel.com/wp-content/uploads/2023/02/recetas-churrasco.jpeg",
    desc: `Res cocido en una plancha caliente. Sazonado con sal y pimienta, logrando una carne jugosa y dorada por fuera. `,
  },
  //Carta
  {
    id: 16,
    title: "Lomo saltado",
    category: "Carta",
    price: 25.00,
    img:
      "https://i.ytimg.com/vi/r2oGrH__hT0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBtRrQkJyQYxpAJD7aR3yN2BhJ0Cw",
    desc: `Combina tiras de carne de res salteadas a fuego alto con cebolla, tomate y ají. Mezclado con papas fritas y acompañado de arroz `,
  },
  {
    id: 17,
    title: "Milanesa de pollo",
    category: "Carta",
    price: 24.00,
    img:
      "https://cooprenacerandino.com/wp-content/uploads/2020/05/Milanesa-de-pollo.jpg",
    desc: `Filete de pollo empanizado con pan rallado y frito hasta quedar dorado y crujiente. Acompañado con papas fritas, ensalada o arroz. `,
  },
  {
    id: 18,
    title: "Fetuccini a la huancaina con lomo",
    category: "Carta",
    price: 30.00,
    img:
      "https://media-cdn.tripadvisor.com/media/photo-s/09/9f/ed/0c/la-glorietta.jpg",
    desc: `Plato que combina fetuccini cubiertos con una cremosa salsa huancaína, hecha a base de ají amarillo, queso fresco y leche, acompañado de tiras de lomo de res jugoso. `,
  },
  {
    id: 19,
    title: "Tallarin verde con chuleta",
    category: "Carta",
    price: 20.00,
    img:
      "https://media-cdn.tripadvisor.com/media/photo-s/16/ed/64/8a/tallarines-verdes-con.jpg",
    desc: `Fideos bañados en salsa de albahaca y espinaca, acompañada de una chuleta de cerdo a la plancha. `,
  },
  {
    id: 20,
    title: "Tallarin saltado de res",
    category: "Carta",
    price: 24.00,
    img:
      "https://i.ytimg.com/vi/itUBskU4HYg/maxresdefault.jpg",
    desc: `Tallarín salteados a fuego alto con tiras de carne de res, cebolla, tomate y ají, todo aderezado con salsa de soya. `,
  },
  {
    id: 21,
    title: "Lomo saltado a lo pobre",
    category: "Carta",
    price: 28.00,
    img:
      "https://cdn0.recetasgratis.net/es/posts/4/3/3/lomo_saltado_a_lo_pobre_77334_orig.jpg",
    desc: `Combina tiras de carne de res salteadas con cebolla, tomate y ají, acompañado de papas fritas, arroz, plátano frito y un huevo frito. `,
  },
  {
    id: 22,
    title: "Tallarines verdes con bisteck apanado",
    category: "Carta",
    price: 30.00,
    img:
      "https://buenazo.cronosmedia.glr.pe/original/2023/06/19/6490842c015fab27f801c3f6.png",
    desc: `Pasta bañada en una salsa cremosa de albahaca y espinaca, con un bisteck empanizado y frito hasta quedar crujiente. `,
  },
  //Marinos
  {
    id: 23,
    title: "Ceviche carretillero",
    category: "Marinos",
    price: 18.00,
    img:
      "https://cdn0.recetasgratis.net/es/posts/7/4/1/ceviche_peruano_18147_600.jpg",
    desc: `Pescado fresco marinado en jugo de limón, ají, cebolla y cilantro. Acompañado de cancha, yuca o camote, y chicharrón de pescado. `,
  },
  {
    id: 24,
    title: "Trucha frita con yucas doradas",
    category: "Marinos",
    price: 25.00,
    img:
      "https://aeronoticias.com.pe/noticiero/wp-content/uploads/2023/08/trucha-frita.jpg",
    desc: `Trucha fresca frita hasta quedar crujiente, acompañada de yucas doradas y crujientes. Acompañado con ensalada o arroz. `,
  },
  {
    id: 25,
    title: "Lenguado frito al plato",
    category: "Marinos",
    price: 30.00,
    img:
      "https://labarra12cevicheria.com.pe/wp-content/uploads/2023/10/cabrillfrita3-1-600x600.jpg",
    desc: `Filete de lenguado frito hasta dorarse, sazonado con sal y especias. Acompañado con papas fritas, arroz o ensalada. `,
  },
  {
    id: 26,
    title: "Chupe de camarones",
    category: "Marinos",
    price: 35.00,
    img:
      "https://www.paulinacocina.net/wp-content/uploads/2024/03/chupe-de-camaron-Paulina-Cocina-Recetas-Cocina-Recetas-1.jpg",
    desc: `Sopa cremosa y sustanciosa elaborada con camarones frescos, papas, choclo, queso y especias, todo cocido en un caldo sabroso. `,
  },
  {
    id: 27,
    title: "Chicharrón de pescado",
    category: "Marinos",
    price: 16.00,
    img:
      "https://i.ytimg.com/vi/TaTLMSrT8ao/sddefault.jpg",
    desc: `Trozos de pescado rebozados y fritos hasta que quedan dorados y crujientes. Acompañado con yuca o papas fritas. `,
  },
  {
    id: 28,
    title: "Chaufa marino",
    category: "Marinos",
    price: 16.00,
    img:
      "https://comedera.com/wp-content/uploads/sites/9/2022/02/arroz-chaufa-de-mariscos.jpg",
    desc: `Arroz frito con mariscos como camarones, calamares y pescado, junto con cebolla china, huevo y salsa de soya. `,
  },
  {
    id: 29,
    title: "Ceviche mixto",
    category: "Marinos",
    price: 25.00,
    img:
      "https://buenazo.cronosmedia.glr.pe/original/2020/09/09/5f58f8c082c2f615f804ffdb.jpg",
    desc: `Diferentes tipos de mariscos, como pescado, calamares, y camarones, marinados en jugo de limón, junto con cebolla, ají y cilantro. `,
  },
  {
    id: 30,
    title: "Ceviche de pescado",
    category: "Marinos",
    price: 20.00,
    img:
      "https://imag.bonviveur.com/ceviche-peruano-de-pescado.jpg",
    desc: `Pescado fresco (corvina o lenguado) marinado en jugo de limón, junto con cebolla roja, ají, cilantro y sal. `,
  },
  {
    id: 31,
    title: "Duo (Ceviche + Chicharron)",
    category: "Marinos",
    price: 25.00,
    img:
      "https://static.wixstatic.com/media/9755d8_3e70069af2f4415e902da0f0f27fe2b4~mv2.png/v1/fill/w_1000,h_563,al_c,q_90,usm_0.66_1.00_0.01/9755d8_3e70069af2f4415e902da0f0f27fe2b4~mv2.png",
    desc: `Una combinación perfecta que une la frescura del ceviche con la textura crujiente del chicharrón. `,
  },
  {
    id: 32,
    title: "Trio marino",
    category: "Marinos",
    price: 35.00,
    img:
      "https://i.pinimg.com/736x/45/96/cf/4596cf9445f36cebb17f17787b8ee77b.jpg",
    desc: `Una irresistible combinación de ceviche fresco, crujiente chicharron de pescado y arroz de mariscos. `,
  },
  {
    id: 33,
    title: "Arroz con mariscos",
    category: "Marinos",
    price: 28.00,
    img:
      "https://4.bp.blogspot.com/--kKtGrsZrWw/VtNrxJJaY_I/AAAAAAAAHRw/_75u0SnjQPA/s1600/arroz-con-mariscos-ingredientes-receta.jpg",
    desc: `Arroz sazonado y salteado con una variedad de mariscos frescos, como camarones, calamares y conchas, acompañado de un toque de aji y especias. `,
  },
  {
    id: 34,
    title: "Ceviche de camarones",
    category: "Marinos",
    price: 60.00,
    img:
      "https://i.pinimg.com/736x/78/12/94/781294fbe0823da60344b96553682735.jpg",
    desc: `Frescos camarones marinados en jugo de limón mezclados con cebolla, aji y cilantro. `,
  },
  //Bebidas
  {
    id: 35,
    title: "Pisco sour",
    category: "Bebidas",
    price: 25.00,
    img:
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgH4FjFVxEJBu5LH4X7-L-cf-x4yxt81D9U_mSW3e-dQoJ9KyTMiqAaf0wR84MGKqZFtcu0ywz5YsLTBZOnJ4jSngHmwMfoIZbtvaNa7a3yqw1Kj_h1L-29NE8FDhxiYnENg_bvUCmI3r0/s1600/P9250004.JPG",
    desc: `Disfruta de nuestro clásico Pisco sour , preparado con pisco, jugo de limón, jarabe de goma y clara de huevo. `,
  },
  {
    id: 36,
    title: "Vino perfecto amor",
    category: "Bebidas",
    price: 22.00,
    img:
      "https://static.wixstatic.com/media/d4d860_de21e39d8d0549a0b8965acd7fdc9b47~mv2.jpg/v1/fill/w_480,h_724,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/d4d860_de21e39d8d0549a0b8965acd7fdc9b47~mv2.jpg",
    desc: `Dulce y suave, ideal para acompañar momentos especiales. Su sabor afrutado y delicado lo convierte en la elección perfecta para celebrar con un toque de dulzura. `,
  },
  {
    id: 37,
    title: "Pisco quebranta",
    category: "Bebidas",
    price: 25.00,
    img:
      "https://bodegavelasquez.com/145-medium_default/pisco-quebranta-velasquez.jpg",
    desc: `Pisco puro elaborado con uvas quebranta, caracterizado por su sabor suave y afrutado. `,
  },
];



const section = document.querySelector(".section-center");
const btnContainer = document.querySelector(".btn-container");


const categories = menu.reduce(
  (values, item) => {
    if (!values.includes(item.category)) {
      values.push(item.category);
    }
    return values;
  },
  ["Todos"]
);


const categoryList = () => {
  const categoryBtns = categories
    .map((category) => {
      return `<button class="btn btn-outline-dark btn-item" data-id=${category}>${category}</button>`;
    })
    .join("");

  btnContainer.innerHTML = categoryBtns;
  const filterBtns = document.querySelectorAll(".btn-item");


  filterBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const category = e.currentTarget.dataset.id;
      const menuCategory = menu.filter((menuItem) => {
        if (menuItem.category === category) {
          return menuItem;
        }
      });
      if (category === "Todos") {
        menuList(menu);
      } else {
        menuList(menuCategory);
      }
    });
  });
};


const menuList = (menuItems) => {
  let displayMenu = menuItems.map((item) => {
    return `
            <div class="menu-items col-lg-6 col-sm-12">
                <img src="${item.img}" alt="${item.title}" class="photo" />
                <div class="menu-info">
                    <div class="menu-title">
                        <h4>${item.title}</h4>
                    </div>
                    <div class="menu-text">
                        ${item.desc}
                    </div>
                    <div class="price-buy-container">
                        <h4 class="price">S/${item.price}</h4>
                        <button class="cart-button">
                            <span class="add-to-cart">Comprar</span>
                            <span class="added">Comprado</span>
                            <i class="fa-solid fa-stroopwafel"></i>
                            <i class="fa-solid fa-pizza-slice"></i>
                        </button>
                    </div>
                </div>
            </div>
        `;
  }).join("");

  section.innerHTML = displayMenu;


  const cartButtons = document.querySelectorAll('.cart-button');
  cartButtons.forEach(button => {
    button.addEventListener('click', cartClick);
  });
};


function cartClick() {
  let button = this;
  button.classList.add('clicked');


  setTimeout(() => {
    button.classList.remove('clicked');
  }, 4000);
}


menuList(menu);
categoryList();
