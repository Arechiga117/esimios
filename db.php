<?php
    // $conexion=mysqli_connect("localhost","root","","prepa_esimia") or die("error de conexion");
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conexion=mysqli_connect("localhost",$email,$password,"prepa_esimia") or die("error de conexion");
    $_SESSION['conexion'] = $conexion;
?>