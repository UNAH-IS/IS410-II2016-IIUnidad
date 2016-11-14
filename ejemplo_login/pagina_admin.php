<?php session_start(); 
	if(!isset($_SESSION['codigo_usuario']))
		header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Página Admin</h1>
	<?php 
		echo $_SESSION["codigo_usuario"];
		echo $_SESSION["nombre_usuario"];
		echo $_SESSION["codigo_tipo_usuario"];
	?>
	<a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>