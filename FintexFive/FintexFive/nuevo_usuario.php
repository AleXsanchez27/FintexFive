


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>

<style>
    body{
        background-color: #58D68D;
    }

    .rectangulo {
  width: 1325px; /* Ancho del rectángulo */
  height: 100px; /* Altura del rectángulo */
  background-color: #145A32; /* Color de fondo del rectángulo */
  border: 1px solid #000; /* Grosor y color del borde */
  padding: 10px; /* Espacio alrededor del contenido */
}
</style>
<body>
<div class="rectangulo">
<center><h1><p style="color: yellow;">FintexFive</p></h1></center>
</div>

<div class="card text-center" style="width: 320px; margin: auto; width: 18rem;">
    <img src="imagenes/LogoFintex.png" class="card-img-top" alt="...">
    <center><p>FintexFive La mejor empresa para hacerte millonario</p> </center>
    <div class="card-body">
    <form action="nuevo_usuario2.php" method="POST" > 

   <label for="" style="text-align: center ">Correo:</label> 
            <div class="form-row">
                <input name="correo" type="text" class="form-control" placeholder="Nombre de usuario" required>  
            </div>
            <br>
            <label for="">Nombre:</label>
            <div class="form-row">
                <input name="nombre" type="text" class="form-control" placeholder="Contraseña" required>
            </div>
            <br>
            <label for="">Contraseña</label>
            <div class="form-row">
                <input name="contrasena" type="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">   Crear usuario  </button>
            <br>

        </form>
    </div> 
</div>
<center><footer class="text-center"><a class="text-light">
      <br><br><br><br><br><br>    
      2022 &copy; Cetis107 FintexFive
  </footer></a></center>
    <script src="js/bootstrap.js"></script>
</body>
</html>