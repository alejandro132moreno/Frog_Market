
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Style.CSS">
    <link rel="stylesheet" href="CSS/Resposivo.CSS">
    <title>Frog-Market</title>
    <link rel="icon" href="Img/Logo1.png">
    <style>
/*Imagen tienda*/
header 
{
    height: 100vh;
    background: url('Img/Tienda.jfif') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    position: relative;
}

header.anime 
{
    position: relative;
    z-index: 100; 
}

nav.anime 
{
    z-index: 200; 
}


    </style>      
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elementosAnimar = document.querySelectorAll('.anime');
            
            elementosAnimar.forEach(function (elemento) {
                anime({
                    targets: elemento,
                    translateY: [100, 0],
                    opacity: [0, 1],
                    easing: 'easeInOutQuad',
                    duration: 800,
                    delay: anime.stagger(100),
                });
            });
        });


        $(document).ready(function(){
        $('#product-carousel').slick({
            slidesToShow: 4, 
            slidesToScroll: 1, 
            autoplay: true, 
            autoplaySpeed: 2000, 
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2, 
                        slidesToScroll: 2 
                    }
                },
                {
                    breakpoint: 480, 
                    settings: {
                        slidesToShow: 1, 
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
    function deshabilitaRetroceso() {
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button"; // Para Chrome
    window.onhashchange = function() {
        window.location.hash="no-back-button";
    }
}
    </script>       
</head>
<body onload='deshabilitaRetroceso();'>     
    <!-------------------------- Titulo ------------------------>
    <section>
    <div class="anime container-titulo d-flex justify-content-center align-items-center" style="background: linear-gradient(to right, #a4fff7, #039554), url('Img/Logo1.png'); background-size: cover; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); height: 100px; margin: 10px;">
        <div class="logo-container">
            <a href="Index.html"><img class="logo" src="Img/Logo1.png" alt=""></a>
        </div>
        <div class="text-container text-center">
            <h1 class="titulo" style="font-family: 'Comic Sans MS', cursive; font-size: 2rem; color: #ff6600; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); margin-bottom: 0;">Frog-Market</h1>           
            <h2 class="slogan" style="font-family: 'Comic Sans MS', cursive; font-size: 1.5rem; color: #356698; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); margin-top: 0;">¿Lo quieres? ¡Lo Tienes!</h2>
        </div>
    </div>
</section>
    
                  
    <!-------------------------- Nav ------------------------>
    <div>
        <nav class="anime navbar navbar-expand-lg navbar-dark bg-dark rounded"> 
            <div class="container-fluid">                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Productos.php">Productos</a>
                        </li>                         
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="comentarios.php">Comentarios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Más</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">              
                            <a class="dropdown-item" href="Desarrolladores.html">Desarrolladores</a>
                            <a class="dropdown-item" href="recomendaciones.html">Recomendaciones</a>
                            <a class="dropdown-item" href="reseñas.html">Reseñas</a>
                         </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div> <!----cierre div de Titulo---->


<header class="anime">
    <div class="capa-container">
        <h1 class="capa">Frog-Market</h1>
        <p class="capa">¿Lo quieres? ¡Lo Tienes!</p>
        <a href="Productos.php"><button class="btn btn-primary">¡Descubre más!</button></a>
    </div>
</header>

<section class="anime inicio">
    <h2>Bienvenid@ a Nuestra Tienda Online</h2>
    <p>Nuestra compañía se creó en el año 2022, empezó como una compañía pequeña pero segura, con abastecimiento de diversos productos como libros, electrónicos y productos variados. Más allá de eso, nuestros productos son de calidad y contamos con una rapidez de envío sin importar a donde se vaya.
    En este momento se están produciendo más productos referentes a la marca "Frog-Market", playeras y/o accesorios.
    Al mismo tiempo, la compañía está en su mejor momento ya que los desarrolladores y empleados de la compañía están logrando un gran cambio y una estabilización de la página dando buenos resultados de seguridad y confiabilidad.</p>
</section>
    
    <!-------------------------- Carrusel ------------------------>    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Img/Carrusel1.jpeg" class="d-block w-100 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Img/Carrusel2.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Img/Carrusel3.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>
        </div>
      </div>
    
    <!-------------------------- Mision y Vision ------------------------>
    <section class="mission-vision-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-primary">Nuestra Misión</h2>
                    <p>Se creó la página para mejorar la distribución y envío de nuestros productos y al mismo tiempo para facilitar al usuario las compras sin estar en la tienda física por otra parte también se estableció agregar una serie de productos para las necesidades que ocupan nuestros clientes.</p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-primary">Nuestra Visión</h2>
                    <p>Nuestro propósito es crecer como una empresa exitósa, dando como principal objetivo satisfacer las necesidades de nuestros apreciados clientes y reconociendo a todo el equipo de Frog-Market por su gran obra.</p>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------- Promociones ------------------------>
    <div class="promociones">
        <div class="promocion" onclick="expandirDescripcion(this)">
            <h3 class="tituloPromocion">Descuento 20%</h3>
            <p class="descripcionPromocion">En productos seleccionados. ¡Aprovecha esta oferta especial!</p>
        </div>

        <div class="promocion" onclick="expandirDescripcion(this)">
            <h3 class="tituloPromocion">Envío Gratis</h3>
            <p class="descripcionPromocion">En todas las compras. Válido por tiempo limitado.</p>
        </div>

        <div class="promocion" onclick="expandirDescripcion(this)">
            <h3 class="tituloPromocion">Oferta Especial</h3>
            <p class="descripcionPromocion">Compra 2 y lleva 1 gratis. ¡No te pierdas esta oportunidad!</p>
        </div>

        <div class="promocion" onclick="expandirDescripcion(this)">
            <h3 class="tituloPromocion">Descuento Exclusivo</h3>
            <p class="descripcionPromocion">Para usuarios registrados. Regístrate para obtener tu descuento.</p>
        </div>
    </div>
    
    <!-------------------------- Ofertas ------------------------>
    <div class="carousel-container">
        <h2 class="text-center mb-3 seccion-title">Ofertas del Mes</h2>
        <div class="carousel" id="product-carousel">
          <!-- Producto 1 -->
          <div class="product-item">
            <img src="Img/Ropa2.jfif" alt="Producto 1">            
            <strong>Chamarra Negra:</strong><p>Marca Renegul.
            <br>
            <strong style="color: green;">$599.99</strong>
            <br>
            <span class="texto-span" style="color: green;">Envío Gratis.</span>
            <br>
            <span class="price" style="color: green;">6x $95.00 sin intereses</span></p>
            <a href="Productos.php"><button class="buy-button">Comprar</button></a>
          </div>
      
          <!-- Producto 2 -->
          <div class="product-item">
            <img src="Img/PC1.jpg" alt="Producto 2">            
            <strong>PC Gamer:</strong><p>ASUS RT3600.
                <br>
                <strong style="color: green;">$18,500</strong>
                <br>
                <span class="texto-span" style="color: green;">Envío Gratis.</span>
                <br>
                <span class="price" style="color: green;">12x $1,800 sin intereses</span></p>
                <a href="Productos.php"><button class="buy-button">Comprar</button></a>
          </div>

          <!-- Producto 3 -->
          <div class="product-item">
            <img src="Img/tienda.jpg" alt="Producto 3">            
            <strong>Despensa:</strong><p>Muchos productos.
                <br>
                <strong style="color: green;">$1,000</strong>
                <br>
                <span class="texto-span" style="color: green;">Envío Gratis.</span>
                <br>
                <span class="price" style="color: green;">2x $500 sin intereses</span></p>
                <a href="Productos.php"><button class="buy-button">Comprar</button></a>
          </div>

          <!-- Producto 4 -->
          <div class="product-item">
            <img src="Img/Collibros.jpg" alt="Producto 4">
            <strong>Coleccion Libros:</strong><p>Libros de Harry Potter.
                <br>
                <strong style="color: green;">$799</strong>
                <br>
                <span class="texto-span" style="color: green;">Envío Gratis.</span>
                <br>
                <span class="price" style="color: green;">3x $256 sin intereses</span></p>
                <a href="Productos.php"><button class="buy-button">Comprar</button></a>
          </div>

          <!-- Producto 5 -->
          <div class="product-item">
            <img src="Img/Mueble.jpg" alt="Producto 5">
            <strong>Set UP Gamer:</strong><p>Diferentes accesorios.
                <br>
                <strong style="color: green;">$7,399</strong>
                <br>
                <span class="texto-span" style="color: green;">Envío Gratis.</span>
                <br>
                <span class="price" style="color: green;">12x $617 sin intereses</span></p>
                <a href="Productos.php"><button class="buy-button">Comprar</button></a>
          </div>

          <!-- Producto 6 -->
          <div class="product-item">
            <img src="Img/Deportes.jpg" alt="Producto 6">
            <strong>Balon de Futbol:</strong><p>Marca adidas.
                <br>
                <strong style="color: green;">$379</strong>
                <br>
                <span class="texto-span" style="color: green;">Envío Gratis.</span>
                <br>
                <span class="price" style="color: green;">2x $190 sin intereses</span></p>
                <a href="Productos.php"><button class="buy-button">Comprar</button></a>
          </div>

          <!-- Producto 7 -->
          <div class="product-item">
            <img src="Img/Electronica.jpg" alt="Producto 7">
            <strong>Celular:</strong><p>Calidad Precio.
                <br>
                <strong style="color: green;">$5,980</strong>
                <br>
                <span class="texto-span" style="color: green;">Envío Gratis.</span>
                <br>
                <span class="price" style="color: green;">24x $1950 sin intereses</span></p>
                <a href="Productos.php"><button class="buy-button">Comprar</button></a>
          </div>

          <!-- Producto 8 -->
          <div class="product-item">
            <img src="Img/Ropa3.jpg" alt="Producto 8">
            <strong>Cachucha:</strong><p>Marca Bass Pro Shops.
                <br>
                <strong style="color: green;">$350</strong>
                <br>
                <span class="texto-span" style="color: green;">Envío Gratis.</span>
                <br>
                <span class="price" style="color: green;">3x $116 sin intereses</span></p>
                <a href="Productos.php"><button class="buy-button">Comprar</button></a>
          </div>
        </div>
      
        <div class="navigation-buttons">
            <button class="button-item arrow" onclick="prevSlide()">&#9665;</button>
            <button class="button-item arrow" onclick="nextSlide()">&#9655;</button>
          </div>
      </div>
<br>
<br>
<br>
<br>

<!-------------------------- Curiosidades ------------------------>
<div class="container-centered">
    <h2 class="text-center mb-3 seccion-title">¿Sabías que?</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="styled-div">
                <h4 class="mb-3">APPLE</h4>
                <p>Hay muchas teorías y versiones, pero la leyenda cuenta que la manzana mordida de apple, hace referencia al homenaje de Steve Jobs que hace a Alan Turing (1912-1954), matemático británico que descifró códigos secretos de los nazis y ayudó a salvar millones de personas.</p>
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="styled-div">
                <h4 class="mb-3">LACOSTE</h4>
                <p>La marca se fundó en 1933 por el tenista René Lacoste y le conocían con el sobrenombre de cocodrilo, el diseño del logotipo viene precisamente de ahí, ya que al ser ganador en una Copa Davis, por una apuesta se llevó una cartera fabricada con piel de cocodrilo.</p>
            </div>
        </div>
</div>

<div class="row">
        <div class="col-md-6">
            <div class="styled-div">
                <h4 class="mb-3">NIKE</h4>
                <p>En los años 50, el entrenador de atletismo de la Universidad de Oregón quería por todos los medios ofrecer a sus atletas ventajas competitivas. Uno de sus estudiantes, Phil Knight, un apasionado del atletismo redactó una propuesta a distintas compañías fabricantes de calzado japonesas, con el fin de hacer frente a las marcas alemanas que dominaban la industria del calzado deportivo en EE.UU.</p>
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="styled-div">
                <h4 class="mb-3">HYM</h4>
                <p>En 1947, inspirado por el modelo de venta minorista estadounidense, tras un viaje por este país que había realizado un año antes, el joven emprendedor de origen sueco,  Erling Persson, decidió abrir en la población de Västerås (Suecia) una pequeña tienda de ropa exclusivamente de mujer a la que llamó ‘Hennes’, cuya traducción al español vendría a ser ‘Para ella’.</p>
            </div>
        </div>
    </div>
</div>
 <br> 
 <br>


 <div class="imagen-seccion">
    <a href=""><img src="Img/anuncio.jpg" alt="Descripción de la imagen"></a>
</div>
<br>

<!-------------------------- Membresia ------------------------>
<section class="loyalty-buylevel6">
    <div class="loyalty-buylevel6__wrapper">
        <div class="loyalty-buylevel6__header" style="--deg_loyalty:90deg;--first_color_loyalty:#a4fff7;--percentage_loyalty:0%;--second_color_loyalty:#AA1192">
            <div class="loyalty-buylevel6__header__title">¡Suscríbete a Club-Croac+ con precio de promoción!</div>
            <div class="loyalty-buylevel6__header-pricing">
                <div>
                    <span class="loyalty-buylevel6__header-price loyalty-buylevel6__header-price--price-only">$50
                        <sup class="loyalty-buylevel6__header-cents"></sup></span>
                    <span class="loyalty-buylevel6__header-period">/primer mes</span>
                </div>
            </div>
        </div>
        <div class="loyalty-buylevel6__body">
            <span class="loyalty-buylevel6__body-title">Consigue los mejores beneficios en Frog-Market</span>
            <br>
            <br>
            <div class="loyalty-buylevel6__body-benefits">
                <div class="loyalty-buylevel6__body-benefit loyalty-buylevel6__body-benefit--center">
                    <div class="loyalty-buylevel6__body-benefit-logo">
                        <img decoding="async" src="Img/entrega-gratis.png" class="loyalty-buylevel6__body-benefit-logo-img" alt="">
                    </div>
                    <span class="loyalty-buylevel6__body-benefit-text">Envíos gratis en millones de productos</span>
                </div>
                <div class="loyalty-buylevel6__body-benefit loyalty-buylevel6__body-benefit--center">
                    <div class="loyalty-buylevel6__body-benefit-logo">
                        <img decoding="async" src="Img/Net y Dis.png" class="loyalty-buylevel6__body-benefit-logo-img" alt="">
                    </div>
                    <span class="loyalty-buylevel6__body-benefit-text">Disney+ y Netflix</span>
                </div>
                <div class="loyalty-buylevel6__body-benefit loyalty-buylevel6__body-benefit--center">
                    <div class="loyalty-buylevel6__body-benefit-logo">
                        <img decoding="async" src="Img/deezer.png" class="loyalty-buylevel6__body-benefit-logo-img" alt="">
                    </div>
                    <span class="loyalty-buylevel6__body-benefit-text">12 meses gratis de Deezer Premium</span>
                </div>
            </div>
        </div>
        <div class="loyalty-buylevel6__action" style="text-align: center;">
            <a href="" class="btn btn-primary">Suscribirme a Club-Croac+</a>
        </div>
    </div>
</section>
<br>
<br>
<br> 
<br>
<!-------------------------- Marcas Originales ------------------------>
<div class="grid__header with-title">
    <h2 class="text-center">Productos Oficiales</h2>
</div>
<div class="container containercoll mt-4" style="border-radius: 10px;">
    <section class="hub__boxed-width" style="background-color: rgb(255, 255, 255); background-image: none; border-radius: 10px; ">
        <div class="row">
            <!-- Elemento 1 -->
            <div class="col-sm-6 col-lg-4 collage-item">
                <!-- Elemento 1 -->
                <div class="splinter-col-mobile-6 splinter-col-desktop-4">
                        <div class="andes-card andes-card hub__grid-item item__card card__secondary andes-card--flat andes-card--padding-16 andes-card--animated" id=":rl:">
                            <div class="item-image">
                                <img decoding="async" src="https://http2.mlstatic.com/D_Q_NP_816124-MLA72723633552_112023-V.webp" alt="" height="40px">
                            </div>
                            <div class="item-description">
                                <span class="pre-title">hasta</span>
                                <h3 class="title">55% OFF</h3>
                                <h4 class="subtitle"> </h4>
                            </div>
                        </div>
                </div>
            </div>

        <!-- Elemento 2 -->
        <div class="col-sm-6 col-lg-4 collage-item">
            <!-- Elemento 2 -->
            <div class="splinter-col-mobile-6 splinter-col-desktop-4">
                    <div class="andes-card andes-card hub__grid-item item__card card__secondary andes-card--flat andes-card--padding-16 andes-card--animated" id=":rl:">
                        <div class="item-image mt-5">
                            <img decoding="async" src="https://yanda.mx/images/en-la-tienda/botanas.jpg" alt="">
                        </div>
                        <div class="item-description">
                            <span class="pre-title">hasta</span>
                            <h3 class="title">50% OFF</h3>
                            <h4 class="subtitle"> </h4>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Elemento 3 -->
        <div class="col-sm-6 col-lg-4 collage-item">
            <!-- Elemento 3 -->
            <div class="splinter-col-mobile-6 splinter-col-desktop-4">
                    <div class="andes-card andes-card hub__grid-item item__card card__secondary andes-card--flat andes-card--padding-16 andes-card--animated" id=":rl:">
                        <div class="item-image mt-5" ><br>
                            <img decoding="async" src="https://http2.mlstatic.com/D_NQ_NP_961735-MLM71862847069_092023-O.webp" alt="">
                        </div>
                        <div class="item-description">
                            <span class="pre-title">hasta</span>
                            <h3 class="title">60% OFF</h3>
                            <h4 class="subtitle"> </h4>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Elemento 4 -->
        <div class="col-sm-6 col-lg-4 collage-item">
            <!-- Elemento 4 -->
            <div class="splinter-col-mobile-6 splinter-col-desktop-4">
                    <div class="andes-card andes-card hub__grid-item item__card card__secondary andes-card--flat andes-card--padding-16 andes-card--animated" id=":rl:">
                        <div class="item-image">
                            <img decoding="async" src="https://http2.mlstatic.com/D_NQ_NP_635255-MLU69585258384_052023-O.webp" alt="">
                        </div>
                        <div class="item-description">
                            <span class="pre-title">hasta</span>
                            <h3 class="title">45% OFF</h3>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Elemento 5 -->
        <div class="col-sm-6 col-lg-4 collage-item">
            <!-- Elemento 5 -->
            <div class="splinter-col-mobile-6 splinter-col-desktop-4">
                    <div class="andes-card andes-card hub__grid-item item__card card__secondary andes-card--flat andes-card--padding-16 andes-card--animated" id=":rl:">
                        <div class="item-image">
                            <img decoding="async" src="https://http2.mlstatic.com/D_NQ_NP_669034-MLM54151348177_032023-O.webp" alt="">
                        </div>
                        <div class="item-description">
                            <span class="pre-title">hasta</span>
                            <h3 class="title">25% OFF</h3>
                            <h4 class="subtitle"> </h4>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Elemento 6 -->
        <div class="col-sm-6 col-lg-4 collage-item">
            <!-- Elemento 6 -->
            <div class="splinter-col-mobile-6 splinter-col-desktop-4">
                    <div class="andes-card andes-card hub__grid-item item__card card__secondary andes-card--flat andes-card--padding-16 andes-card--animated" id=":rl:">
                        <div class="item-image">
                            <img decoding="async" src="https://http2.mlstatic.com/D_NQ_NP_912178-MLA72867255492_112023-O.webp" alt="">
                        </div>
                        <div class="item-description">
                            <span class="pre-title">hasta</span>
                            <h3 class="title">40% OFF</h3>
                            <h4 class="subtitle"> </h4>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
</div>
<br>
<br>
<br>



<!-------------------------- Video Promocional ------------------------>
<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="video-wrapper">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/TU3oC-d5ZSE" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-content">
                    <h2>Promoción Especial</h2>
                    <p>¡Mira nuestros productos increíbles y aprovecha nuestras ofertas exclusivas! ¡No te lo pierdas!</p>
                    <a href="Productos.php" class="btn btn-primary">Ver Ofertas</a>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>

<!-------------------------- Anuncios Publicitarios ------------------------>
<div class="anuncios">
    <div class="anuncio">
        <img src="Img/a1.png" alt="Marca 1">
        <h3>TOMMY HILFIGER</h3>
        <p>Descubre nuestras últimas colecciones de moda.</p>
    </div>

    <div class="anuncio">
        <img src="Img/a2.jpg" alt="Marca 2">
        <h3>ASUS</h3>
        <p>Explora las ofertas exclusivas en tecnología.</p>
    </div>

    <div class="anuncio">
        <img src="Img/a3.jpg" alt="Marca 3">
        <h3>NIKE</h3>
        <p>Productos innovadores para tu estilo de vida.</p>
    </div>

    <div class="anuncio">
        <img src="Img/a4.png" alt="Marca 4">
        <h3>Amix Nutrition </h3>
        <p>Descuentos especiales solo por tiempo limitado.</p>
    </div>
</div>
<br>
<br>
<br>

<!-------------------------- Lo más vendido ------------------------>
<div class="container d-flex align-items-center justify-content-center text-center">
    <div>
        <h2>Lo más vendido🔥</h2>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="Img/Consola.jpg" class="card-img-top" alt="Consola">
                    <div class="card-body">
                        <h5 class="card-title">Consola</h5>
                        <p class="card-text">Descripción del producto.</p>
                        <a href="Productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="Img/Libro.jfif" class="card-img-top" alt="Libro">
                    <div class="card-body">
                        <h5 class="card-title">Libro</h5>
                        <p class="card-text">Descripción del producto.</p>
                        <a href="Productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="Img/Ropa.jfif" class="card-img-top" alt="Ropa">
                    <div class="card-body">
                        <h5 class="card-title">Ropa</h5>
                        <p class="card-text">Descripción del producto.</p>
                        <a href="Productos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <br>
  <br>
  <br>


<!-------------------------- Videos Promocionales ------------------------>
<h2 class="text-center mb-3 seccion-title">Proximos Lanzamientos</h2>
    <div class="seccion-videos contenedor-videos">
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xqyUdNxWazA?si=_u5A5Xb85S2iSLVK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h3>Reel 1</h3>
            <p>Descubre el smartphone del futuro que está revolucionando la forma en que vivimos.</p>
        </div>

        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MA5x8JNOxqw?si=_sC5J-dVIJo4m_iI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h3>Reel 2</h3>
            <p>"¡Desata el poder de la innovación con la nueva Lenovo MX_FY24Q3_DG! 🚀.</p>
        </div>

        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6nSPxvDygy4?si=nabKeuqFpmQtYhTs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h3>Reel 3</h3>
            <p>"¡Eleva tu estilo con la nueva colección Puma! 👟✨.</p>
        </div>

        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/D6b25d7jSx0?si=Ue2LpDdXKKz1RyQu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h3>Reel 4</h3>
            <p>Tu negocio siempre a la moda.</p>
        </div>
    </div>
  <br>
  <br>
  <br>

<!-------------------------- Categorias ------------------------>
<section class="categories-container">
    <h2>Explora nuestras categorías</h2>
    
    <a href="Productos.php" class="category-link">
      <div class="category-item"> <!-- Categoría 1 -->      
        <img src="Img/electronica.png" alt="Categoría 1">
        <p>Equipos y componentes electronicos.</p>
      </div>
    </a>
  
    <a href="Productos.php" class="category-link">
      <div class="category-item"> <!-- Categoría 2 -->    
        <img src="Img/libro-abierto.png" alt="Categoría 2">    
        <p>Libros de todo tipo.</p>
      </div>
    </a>
  
    <a href="Productos.php" class="category-link">
      <div class="category-item"> <!-- Categoría 3 -->       
        <img src="Img/camiseta.png" alt="Categoría 3">    
        <p>Ropa para toda la familia.</p>
      </div>
    </a>
    
    <br>
  
    <a href="Productos.php" class="category-link">
      <div class="category-item"> <!-- Categoría 4 -->
        <img src="Img/deportes.png" alt="Categoría 4">
        <p>Equipo para cualquier deporte.</p>
      </div>
    </a>
  
    <a href="Productos.php" class="category-link">
      <div class="category-item"> <!-- Categoría 5 -->       
        <img src="Img/muebles.png" alt="Categoría 5">    
        <p>Muebles de todo tipo.</p>
      </div>
    </a>
  
    <a href="Productos.php" class="category-link">
      <div class="category-item"> <!-- Categoría 6 -->       
        <img src="Img/tienda-de-comestibles.png" alt="Categoría 6">    
        <p>Productos para comer.</p>
      </div>
    </a>
  </section>
<br>
<br>

  <!-------------------------- Ofrecemos ------------------------>
  <section class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h2 class="text-center">Ofrecemos</h2>
            <br>
            <br>
            <div class="col-md-4">
                <div class="card border-0 text-center">
                    <img src="Img/Entrega.png" class="card-img-top mx-auto" alt="Envío Rápido" style="max-width: 50%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Envío Rápido</h5>
                        <p class="card-text">Recibe tus productos en 24 horas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 text-center">
                    <img src="Img/Devoluciones.png" class="card-img-top mx-auto" alt="Devoluciones Fáciles" style="max-width: 50%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Devoluciones Fáciles</h5>
                        <p class="card-text">Garantía de devolución del dinero en 30 días.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 text-center">
                    <img src="Img/Servicioalcliente.png" class="card-img-top mx-auto" alt="Atención al Cliente" style="max-width: 50%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Atención al Cliente</h5>
                        <p class="card-text">Soporte 24/7 para resolver tus dudas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-------------------------- Footer ------------------------>
<footer class="bg-dark text-white text-center py-4">   
    <div class="container" style="text-align: center;">
        <div class="row" style="text-align: center;">
            <div class="col-md-4" style="text-align: center;">
                <h4 style="text-align: center;">Contacto</h4>
                <p><strong>Dirección:</strong> Fransico I Madero #69</p>
                <p><strong>Teléfono:</strong> 449-756-4013</p>
                <p><strong>Email:</strong> alex132moreno@gmail.com</p>
            </div>
            <div class="col-md-4" style="text-align: center;">
                <h4 style="text-align: center;">Enlaces Rápidos</h4>
                <ul class="enlaces-rapidos">
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Productos.php">Productos</a></li>
                    <li><a href="https://wa.me/qr/5LWA4JBV67GBL1">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 style="text-align: center;">Síguenos en Redes Sociales</h4>
            <div class="redes-sociales">
                <ul>
                <li><a href="https://www.facebook.com/profile.php?id=61553113776063&mibextid=2JQ9oc" target="_blank"><img src="Img/facebook.png" alt="Facebook"> Facebook</a></li>
                    <li><a href="#" target="_blank"><img src="Img/twitter.png" alt="Twitter"> Twitter</a></li>
                    <li><a href="#" target="_blank"><img src="Img/instagram.png" alt="Instagram"> Instagram</a></li>
                    <li><a href="https://www.linkedin.com/in/frog-market-53673928a/" target="_blank"><img src="Img/linkedin.png" alt="LinkedIn"> LinkedIn</a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <p>&copy; 2023 Frog-Market. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>


<script>
    let idleTime = 0;
    let alertShown = false;

    setInterval(timerIncrement, 1000);

    window.addEventListener("mousemove", resetTimer);
    window.addEventListener("keydown", resetTimer);

    function timerIncrement() { 
        idleTime++;
        if (!alertShown && idleTime > 15) {
            alert ('Tu sesión expiró, inicia sesión de nuevo');
            window.location.href = 'indexlogin.php';
            alertShown =true;
    }
}

function resetTimer() {
    idleTime = 0;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script> 

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="JS/Script.JS"></script>
</body>
</html>