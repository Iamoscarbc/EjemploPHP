<?php

  include("conexion.php");

  $id=$_REQUEST['id'];
  $Nombre=$_POST['nombre'];
  $Email=$_POST['email'];

  $query="UPDATE usuarios SET nombre='$Nombre', email='$Email' WHERE id='$id'";
  $resultado = $conexion->query($query);

  if ($query) {
    header("Location: tabla.php");
  }else {
    echo 'ERROR';
  }

 ?>
