<?php

    NuevoUsuario($_POST['correo'],$_POST['nombre'],$_POST['contraseña']);

    function NuevoUsuario($correo, $usuario, $contraseña){
        include 'conexionConBD.php';

        $sentencia="INSERT INTO usuarios (correo, usuario, contraseña) 
        VALUES('".$correo."','".$usuario."','".$contraseña."')   ";

        $conexion->query($sentencia);

        echo '<script>';
            echo 'window.location.href="entro/index.php";';
        echo '</script>';
    }