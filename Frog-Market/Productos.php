<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/ofertas.css">
    <title>Productos</title>
    <link rel="icon" href="Img/Logo1.png">
    <style>
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

/* Footer */
footer 
{
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.redes-sociales 
{
    margin-bottom: 20px;
}

.redes-sociales a 
{
    margin: 0 10px;
    text-decoration: none;
}

.redes-sociales img 
{
    width: 30px;
    height: 30px;
}

.contacto 
{
    margin-bottom: 10px;
}

.contacto p 
{
margin: 0;
}

footer 
{
background-color: #333;
color: #fff;
text-align: l;
padding: 1em;
}

.redes-sociales a,
.enlaces-rapidos a
{
color: white; 
text-decoration: none; 
transition: color 0.3s; /* transición hover */
}

.redes-sociales img 
        {
            vertical-align: middle; /* Alinear verticalmente las imágenes con el texto */
            margin-right: 5px; /* Añadir espacio a la derecha de las imágenes */
        }

.redes-sociales a:hover,
.enlaces-rapidos a:hover
{
    color: #00FFFF; 
}




    </style>      
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Definir las animaciones para los elementos
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
            <img class="logo" src="Img/Logo1.png" alt="" style="width: 150px";>
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
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Producto</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">              
                                <a class="dropdown-item" href="#ofertas">Ofertas</a>
                                <a class="dropdown-item" href="#electronica">Electronica</a>
                                <a class="dropdown-item" href="#libros">Libros</a>
                                <a class="dropdown-item" href="#ropa">Ropa</a>
                                <a class="dropdown-item" href="#deporte">Deportes</a>
                                <a class="dropdown-item" href="#hogar">Hogar</a>
                             </div>
                            </li>                
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="comentarios.php">Comentarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Desarrolladores.html">Desarrolladores</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div> <!----cierre div de Titulo---->
<button id="floating-btn">
        Carrito
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
            <path d="M3.544 10.705A.5.5 0 0 0 4 11h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5a.5.5 0 0 0-.082.537z"/>
          </svg>
    </button>
    <div class="container mt-5" id="carrito-container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <aside class="col-12">
                    <h2 style="color: white;">Carrito</h2>
                    <ul id="carrito" class="list-group">
                    </ul>
                    <hr>
                    <p class="text-right" style="color: white;">Total: <span id="total"></span></p>
                    <button id="boton-vaciar" class="btn btn-danger" style="color: white; margin: 10px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                          </svg>
                        Vaciar
                    </button>
                    <button id="boton-comprar" class="btn btn-primary" style="color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                          </svg>
                        <a id="ca" href="lo.php">Comprar</a>
                    </button>
                </aside>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 id="ofertas" class="titulo" style="color: black;">Ofertas</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/oferta/Collibros.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Coleccion Libros</h3>
                            <p>Libros de Harry Potter. </p>
                            <h1>$799.00</h1>
                            <button class="btn btn-primary" data-producto="Coleccion Libros" data-precio="799.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-3" src="img/oferta/Consola.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Xbox</h3>
                            <p>Microsoft Xbox Series X 1TB</p>
                            <h1>$8693.04</h1>
                            <button class="btn btn-primary" data-producto="Xbox" data-precio="8693.04"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/oferta/Deportes.jpg" alt="" style="width: 250px;">
                        </div>
                        <div class="flip-card-back">
                            <h3  class="mt-5">Balon de Futbol</h3>
                            <p>Marca adidas. </p>
                            <h1>$379.00</h1>
                            <button class="btn btn-primary" data-producto="Balon de Futbol" data-precio="379.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/oferta/Electronica.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">Celular</h3>
                            <p>Calidad Precio. </p>
                            <h1>$5980.00</h1>
                            <button class="btn btn-primary" data-producto="Celular" data-precio="5980.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/oferta/Mueble.jpg" alt="" style="width: 250px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Set UP Gamer</h3>
                            <p>Diferentes accesorios. </p>
                            <h1>$7399.00</h1>
                            <button class="btn btn-primary" data-producto="Set UP Gamer" data-precio="7399.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/oferta/PC1.jpg" alt="" style="width: 250px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">PC Gamer</h3>
                            <p>ASUS RT3600. </p>
                            <h1>$18500.00</h1>
                            <button class="btn btn-primary" data-producto="PC Gamer" data-precio="18500.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/oferta/Ropa2.jfif" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Chamarra Negra</h3>
                            <p>Marca Renegul. </p>
                            <h1>$599.99 </h1>
                            <button class="btn btn-primary" data-producto="Chamarra Negra" data-precio="599.99"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/oferta/Ropa3.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-4">Cachucha</h3>
                            <p>Marca Bass Pro Shops.</p>
                            <h1>$350.00</h1>
                            <button class="btn btn-primary" data-producto="Cachucha" data-precio="350.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/oferta/tienda.png" alt="" style="width: 250px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Despensa</h3>
                            <p>Muchos productos. </p>
                            <h1>$1000.00 </h1>
                            <button class="btn btn-primary" data-producto="Despensa" data-precio="1000.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 id="libros" class="titulo" style="color: black;">Libros</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-4"src="img/libros/DonQuijoteDeLaMancha.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-4">Don Quijote de la Mancha</h3>
                            <p>Don Quijote de la Mancha. <br>
                                Edición Especial de Florencio <br>
                                Sevilla</p>
                            <h1>$890.00</h1>
                            <button class="btn btn-primary" data-producto="Don Quijote de la Mancha" data-precio="890.00">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                  </svg>
                                  Añadir
                                </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-4" src="img/libros/LaBiblia.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">La Biblia</h3>
                            <p>Santa Biblia Version Antigua<br>
                                1909 Letra Gigante Piel Negra<br>
                                Con Indice</p>
                            <h1>$899.90</h1>
                            <button class="btn btn-primary" data-producto="La Biblia" data-precio="899.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-2" src="img/libros/HarryPotter.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3  class="mt-5">Harry Potter</h3>
                            <p>Harry Potter y la piedra <br>
                                filosofal (Ed. Minalima): 1</p>
                            <h1>$229.90</h1>
                            <button class="btn btn-primary" data-producto="Harry Potter" data-precio="229.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img src="img/libros/SeñorDeLosAnillos.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">El Señor de los Anillos</h3>
                            <p>El Señor de los Anillos 1. <br>
                                La Comunidad del Anillo</p>
                            <h1>$985.00</h1>
                            <button class="btn btn-primary" data-producto="El Señor de los Anillos" data-precio="985.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-4" src="img/libros/CienAñosDeSoledad.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Cien años de soledad</h3>
                            <p>Cien años de soledad <br>
                                (Edición 50 Aniversario)</p>
                            <h1>$449.90</h1>
                            <button class="btn btn-primary" data-producto="Cien años de soledad" data-precio="449.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img src="img/libros/ElPrincipito.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">El Principito</h3>
                            <p>El Principito. Edición <br>
                                 especial con estuche.</p>
                            <h1>$269.90</h1>
                            <button class="btn btn-primary" data-producto="El Principito" data-precio="269.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img src="img/libros/HistoriaDeDosCiudades.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-2">Historia de dos ciudades </h3>
                            <p>Historia de dos ciudades —CLÁSICO <br>
                            ILUSTRADO—: (Ilustraciones originales <br>
                            1859) (Spanish Edition)</p>
                            <h1>$299.90 </h1>
                            <button class="btn btn-primary" data-producto="Historia de dos ciudades" data-precio="299.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img src="img/libros/LasAventurasDeSherlockHolmes.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-4">Las Aventuras de Sherlock Holmes</h3>
                            <p>Las Aventuras de Sherlock <br>
                             Holmes Pasta dura - Big Book.</p>
                            <h1>$399.90 </h1>
                            <button class="btn btn-primary" data-producto="Las Aventuras de Sherlock Holmes" data-precio="399.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img src="img/libros/ElCodigoDeDaVinci.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">El Código Da Vinci</h3>
                            <p>El Código Da Vinci, De Dan Brown. <br>
                                 Vol. 1. Editorial Umbriel, Tapa <br>
                                  Dura En Español, 1</p>
                            <h1>$389.90 </h1>
                            <button class="btn btn-primary" data-producto="El Código Da Vinci" data-precio="389.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 id="electronica" class="titulo" style="color: black;">Electronica</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img src="img/electronicos/audifonos.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="">Wireless</h3>
                            <p>Audífonos Inalámbricos Bluetooth Diadema,
                             Auriculares Inalámbrico Diadema Alta Fidelidad Estéreo,Cancelacion de Ruido, Volumen Ajustable, Manos Libre, Plegables, 8 horas de Reproducción Continua</p>
                            <h1>$999.99</h1>
                            <button class="btn btn-primary" data-producto="Wireless" data-precio="999.99"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/electronicos/audifonos2.png" alt="" style="width: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Audifonos Sony</h3>
                            <p>Audifonos Inalambricos Sony RF400 para Televisor -Negro</p>
                            <h1>$2,210.00</h1>
                            <button class="btn btn-primary" data-producto="Audifonos Sony" data-precio="2210.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/electronicos/ethernet.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3  class="mt-2">Cable Ethernet</h3>
                            <p>UGREEN Cable de Red Cat 7, 1M, Cable Ethernet Nylon Trenzado Cable LAN 10000Mbit/s con Conector
                                RJ45 10 Gigabit 600MHz Cable FTP, Compatible con Cat 6/ Cat 5e/ Cat 5 Compatible con PC Macbook PS5</p>
                            <h1>$200.00</h1>
                            <button class="btn btn-primary" data-producto="Ethernet" data-precio="200.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img src="img/electronicos/cargador.png" alt="" style="width: 250px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Super Cargador</h3>
                            <p>1 Hora Cargador IP Carga Rapida, 20W 3A Cargador
                            Tipo C con Cable IP USB C 1M Compatible para IP 14/13/13/12/ 11/X</p>
                            <h1>$500.00</h1>
                            <button class="btn btn-primary" data-producto="Super Cargador" data-precio="500.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/electronicos/TecladoMecanico.png" alt=""style="width: 250px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Telclado Mecanico</h3>
                            <p>YEYIAN Teclado Gaming Spark USB, Mecanico 87 teclas,
                            Español, Switch Rojo, Negro LED RGB (YAT1806)</p>
                            <h1>$576.00</h1>
                            <button class="btn btn-primary" data-producto="Telclado Mecanico" data-precio="576.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/electronicos/Monitor.png" alt="" style="width: 250px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Monitor</h3>
                            <p>Acteck Monitor 21.5" Plano 75 HZ
                                HDMI + VGA + DC Negro Captive SP215</p>
                            <h1>$1,550.00</h1>
                            <button class="btn btn-primary" data-producto="Monitor" data-precio="1550.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/electronicos/laptop.png" alt=""style="width: 250px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-4">Laptop HP Victus</h3>
                            <p>Laptop Gamer HP Victus 15-FB1013DX 15.6” Full HD,
                                AMD Ryzen 5 7535HS 3.30GHz, 8GB, 512GB SSD,
                                NVIDIA GeForce RTX 2050 HP 5-FB1013DX</p>
                            <h1>$14,999.90 </h1>
                            <button class="btn btn-primary" data-producto="Laptop HP Victus" data-precio="14999.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-3" src="img/electronicos/mouse.png" alt="" style="width: 250px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-2">Mouse Gamer</h3>
                                <P>Free wolf X13 Mouse Inalámbrico Gamer,
                                Ratón Inalámbrico Recargable Luz RGB, 7 Botone y
                                3 DPI Ajustable, Clic Silencioso, Reposo Automático,
                                Preciso, Rápido, Ergonómico, para Video Juegos o en Oficina</p>
                            <h1>$399.90</h1>
                            <button class="btn btn-primary" data-producto="Mouse Gamer" data-precio="399.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/electronicos/Pc.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">PC Gaming</h3>
                            <p>Pride Gaming PC Goat i5 13400/ RTX 4060TI/
                                I5 13400/ 32GB / 1TB</p>
                            <h1>$21,899.00</h1>
                            <button class="btn btn-primary" data-producto="PC Gaming" data-precio="21899.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 id="ropa" class="titulo" style="color: black;">Ropa</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-3" src="img/ropa/deeste.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-4">DEESTE</h3>
                            <p>DEESTE Disfraz Peste Negra para Adultos, Disfraz de Epocam, Cosplay Hombre, Steampunk, Accesorios de Halloween, Mujer, Pico, Negro</p>
                            <h1>$499.00</h1>
                            <button class="btn btn-primary" data-producto="DEESTE" data-precio="499.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-4" src="img/ropa/Dikis.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Dikis</h3>
                            <p>Pantalones Cargo Con Bolsillos Y Cordón Ajustable A La Moda Para Hombre</p>
                            <h1>$309.90</h1>
                            <button class="btn btn-primary" data-producto="Dikis" data-precio="309.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-2" src="img/ropa/CNSTORE.png" alt="" style="width: 150px;">
                        </div>
                        <div class="flip-card-back">
                            <h3  class="mt-5">CNSTORE</h3>
                            <p>CNSTORE - Sudadera con capucha para hombre, diseño de Assassins Creed</p>
                            <h1>$649.90</h1>
                            <button class="btn btn-primary" data-producto="CNSTORE" data-precio="649.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/ropa/Adidas.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">Pans Adidas</h3>
                            <p>Conjunto De 2 Piezas, Sudadera Con Capucha De Manga Larga Con Estampado De Mueca Y Pantalones Deportivos De Estilo Callejero Para Bebés Niños
                            </p>
                            <h1>$255.00</h1>
                            <button class="btn btn-primary" data-producto="Pans Adidas" data-precio="255.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="" src="img/ropa/CHB_CHILI.png" alt="" style="width: 115px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">CHB CHILI</h3>
                            <p>CHB CHILI BEANS CLOTHING Pantalones Joggers Cargo para Hombre Gabardina Excelente Calidad</p>
                            <h1>$6090.90</h1>
                            <button class="btn btn-primary" data-producto="CHB CHILI" data-precio="6090.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                             Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-4" src="img/ropa/STRAIGHTFIT.png" alt="" style="width: 150px;">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">STRAIGHT-FIT</h3>
                            <p>GTHTTT Straight-fit Cargo Pant Jogging para Hombre Pants Multi-Bolsillo Convertible Pantalones Pantalones Tipo Cargo Trekking Montaña Escalada Senderismo Secado Rápido</p>
                            <h1>$249.90</h1>
                            <button class="btn btn-primary" data-producto="STRAIGHT-FIT" data-precio="249.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/ropa/Camiseta.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Camisetas</h3>
                            <p>Frog-market Essentials - Camiseta de cuello redondo para hombre, <br> paquete de 6</p>
                            <h1>$599.90</h1>
                            <button class="btn btn-primary" data-producto="Camisetas" data-precio="599.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/ropa/Unbranded.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-4">Unbranded</h3>
                            <p>Unbranded Co-Paquete de Playeras Hombre-2 Playeras Manga Larga Hombre Cuello Redondo-Camisetas para Hombre de Algodón Pima-Spandex-Suave, Ligera y Fresca-Negro y Azul</p>
                            <h1>$949.90</h1>
                            <button class="btn btn-primary" data-producto="Unbranded" data-precio="949.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/ropa/Babyhealthy.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Babyhealthy</h3>
                            <p>Babyhealthy - chamarra universitaria para hombre, diseño de letras, con estampado de letras, para hombre</p>
                            <h1>$559.90</h1>
                            <button class="btn btn-primary" data-producto="Babyhealthy" data-precio="559.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 id="deporte" class="titulo" style="color: black;">Deporte</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/deporte/MochiladeMalla.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-1">Mochila de Malla</h3>
                            <p>Mochila de Malla con Cordón para Gimnasio,Morral Deportivo on Bolsillos a Prueba de Agua,Mochila de Baloncesto con Compartimento Exterior, Adecuada para Playa, Vacaciones, Natación, Viajes, Senderismo</p>
                            <h1>$249.00</h1>
                            <button class="btn btn-primary" data-producto="Mochila de Malla" data-precio="249.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/deporte/BolsadeGimnasio.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-4">Bolsa de Gimnasio</h3>
                            <p>Bolsa de Gimnasio Impermeable Maleta Deportiva para Hombre Mujeres Grande Bolsa de Viaje con Compartimento para Zapatos 40L Mochila Deportiva Negro</p>
                            <h1>$499.90</h1>
                            <button class="btn btn-primary" data-producto="Bolsa de Gimnasio" data-precio="499.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/deporte/Conos.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3  class="mt-1">Conos</h3>
                            <p>YOMYM 50 Paquetes de Conos de Fútbol de Disco de Marcado, Equipo e Entrenamiento e Conos de Fútbol Deportivo para Entrenamiento, Fútbol, Niños, Deportes, Marcadores de Campo Tipo Cono</p>
                            <h1>$269.90</h1>
                            <button class="btn btn-primary" data-producto="Conos" data-precio="269.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/deporte/anteojos.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Anteojos</h3>
                            <p>Anteojos deportivas para niños, para baloncesto, fútbol, entrenamiento seguro, antivaho 7-12</p>
                            <h1>$550.00</h1>
                            <button class="btn btn-primary" data-producto="Anteojos" data-precio="550.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/deporte/SPORTBITBomba.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-2">SPORTBIT Bomba</h3>
                            <p>SPORTBIT Bomba de bola con 5 agujas, sistema de inflado de empuje y tirar, ideal para todas las pelotas deportivas, bomba de voleibol, inflador de baloncesto, bomba de aire de fútbol y pelota de fútbol, combina con juego de agujas</p>
                            <h1>$299.90</h1>
                            <button class="btn btn-primary" data-producto="SPORTBIT Bomba" data-precio="299.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/deporte/Balonvoleibol.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Balon voleibol</h3>
                            <p>Molten - Balon no.5 voleibol v58-r molten</p>
                            <h1>$350.00</h1>
                            <button class="btn btn-primary" data-producto="Balon voleibol" data-precio="350.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/deporte/BalonChampions.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Balon Champions</h3>
                            <p>CSSM 2022 Champions League Football Fans Item Soccer Lovers Gift Regular No. 5 Ball</p>
                            <h1>$399.90</h1>
                            <button class="btn btn-primary" data-producto="Balon Champions" data-precio="399.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/deporte/Rodilleras.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-4">Rodilleras</h3>
                            <p>Rodilleras deportivas, rodilleras de esponja gruesa, rodilleras transpirables para prevención de colisiones para deportes al aire libre, correr, gimnasio, baloncesto, voleibol (negro, 1 par)</p>
                            <h1>$299.90</h1>
                            <button class="btn btn-primary" data-producto="Rodilleras" data-precio="299.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/deporte/GuantesdePortero.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">Guantes de Portero</h3>
                            <p>Guantes de Portero de fútbol para Niños y Jóvenes, Guantes de Fútbol para Entrenamiento y Partido Antideslizantes, Resistentes al Desgaste,Agarre Fuerte y protección para los Dedos -Verde</p>
                            <h1>$300.00 </h1>
                            <button class="btn btn-primary" data-producto="Guantes de Portero" data-precio="300.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 id="hogar" class="titulo" style="color: black;">Hogar</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/hogar/Juegodeutensilios.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-4">Juego de utensilios</h3>
                            <p>Juego de utensilios de cocina, 24 piezas utensilios de cocina de silicona con soporte, resistente al calor y mango de acero inoxidable, espátula, cuchara, pinzas, batidor, tazas medidoras(Negro)</p>
                            <h1>$499.00</h1>
                            <button class="btn btn-primary" data-producto="Wireless" data-precio="999.99"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/hogar/ArmarioMinimalista.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Armario Minimalista</h3>
                            <p>Closet Organizador de Ropa Armario Minimalista , Armable y Portátil Color Gris</p>
                            <h1>$499.90</h1>
                            <button class="btn btn-primary" data-producto="Wireless" data-precio="999.99"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/hogar/OrganizadordeCocina.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3  class="mt-3">Organizador de Cocina</h3>
                            <p>SPOWAY Organizador de Cocina, 2 Niveles, Organizadores de Cocina Debajo del Fregadero con Cajones y 4 Ganchos, Estante de Almacenamiento Multiusos para Baño Cocina (Negro)</p>
                            <h1>$399.90</h1>
                            <button class="btn btn-primary" data-producto="Wireless" data-precio="999.99"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/hogar/IRONSTONEEscritorio.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-1">IRONSTONE Escritorio</h3>
                            <p>Mr IRONSTONE Escritorio en forma de L, escritorio de esquina para computadora, escritorio de juegos en casa, estación de trabajo de escritura de oficina con soporte de monitor grande, ahorro de espacio, fácil de montar, negro</p>
                            <h1>$850.00</h1>
                            <button class="btn btn-primary" data-producto="IRONSTONE Escritorio" data-precio="850.00"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/hogar/EstantedeOllas.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">Estante de Ollas</h3>
                            <p>INGEQUIS Estante de Ollas, Organizador Ajustable de 8 Capas para Ordenar Ollas, Sartenes y Tapas, Resistente y Estable para Ahorrar Espacio en Cocina, Facil Ensamblaje(8Capas Vertical)</p>
                            <h1>$329.90</h1>
                            <button class="btn btn-primary" data-producto="Estante de Ollas" data-precio="329.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/hogar/SillonOcasional.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">Sillon Ocasional</h3>
                            <p>MO GDL DESIGNS Sillon Ocasional Salvatore Madera solida de Parota, Tapizado en Elegante Tela importada de fácil Limpieza, Durable, Acabado detallado, Mid-Century</p>
                            <h1>$4949.90</h1>
                            <button class="btn btn-primary" data-producto="Sillon Ocasional" data-precio="4949.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/hogar/EstanteparaBaño.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-1">Estante para Baño</h3>
                            <p>TECHVIDA Estante para Baño Organizador Inodoro, Estante de Almacenamiento para Baño sobre Organizador de Inodoro Hogar, 3 Niveles de Estantes Impermeables y Inoxidable, Ahorre Espacio - 1 Pieza</p>
                            <h1>$549.90</h1>
                            <button class="btn btn-primary" data-producto="Estante para Baño" data-precio="549.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/hogar/Alfombra.jpg" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-2">Alfombra</h3>
                            <p>MAOXINGREN Alfombra Moderna para Sala de Estar - Tapete de Felpa Súper Suave y Esponjoso para Recámara y Dormitorio, Alfombra de Felpa Antideslizante, decoración del hogar(Negro)</p>
                            <h1>$339.90</h1>
                            <button class="btn btn-primary" data-producto="Alfombra" data-precio="339.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="flip-card clickable">
                    <div class="flip-card-inner clickable">
                        <div class="flip-card-front">
                            <img class="mt-5" src="img/hogar/SofáInflable.png" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-5">Sofá Inflable</h3>
                            <p>El Código Da Vinci, De Dan Brown. <br>
                                 Vol. 1. Editorial Umbriel, Tapa <br>
                                  Dura En Español, 1</p>
                            <h1>$599.90</h1>
                            <button class="btn btn-primary" data-producto="Sofá Inflable" data-precio="599.90"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                              Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <!-------------------------- Carrito 1 ------------------------>
     <!-----------Cierre Fondo Tienda------------->
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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Contacto</h4>
                <p><strong>Dirección:</strong> Fransico I Madero #69</p>
                <p><strong>Teléfono:</strong> 449-756-4013</p>
                <p><strong>Email:</strong> alex132moreno@gmail.com</p>
            </div>
            <div class="col-md-4">
                <h4 style="text-align: center;">Enlaces Rápidos</h4>
                <ul class="enlaces-rapidos">
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Productos.php">Productos</a></li>
                    <li><a href="https://wa.me/qr/5LWA4JBV67GBL1">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Síguenos en Redes Sociales</h4>
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
   <script src="JS/ofertas.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</body>
</html>