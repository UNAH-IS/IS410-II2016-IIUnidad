	<?php
	session_start(); 
	switch ($_GET["accion"]) {
		case '1': //Guardar
			//echo "Correo enviado" . $_POST["inputEmail"];
			//echo ", Password enviado" . $_POST["inputPassword"];
			include_once("../class/class_conexion.php");
			include_once("../class/class_usuario.php");
			$conexion = new Conexion();
			$respuesta = Usuario::verificarUsuario($conexion,$_POST["inputEmail"],$_POST["inputPassword"]);
			$_SESSION["codigo_usuario"] = $respuesta["codigo_usuario"];
			$_SESSION["nombre_usuario"] = $respuesta["nombre_usuario"];
			$_SESSION["codigo_tipo_usuario"] = $respuesta["codigo_tipo_usuario"];
			echo json_encode($respuesta);
			break;
	default:
			# code...
			break;
	}
	
?>