<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/lo.css">
        <title>Ticket</title>
</head>
<body onload='deshabilitaRetroceso();'>
    <!-------------------------- Titulo ------------------------>
    <section>
    <div class="anime container-titulo d-flex justify-content-center align-items-center" style="background: linear-gradient(to right, #a4fff7, #039554), url('Img/Logo1.png'); background-size: cover; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); height: 100px; margin: 10px;">
        <div class="logo-container">
            <a href="Index.php"><img class="logo" src="Img/Logo1.png" alt="" style="width: 150px;"></a>
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
                            <a class="nav-link active" aria-current="page" href="ofer">Ofertas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Producto</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">              
                            <a class="dropdown-item" href="ofertas.php">Ofertas</a>
                            <a class="dropdown-item" href="electronica.php">Electronica</a>
                            <a class="dropdown-item" href="libros.php">Libros</a>
                            <a class="dropdown-item" href="ropa.php">Ropa</a>
                            <a class="dropdown-item" href="deporte.php">Deportes</a>
                            <a class="dropdown-item" href="hogar">Hogar</a>
                         </div>
                        </li>                         
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="comentarios.php">Comentarios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Más</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">              
                            <a class="dropdown-item" href="Desarrolladores.html">Desarrolladores</a>
                            <a class="dropdown-item" href="Recomendaciones.html">Recomendaciones</a>
                            <a class="dropdown-item" href="reseñas.html">Reseñas</a>
                         </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div> <!----cierre div de Titulo---->
    <div class="container mt-5" id="carrito-container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <aside class="col-12">
                    <h2 style="color: #000; text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path style="fill: green;" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>    
                        <br>
                        ¡Compra exitosa!
                    </h2>
                    <hr>
                    <button id="boton-editar" class="btn btn-danger" style="text-align: center; color: white; margin: 10px">
                        Seguir editando
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                    </button>
                    <button id="boton-comprar" class="btn btn-primary" style="text-align: center; color: white;">
                        <a id="ca" href="index.php">Confirmar envio</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                            <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                          </svg>
                    </button>
                </aside>
            </div>
        </div>
    </div>
    <section class="form-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-4">
                    <h3 class="">Pais/Región</h3>
                    <input type="text" class="controls" name="Pais" id="pais" placeholder="Ingresa tu Pais/Región">
                    <h3 class="">Nombre</h3>
                    <input type="text" class="controls" name="nombre" id="nombre" placeholder="Ingresa tu nombre">
                    <h3 class="">Apellido</h3>
                    <input type="text" class="controls" id="apellido" name="apellido" placeholder="Ingresa tu apellido">
                    <h3 class="">Codigo postal</h3>
                    <input type="text" class="controls" id="codigoPostal" name="codigoPostal" placeholder="p. ej. 12345">
                    <h3 class="">Estado/Provincia</h3>
                    <input type="text" class="controls" id="estado" name="estado" placeholder="Ingresa tu Estado/Provincia">
                    <h3 class="">Ciudad</h3>
                    <input type="text" class="controls" id="ciudad" name="ciudad" placeholder="Ingresa tu ciudad">
                    <h3 class="">Colonia</h3>
                    <input type="text" class="controls" id="colonia" name="colonia" placeholder="Ingresa tu colonia">
                    <h3 class="">Telefono</h3>
                    <input type="tel" class="controls" id="telefono" name="telefono" placeholder="Ingresa tu telefono">
                    <h3 class="">Domicilio</h3>
                    <input type="text" class="controls" id="domicilio" name="domicilio" placeholder="Calle y Numero">
                    <h3 class="">Correo</h3>
                    <input type="email" class="controls" id="correo" name="correo" placeholder="Ingresa tu correo electronico">
                    <center>
                        <button type="submit" id="botons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                              </svg>
                            Comprar
                        </button>
                    </center>
                </div>
            </div>
        </div>
    </section>

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

function deshabilitaRetroceso() {
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button"; // Para Chrome
    window.onhashchange = function() {
        window.location.hash="no-back-button";
    }
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
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>
<script src='cordova.js'></script>
<script src='JS/lo.js'></script>
</body>
</html>