<?php

  session_start();

  $user=$_POST['user'];
  $password=$_POST['password'];

  include("conexion.php");

  $proceso=$conexion->query("SELECT * FROM login WHERE usuario='$user' AND password='$password'");

  if($resultado = mysqli_fetch_array($proceso)){
    $_SESSION['u_user'] = $user;
    header('Location: tabla.php');
  }else {
    header('Location: index.php');
  }

 ?>
