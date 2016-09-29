<!DOCTYPE html>
<html>
<head>
	<title>Hola Mundo en JS</title>
	<meta charset="UTF8">
</head>
<body>
	<input type="text" id="txt-texto" name="txt-texto">
	<button onclick="mostrarValor();">Mostrar valor</button>
	<button onclick="asignarValor();">Asignar valor</button><br>
	<div id="div-contenido"></div>
	<button onclick="llenarDiv();">Llenar contenido</button>
	<input type="button" value="Click aquí" onclick="alert('Hola mundo, presionaste un boton')"><br>
	<button onclick="clickAqui();">Click aquí</button><br>
	<span id="span-mensaje"><b>Hola mundo</b></span>
	<button onclick="mostrarMensaje();">Mostrar mensaje del span</button>
	<?php
		$mensaje = "Hola mundo";
		echo $mensaje;
	?><br>
	<script type="text/javascript" src="js/funciones.js">		
	</script>
</body>
</html>