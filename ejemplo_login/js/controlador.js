$(document).ready(function(){
	$("#btn-login").click(function(){
			var parametros = "inputEmail=" +$("#inputEmail").val() + 
						"&inputPassword="+$("#inputPassword").val();
			alert(parametros);
			$.ajax({
				url:"ajax/acciones_login.php?accion=1",
				method: "POST",
				data: parametros,
				dataType: 'html	',
				success:function(resultado){
					alert(resultado);
				},
				error:function(){

				}
		});
	});	
});

