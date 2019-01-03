<?php

  include("conexion.php");

  $Nombre=$_POST['nombre'];
  $Email=$_POST['email'];

  $query="INSERT INTO usuarios(nombre,email) VALUES('$Nombre','$Email')";
  $resultado = $conexion->query($query);

  if ($query) {
    header("Location: tabla.php");
  }else {
    echo 'Inserción no exitosa';
  }

 ?>
