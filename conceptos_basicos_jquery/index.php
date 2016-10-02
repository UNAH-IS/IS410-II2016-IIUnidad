<!DOCTYPE html>
<html>
<head>
	<title>Hola Mundo en JS</title>
	<meta charset="UTF8">
	<style>
		.texto-cool{
			border-color: #FF0000;
			border-width: 5px;
			border-style: solid;
			background-color: #000000;
			color:#ffffff;
			font-size: 60px;
		}
	</style>
</head>
<body>
	<div class="texto-cool">Prueba</div><br>
	<div class="texto-cool"></div><br>
	<div class="texto-cool"></div><br>
	<div class="texto-cool"></div><br>
	<div class="texto-cool"></div><br>
	<div class="texto-cool"></div><br>

	<input type="text" id="txt-texto" name="txt-texto">
	<button id ="btn-mostrar-valor">Mostrar valor</button>
	<button id = "btn-asignar-valor">Asignar valor</button><br>
	<div id="div-contenido"></div>
	<button id="btn-llenar-div">Llenar contenido</button>
	<button id="btn-click-aqui">Click aquí</button><br>
	<span id="span-mensaje"><b>Hola mundo</b></span>
	<button id="btn-mostrar-mensaje">Mostrar mensaje del span</button>
	<br><img id="vegeta" src="img/vegeta.jpg"><br>
	<button onclick="mostrarImagen();">Mostrar Imagen</button>
	<button onclick="ocultarImagen();">Ocultar Imagen</button>
	<?php
		$mensaje = "Hola mundo";
		echo $mensaje;
	?><br>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/funciones.js"></script>
</body>
</html>