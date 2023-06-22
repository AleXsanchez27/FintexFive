<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $marca = $_POST["marca"];
    $año = $_POST["año"];
    $velocidad = $_POST["velocidad"];
    $rodado = $_POST["rodado"];

     $sql = "INSERT INTO autos (nombre, marca, año, velocidad, rodado)" .
    "VALUE ('".$nombre."', '.$marca.', '".$año."', '".$velocidad."', '".$rodado."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: " .$sql. "<br>" .$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }
    $conexion->close();
?>