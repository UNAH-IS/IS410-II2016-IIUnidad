
var mensaje = "Hola Mundo";
document.write(mensaje); //Imprimir html en la pagina
//alert(mensaje); //Cuadro de dialogo
console.log(mensaje); //Imprimir en la consola (F12)

function clickAqui(){
	alert("Ejecutando funcion"); 
	$(".texto-cool").html("Texto cambiado desde jquery");
}

mostrarValor = function(){
	//alert("Valor: "+document.getElementById("txt-texto").value); 
	alert("Valor: "+ $("#txt-texto").val()); 
}

asignarValor = function(){
	//document.getElementById("txt-texto").value="Valor asignado desde javascript";
	$("#txt-texto").val("Valor asignado utilizando jquery");
}

llenarDiv = function(){
	$("#div-contenido").html("<h1>Hola mundo, este contenido se asigno dinamicamente</h1>");
}

mostrarMensaje = function(){
	alert($("#span-mensaje").html());
}

mostrarImagen = function(){
	$("#vegeta").fadeIn(3000);
}

ocultarImagen = function(){
	$("#vegeta").fadeOut(3000);
	$(".texto-cool").fadeOut(3000);
}