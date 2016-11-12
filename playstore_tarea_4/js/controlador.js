function editarAplicacion(codigoAplicacion){
	
	$.ajax({
			url:"ajax/acciones.php?accion=3",
			method: "POST",
			data: "codigo_aplicacion="+codigoAplicacion,
			dataType: 'json',
			success:function(resultado){
				$("#txt-aplicacion").val(resultado.nombre_aplicacion);
				$("#txt-codigo-aplicacion").val(resultado.codigo_aplicacion);				
				$("#txt-descripcion").val(resultado.descripcion);
				$("#txt-fecha-publicacion").val(resultado.fecha_publicacion);
				$("#txt-calificacion").val(resultado.calificacion);
				$("#txt-url").val(resultado.url);
				$("#slc-icono").val(resultado.url_icono);
				$("#txt-version").val(resultado.version);
				$("#txt-fecha-actualizacion").val(resultado.fecha_actualizacion);
				$("#slc-desarrollador").val(resultado.codigo_desarrollador);
				$("#btn-actualizar").fadeIn(100);
				$("#btn-guardar").fadeOut(100);
			},
			error:function(){

			}
	});
} 	

function eliminarAplicacion(codigoAplicacion){
	alert(codigoAplicacion);
	$.ajax({
			url:"ajax/acciones.php?accion=5",
			method: "POST",
			data: "codigo_aplicacion="+codigoAplicacion,
			dataType: 'html',
			success:function(resultado){
				$("#resultado").html(resultado);
				cargarTarjetas();
			},
			error:function(){

			}
	});
}
$(document).ready(function(){
	$("#btn-cancelar").click(function(){
		$("#txt-aplicacion").val('');
		$("#txt-descripcion").val('');
		$("#txt-fecha-publicacion").val('');
		$("#txt-calificacion").val('');
		$("#txt-url").val('');
		$("#slc-icono").val('');
		$("#txt-version").val('');
		$("#txt-fecha-actualizacion").val('');
		$("#slc-desarrollador").val('');
		$("#btn-actualizar").fadeOut(100);
		$("#btn-guardar").fadeIn(100);
	});
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
			//"&txt-tamanio="+$("#txt-tamanio").val()+
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

	$("#btn-actualizar").click(function(){
		var categoriasSeleccionadas="";
		
		$("input[name='chkcategorias[]']:checked").each(function(){
			categoriasSeleccionadas+="categorias[]="+$(this).val()+"&";
		});


		//Otra forma de enviar la inforamcion es con FormData
		var parametros=
			"txt-codigo-aplicacion="+$("#txt-codigo-aplicacion").val()+
			"&txt-aplicacion="+$("#txt-aplicacion").val()+
			"&txt-descripcion="+$("#txt-descripcion").val()+
			"&txt-fecha-publicacion="+$("#txt-fecha-publicacion").val()+
			"&txt-fecha-actualizacion="+$("#txt-fecha-actualizacion").val()+
			"&txt-calificacion="+$("#txt-calificacion").val()+
			"&txt-url="+$("#txt-url").val()+
			//"&txt-tamanio="+$("#txt-tamanio").val()+
			"&"+categoriasSeleccionadas+
			"txt-version="+$("#txt-version").val()+
			"&slc-desarrollador="+$("#slc-desarrollador").val()+
			"&slc-icono="+$("#slc-icono").val();

		alert(parametros);
		//$.post $.get
		$.ajax({
			url:"ajax/acciones.php?accion=4",
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

