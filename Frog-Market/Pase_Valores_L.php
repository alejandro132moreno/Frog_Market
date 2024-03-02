<?php
$usuario=$_POST["usuario"];
$pass=$_POST["password"];
session_start();
$_SESSION['usuario']=$usuario;

include("conexion.php");
//$conexion=mysqli_connect("localhost","root","","frog_market");

$consulta="SELECT*FROM registro_login where usuario='$usuario'and contraseña='$pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) 
{
  header("location:Index.php");
}
else {
  ?>
  <?php
  header("location:indexlogin.php");
  ?>
  <h1 class="bad">Ingresa de nuevo tus datos</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);