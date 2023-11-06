<?php
session_start();
include('db.php');
$conexion = $_SESSION['conexion'];

if($conexion){
  header("location:home.html");
}else{
  ?>
  <?php
    include("iniciar.html");
  ?>
  <div class="contenedor"><p class="bad">ERROR DE AUTENTIFICACION</p></div>
  <?php
}
mysqli_free_result($resultado);
