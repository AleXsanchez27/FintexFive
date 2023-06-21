<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de interaccion con DB</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
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

    <div class="container">
    <div class="col-12">
    <div class="jumbotron bg-light text-dark">
    

        <div class="text-center">
        <center><h2>Iniciar sesion</h2></center>
            <form  method="POST" action="procesarLogin.php" >
                <br><br>
                <br><br>
                <img src="Imagenes/LogoFintex.png" style="float: left"  width="340px" class="img-thumbnail">

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Nombre usuario O Correo</label>
                        <input name="inputUsuario" type="text" class="form-control" placeholder="Nombre de usuario" required>  
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip02">Contraseña</label>
                        <input name="inputPassword" type="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">  Iniciar sesión  </button>
                        <a href="nuevo_usuario.php"><button type="button" class="btn btn-primary">Nuevo usuario</button></a>
                    
                    </div>
                </div>
                <br>
            </form>

        </div>
    </div>
    </div>
    </div>


    

    <center><footer class="text-center"><a class="text-light">
      <br><br><br>
      <br><br><br>  
      <br><br><br>    
      <br><br><br>    
      <br><br><br>    
        
      2022 &copy; Cetis107 FintexFive
  </footer></a></center>
    <script src="js/bootstrap.js"></script>
</body>
</html>