<?php
	ConsultarUsuario($_POST['inputUsuario'], $_POST['inputcontrasena']);

	function ConsultarUsuario($usuario, $contraseña)
	{
		include 'conexionConBD.php';
		$sentencia= "SELECT * FROM usuarios 
        WHERE usuario='".$usuario."' AND contraseña='".$contraseña."' OR  correo='".$usuario."'";
		$resultado=$conexion->query($sentencia);

		$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

		if($count > 0) //si la variable count es mayor a 0
		{
			echo '<script>';
				echo 'window.location.href="entro/index.php";';
			echo '</script>';
		}
		else
		{
			echo '<script>';
				echo 'window.alert("Usuario, correo o contraseña Incorrecta");';
				echo 'window.location.href="index.php";';
			echo '</script>';
		}
	}
?>