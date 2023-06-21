<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        include 'menu.php';
        if($_GET["termino"] == ""){
    ?>

            <div class="alert alert-danger">No existen registros con este termino de búsqueda</div><br><br>
            <a href="Index.php"class="btn btn-dark">Regresar</a>
    <?php } else { 
        $sql="SELECT * FROM autos WHERE nombre LIKE '%" .$_GET["termino"] . "%'";
        $usuarios = $conexion->query($sql);
        if($usuarios->num_rows == 0) {
            echo "<div class='alert alert-danger'>No existen registros con este termino de búsqueda</div><br><br>";
        } else {
    ?>
        <div class="container">
        <div class="row">
        <div class="col-12">
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>nombre</th>
                <th>Telefono</th>
                <th>Ubicacion</th>
                <th>Descripcion</th>
                
            </thead>
            <tbody>
                <?php while($row = $usuarios->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["Telefono"]; ?></td>
                        <td><?php echo $row["Ubicacion"]; ?></td>
                        <td><?php echo $row["Descripcion"]; ?></td>
                       
                        <td>
                            <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                            <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div></div></div>
    <?php } } ?>
    <script src="js/bootstrap.js"></script>
</body>
</html>