var mensaje = "Hola Mundo";
document.write(mensaje); //Imprimir html en la pagina
//alert(mensaje); //Cuadro de dialogo
console.log(mensaje); //Imprimir en la consola (F12)

function clickAqui(){
	alert("Ejecutando funcion"); 
}

mostrarValor = function(){
	alert("Valor: "+document.getElementById("txt-texto").value); 
}

asignarValor = function(){
	document.getElementById("txt-texto").value="Valor asignado desde javascript";
}

llenarDiv = function(){
	document.getElementById("div-contenido").innerHTML = "<h1>Hola mundo, este contenido se asigno dinamicamente</h1>";
}

mostrarMensaje = function(){
	alert(document.getElementById("span-mensaje").innerHTML);
}