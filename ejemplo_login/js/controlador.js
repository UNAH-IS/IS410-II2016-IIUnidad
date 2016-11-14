$(document).ready(function(){
	$("#btn-login").click(function(){
			var parametros = "inputEmail=" +$("#inputEmail").val() + 
						"&inputPassword="+$("#inputPassword").val();
			alert(parametros);
			$.ajax({
				url:"ajax/acciones_login.php?accion=1",
				method: "POST",
				data: parametros,
				dataType: 'json	',
				success:function(respuesta){
					$("#resultado").html(respuesta.resultado + "Tipo Usuario: " + respuesta.codigo_tipo_usuario);
					if(respuesta.codigo_tipo_usuario =='1')
						window.location="pagina_cajero.php";
					else if(respuesta.codigo_tipo_usuario =='2')
						window.location="pagina_admin.php";
				},

				error:function(){

				}
		});
	});	
});

