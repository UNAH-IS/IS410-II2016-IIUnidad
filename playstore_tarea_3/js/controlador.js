$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var parametros=
			"txt-aplicacion="+$("#txt-aplicacion").val()+
			"&txt-descripcion="+$("#txt-descripcion").val()+
			"&txt-fecha-publicacion="+$("#txt-fecha-publicacion").val()+
			"&txt-fecha-actualizacion="+$("#txt-fecha-actualizacion").val()+
			"&txt-calificacion="+$("#txt-calificacion").val()+
			"&txt-url="+$("#txt-url").val()+
			"&txt-tamanio="+$("#txt-tamanio").val()+
			//"&chk-categorias[]="+$("input[@name='chk-categorias[]']").val()+
			"&txt-version="+$("#txt-version").val()+
			"&slc-desarrollador="+$("#slc-desarrollador").val()+
			"&slc-icono="+$("#slc-icono").val();

		//alert(parametros);
		//$.post $.get
		$.ajax({
			url:"ajax/acciones.php?accion=1",
			method: "POST",
			data: parametros,
			success:function(resultado){
				alert(resultado);
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