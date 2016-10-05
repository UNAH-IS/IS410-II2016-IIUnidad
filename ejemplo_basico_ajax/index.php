<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo AJAX</title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<input type = "text" id="txt-usuario" placeholder="Usuario" class="form-control"><br> 
	<input type = "password" id="txt-contrasena" placeholder="Contraseña"  class="form-control"><br> 
	<button id="btn-ingresar" class="btn btn-primary"  data-loading-text="Guardando..." autocomplete="off">Ingresar</button>
	<button id="btn-obtener-informacion" class="btn btn-danger"  data-loading-text="Obteniendo informacion..." autocomplete="off">Obtener informacion</button>
	<img id="img-loading" src="img/loading.gif" style="display:none;">
	<div id="div-respuesta" class="well"></div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			///alert("Estamos ready, el DOM fue cargado");
			$("#btn-ingresar").click(function(){
				$("#btn-ingresar").button("loading");
				$("#img-loading").fadeIn(200);
				var parametros = "txt-usuario="+$("#txt-usuario").val()+"&"+"txt-contrasena="+$("#txt-contrasena").val(); //formato similar a cuando se envia la informacion por GET
				//parametro1=valor1&parametro2=valor2&.....parametroN=valorN
				alert("Informacion que se enviara: " + parametros);
				$.ajax({
					url:"ajax/procesar.php?accion=guardar",
					method:"POST",
					data: parametros,
					success:function(respuesta){
						$("#img-loading").fadeOut(200);
						$("#btn-ingresar").button("reset");
						$("#div-respuesta").html(respuesta);
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
			});	

			$("#btn-obtener-informacion").click(function(){
				$("#btn-obtener-informacion").button("loading");
				$("#img-loading").fadeIn(200);
				$.ajax({
					url:"ajax/procesar.php?accion=obtener",
					method:"POST",
					success:function(respuesta){
						$("#img-loading").fadeOut(200);
						$("#btn-obtener-informacion").button("reset");
						$("#div-respuesta").html(respuesta);
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
			});
		});
	</script>
</body>
</html>