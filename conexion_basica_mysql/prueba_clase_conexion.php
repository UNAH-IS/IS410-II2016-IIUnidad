<?php
	
	
	include_once("class/class_conexion.php");
	$conexion = new Conexion();
	

	$resultado = $conexion->ejecutarInstruccion('SELECT codigo_categoria, nombre_categoria FROM tbl_categorias');

	echo '<table border="1px">';
	while($fila = $conexion->obtenerFila($resultado)){ //Arreglo asociativo
		echo "<tr>";
		echo "<td>". $fila["codigo_categoria"]. "</td>";
		echo "<td>". $fila["nombre_categoria"]. "</td>";
		echo "<td><button onclick='eliminar(".$fila["codigo_categoria"]. ")'>Eliminar</button></td>";
		echo "</tr>";
	}
	echo "</table>";

	$conexion->liberarResultado($resultado);

	$conexion->cerrarConexion();



	/*$arreglo["elemento1"]="valor1";
	$arreglo["elemento2"]="valor2";
	$arreglo["elemento3"]="valor3";


	echo $arreglo["elemento1"]; //"valor1"
*/



?>