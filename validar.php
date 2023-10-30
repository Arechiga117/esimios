<?php
include('db.php');
$email=$_POST['email'];
// echo($email);
$password=$_POST['password'];
// echo($password);

$consulta="SELECT*FROM admins where mail='$email' and pass='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  header("location:home.php");
}else{
  ?>
  <?php
    include("iniciar.html");
  ?>
  <div class="contenedor"><p class="bad">ERROR DE AUTENTIFICACION</p></div>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
