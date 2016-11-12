<?php
	switch ($_GET["accion"]) {
		case '1': //Guardar
			echo "Correo enviado" . $_POST["inputEmail"];
			echo ", Password enviado" . $_POST["inputPassword"];
			include_once("../class/class_conexion.php");
			include_once("../class/class_usuario.php");
			$conexion = new Conexion();
			Usuario::verificarUsuario($conexion,$_POST["inputEmail"],$_POST["inputPassword"]);
			break;
	default:
			# code...
			break;
	}
	
?>