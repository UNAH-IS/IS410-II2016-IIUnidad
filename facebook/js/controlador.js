function seleccionarUsuario(codigoUsuario, nombreUsuario){
	alert("Codigo: " + codigoUsuario + ", Nombre: " + nombreUsuario);
}
function agregarAmigo(codigoNuevoAmigo){
	alert("Codigo nuevo amigo: " + codigoNuevoAmigo);
}
$(document).ready(function(){
	$("#btn-tengo-hambre").click(function(e){
		e.preventDefault();
		alert("Puede tomar 5 minutos e ir donde don Tito a comprar algo, me trae.");
	});	
	$("#btn-ir-banio").click(function(e){
		e.preventDefault();
		alert("Vaya, solamente deje su telefono en el escritorio.");
	});	
	
});

