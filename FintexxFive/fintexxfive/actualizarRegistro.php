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
    $id = $_GET["id"];
    $sql = "SELECT * FROM autos WHERE id=".$id;
    $resultado = $conexion->query($sql);
    $registro = $resultado->fetch_assoc();
    ?>

    <?php
      include 'menu.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Constructoras</h1><hr>
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>"> 
                    <div class="form-group">
                        <label for="">nombre:</label>
                        <input value="<?php echo $registro["nombre"];?>" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">marca:</label>
                        <input value="<?php echo $registro["marca"];?>" type="text" class="form-control" name="marca" placeholder="Teclea la marca">
                    </div>

                    <div class="form-group">
                        <label for="">año:</label>
                        <input value="<?php echo $registro["año"];?>" type="text" class="form-control" name="año" placeholder="Teclea el año">
                    </div>

                    <div class="form-group">
                        <label for="">velocidad:</label>
                        <input value="<?php echo $registro["velocidad"];?>" type="text" class="form-control" name="velocidad" placeholder="Teclea la velocidad">
                    </div>

                    <div class="form-group">
                        <label for="">rodado:</label>
                        <input value="<?php echo $registro["rodado"];?>" type="text" class="form-control" name="rodado" placeholder="Teclea el rodado">
                    </div>
                
                    <div>
                        <input type="submit" class="btn btn-warning" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
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
