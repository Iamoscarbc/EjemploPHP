<?php

  include('conexion.php');

  $id=$_REQUEST['id'];
  $nombre=$_POST['nombre'];
  $email=$_POST['email'];

  $query="DELETE FROM usuarios WHERE id='$id'";
  $resultado = $conexion->query($query);

  if ($query) {
    header('Location: tabla.php');
  }else {
    echo 'error';
  }

 ?>
