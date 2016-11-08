function actualizarAplicacion(codigoAplicacion){
	
	$.ajax({
			url:"ajax/acciones.php?accion=3",
			method: "POST",
			data: "codigo_aplicacion="+codigoAplicacion,
			dataType: 'json',
			success:function(resultado){
				$("#txt-aplicacion").val(resultado.nombre_aplicacion);
				$("#txt-descripcion").val(resultado.descripcion);
			},
			error:function(){

			}
	});
} 	
$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var categoriasSeleccionadas="";
		
		$("input[name='chkcategorias[]']:checked").each(function(){
			categoriasSeleccionadas+="categorias[]="+$(this).val()+"&";
		});


		//Otra forma de enviar la inforamcion es con FormData
		var parametros=
			"txt-aplicacion="+$("#txt-aplicacion").val()+
			"&txt-descripcion="+$("#txt-descripcion").val()+
			"&txt-fecha-publicacion="+$("#txt-fecha-publicacion").val()+
			"&txt-fecha-actualizacion="+$("#txt-fecha-actualizacion").val()+
			"&txt-calificacion="+$("#txt-calificacion").val()+
			"&txt-url="+$("#txt-url").val()+
			"&txt-tamanio="+$("#txt-tamanio").val()+
			"&"+categoriasSeleccionadas+
			"txt-version="+$("#txt-version").val()+
			"&slc-desarrollador="+$("#slc-desarrollador").val()+
			"&slc-icono="+$("#slc-icono").val();

		alert(parametros);
		//$.post $.get
		$.ajax({
			url:"ajax/acciones.php?accion=1",
			method: "POST",
			data: parametros,
			success:function(resultado){
				$("#resultado").html(resultado);
				cargarTarjetas();
			},
			error:function(){

			}
		});
	});

	cargarTarjetas = function(){
		$.ajax({
			url:"ajax/acciones.php?accion=2",
			method: "POST",
			success:function(resultado){
				$("#div-lista-aplicaciones").html(resultado);
			},
			error:function(){

			}
		});
	}
	cargarTarjetas();
});

