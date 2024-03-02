<?php
$conexion=mysqli_connect("localhost", "root", "", "frog_market");

if (!$conexion) 
{
	die("Error al conectar con la base de datos");
}

if(isset($_POST['registrar']))
{

    $nombre=$_POST['nombre'];
    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];
    $password=$_POST['contrasena'];
    $confirm_password=$_POST['concontrasena'];

    if($confirm_password !== $password)
    {
        echo '<script>alert("Las contraseñas no coinciden.");</script>';
    }
    else
    {
        $insertar="INSERT INTO registro_login(nombre,usuario,correo,contraseña)VALUES('$nombre','$usuario','$correo','$password')";

        //ejecutar consulta
        $resultado=mysqli_query($conexion,$insertar);

        //verificar si hubo error al insertar el comentario
        if (!$resultado) 
		{
            echo"Error al registrar el comentario";          
        } 
		else 
		{
            header('Location: indexlogin.php');        
        }   
    }
    
}
?>