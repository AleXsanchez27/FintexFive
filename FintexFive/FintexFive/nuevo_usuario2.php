<?php

    NuevoUsuario($_POST['correo'],$_POST['nombre'],$_POST['contrasena']);

    function NuevoUsuario($correo, $nombre, $contrasena){
        include 'conexionConBD.php';

        $sentencia="INSERT INTO usuarios (correo, nombre, contraseña) 
        VALUES('".$correo."','".$nombre."','".$contrasena."')   ";

        $conexion->query($sentencia);

        echo '<script>';
            echo 'window.location.href="entro/index.php";';
        echo '</script>';
    }