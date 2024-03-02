<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Style.CSS">
    <link rel="stylesheet" href="CSS/stylecomentarios.css">
    <title>Comentarios</title>
</head>
<body style="background-image: url(img/coments.png);">
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
    <div class="container">
        <h1 class="my-4" style="text-align: center;">Deja un comentario</h1>
        <form action="registocomentarios.php" method="POST">
            <div class="form-group" style="text-align: center;">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
            </div><br>
            <div class="form-group" style="text-align: center;">
              <label for="correo">Correo electrónico</label>
              <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" placeholder="Ingresa tu correo" required>
          </div><br>
            <div class="form-group" style="text-align: center;">
                <label for="comentario">Comentario:</label>
                <input class="form-control" id="comentario" name="comentario" placeholder="Ingresa tu comentario" required></input><br><br> 
            </div> 
            <center><input type="submit" name="registrar" class="btn btn-danger btn-block" value="Enviar"></center>
        </form>
    </div>

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

    <?php 
	/*La función isset() verifica si una variable está configurada, lo que significa que debe declararse y no es NULL.
	Esta función devuelve verdadero si la variable existe y no es NULL, de lo contrario devuelve falso.*/
		if(isset($_POST['registrar']))
		{
			require("registocomentarios.php");
		}
	 ?>
</body>
</html>