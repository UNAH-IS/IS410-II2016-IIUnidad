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
	<button id="btn-ingresar" class="btn btn-primary">Ingresar</button>
	<div id="div-respuesta" class="well"></div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			///alert("Estamos ready");
			$("#btn-ingresar").click(function(){
				var parametros = "txt-usuario="+$("#txt-usuario").val()+"&"+"txt-contrasena="+$("#txt-contrasena").val(); //formato similar a cuando se envia la informacion por GET
				//URL?parametro1=valor1&parametro2=valor2&.....parametroN=valorN
				alert("Informacion que se enviara: " + parametros);
				$.ajax({
					url:"ajax/procesar.php",
					method:"POST",
					data: parametros,
					success:function(respuesta){
						$("#div-respuesta").html(respuesta);
					}
				});	
			});			
		});
	</script>
</body>
</html>