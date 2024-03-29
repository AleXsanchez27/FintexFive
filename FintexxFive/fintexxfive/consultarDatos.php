<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FintexFive</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>

    <?php
      include 'conexion.php';
      $sql = "select * from autos";
      $datos = $conexion->query($sql);

    ?>

    <?php
      include 'menu.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>telefono</th>
                            <th>ubicacion</th>
                            <th>descripcion</th>
                            
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 
                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["telefono"]; ?></td>
                            <td><?php echo $row["ubicacion"]; ?></td>
                            <td><?php echo $row["descripcion"]; ?></td>
                            
                            <td>
                                <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Editar</a>
                                <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2023 &copy; FintexFive
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>