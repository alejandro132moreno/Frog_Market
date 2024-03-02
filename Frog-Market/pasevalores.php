<?php
$conexion=mysqli_connect("localhost","root","","frog_market");
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];



$consulta="SELECT * FROM registro_login WHERE usuario = $usuario and contraseña = $contraseña";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:Index.php");

}else{
    ?>
    <?php
    include("indexlogin.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);