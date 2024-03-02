<?php
/*
$usuario="root";
$contraseña="";
$servidor="localhost";
$baseDeDatos="frog_market";
*/
$conexion=mysqli_connect("localhost", "root", "", "frog_market");

if (!$conexion) {
	die("Error al conectar con la base de datos");
}

$nombre_comentario=$_POST['nombre'];
$correo=$_POST['correo'];
$comentario=$_POST['comentario'];

$insertar="INSERT INTO comentarios(nombre,correo,comentario)VALUES('$nombre_comentario','$correo','$comentario')";

//ejecutar consulta
$resultado=mysqli_query($conexion,$insertar);

//verificar si hubo error al insertar el comentario
if (!$resultado) {
	echo"Error al registrar el comentario";		
} else 
{
	header('Location: Index.php');
}	

?>