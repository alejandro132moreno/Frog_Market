<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/Style.CSS">
        <link rel="stylesheet" href="css/index.css">
        <title>Registro</title>
    </head>
    <body class="fondo" style="background-image: url(img/rana.jpg);">
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

        <section class="form-register">
           <form action="Pase_Valores_R.php" method="POST">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-4">
                        <h3 class="text-center" style="color: red;">Nombre Completo:</h3>
                        <input type="text" class="controls" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required>
                        <h3 class="text-center" style="color: red;">Usuario:</h3>
                        <input type="text" class="controls" id="usuario" name="usuario" placeholder="Genera un usuario" required>
                        <h3 class="text-center" style="color: red;">Correo:</h3>
                        <input type="email" class="controls" id="correo" name="correo" placeholder="Ingresa tu correo electronico" required>
                        <h3 class="text-center" style="color: red;">Contraseña:</h3>
                        <input type="password" class="controls" id="contrasena" name="contrasena" placeholder="Crea una contraseña" required>
                        <h3 class="text-center" style="color: red;">Confirmar Contraseña:</h3>
                        <input type="password" class="controls" id="concontrasena" name="concontrasena" placeholder="Confirma tu contraseña" required>
                        <center><input type='submit' class="btn botons btn-login btn-block" name="registrar" value="Registrar"></center>
                    </div>
                </div>
            </div>
          </form>
        </section>
        <?php 
	/*La función isset() verifica si una variable está configurada, lo que significa que debe declararse y no es NULL.
	Esta función devuelve verdadero si la variable existe y no es NULL, de lo contrario devuelve falso.*/
		if(isset($_POST['registrar']))
		{
			require("Pase_Valores_R.php");
		}
	 ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="cordova.js"></script>
    <script src="js/index.js"></script>
    </body>
</html>
