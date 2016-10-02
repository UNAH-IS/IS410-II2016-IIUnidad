
var mensaje = "Hola Mundo";
document.write(mensaje); //Imprimir html en la pagina
//alert(mensaje); //Cuadro de dialogo
console.log(mensaje); //Imprimir en la consola (F12)

$(document).ready(
	function(){
		//Se ejecutan cuando el DOM ha sido cargada completamente
		alert("El DOM se cargo completamente");

		$("#btn-mostrar-valor").click(
			function(){
				//alert("Valor: "+document.getElementById("txt-texto").value); 
				alert("Valor, evento jquery: "+ $("#txt-texto").val()); 
			}
		);

		$("#btn-asignar-valor").click(
			function(){
				//document.getElementById("txt-texto").value="Valor asignado desde javascript";
				$("#txt-texto").val("Valor asignado utilizando jquery");
			}
		);

		$("#btn-llenar-div").click(
			function(){
				$("#div-contenido").html("<h1>Hola mundo, este contenido se asigno dinamicamente</h1>");
			}
		);

		$("#btn-click-aqui").click(
			function(){
				alert("Ejecutando funcion"); 
				$(".texto-cool").html("Texto cambiado desde jquery");
			}
		);

		$("#btn-mostrar-mensaje").click(
			function(){
				alert($("#span-mensaje").html());
			}
		);
	}
);




//Estas las deje aqui porque me canse.
mostrarImagen = function(){
	$("#vegeta").fadeIn(3000);
}

ocultarImagen = function(){
	$("#vegeta").fadeOut(3000);
	$(".texto-cool").fadeOut(3000);
}