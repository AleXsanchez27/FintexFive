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
    <?php include 'menu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registro de Constructoras</h1><hr>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Telefono:</label>
                        <input type="text" class="form-control" name="marca" placeholder="Teclea El telefono">
                    </div>

                    <div class="form-group">
                        <label for="">Ubicacion:</label>
                        <input type="text" class="form-control" name="año" placeholder="Teclea la ubicacion">
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion de su empresa:</label>
                        <input type="text" class="form-control" name="velocidad" placeholder="Teclea la descripcion">
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
