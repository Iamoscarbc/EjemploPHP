<?php
session_start();

if (isset($_SESSION['u_user'])) {
  
}else {
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>USUARIOS</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(0, 0, 0);">
      <a class="navbar-brand" href="tabla.php">Usuarios</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0" style="padding-left:1250px;">
          <a class="btn btn-danger my-2 my-sm-0" href="logout.php">Cerrar Sesión</a>
        </form>
      </div>
    </nav>
    <div class="container" style="padding-top:50px;">
      <a class="btn btn-lg btn-success" href="registro.php">Nuevo</a>
      <br>
      <br>
      <div class="row">
        <div class="col">
          <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col" colspan="2">Operaciones</th>
              </tr>
            </thead>
            <?php
            include("conexion.php");

            $query="SELECT * FROM usuarios";
            $resultado = $conexion->query($query);

            while ($row=$resultado->fetch_assoc()) {
            ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $row['id'] ?></th>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><a class="btn btn-primary" href="seleccionar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
