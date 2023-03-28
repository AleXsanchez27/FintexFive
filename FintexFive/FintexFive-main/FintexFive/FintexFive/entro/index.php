<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos AL</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<style>
    .fondo{
      background: rgb(255,0,0);
      background: linear-gradient(0deg, rgba(255,0,0,1) 0%, rgba(0,00,0,1) 74%);
    }
    
</style>
<body class="fondo">
  <?php include 'menu.php'; ?>
  <br><br>
    
  <!-- 1er carousel -->
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="Imagenes/camioetaa.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Imagenes/frente 2.PNG" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Imagenes/atras.PNG" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
    </div>
  </div>

  <br>
  <br><br><br><br>
  <footer class="text-center">
      <br><br><br><br><br><br>    
      2022 &copy; Cetis107 Autos AL
  </footer>
  <script src="js/bootstrap.js"></script>
</body>
</html>