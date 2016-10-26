<?php
	
	$host="localhost";
	$usuario="root";
	$password="";
	$baseDatos="db_tienda_aplicaciones";
	$conexion  = mysqli_connect($host, $usuario, $password, $baseDatos);//Objeto que definira el vinculo con mysql, $link
	if (!$conexion){
		echo "No se pudo conectar con mysql";
		exit;
	}


	$resultado = mysqli_query($conexion, 'SELECT codigo_categoria, nombre_categoria FROM tbl_categorias');

	echo '<table border="1px">';
	while($fila = mysqli_fetch_array($resultado)){ //Arreglo asociativo
		echo "<tr>";
		echo "<td>". $fila["codigo_categoria"]. "</td>";
		echo "<td>". $fila["nombre_categoria"]. "</td>";
		echo "<td><button onclick='eliminar(".$fila["codigo_categoria"]. ")'>Eliminar</button></td>";
		echo "</tr>";
	}
	echo "</table>";

	mysqli_free_result($resultado);

	mysqli_close($conexion);



	/*$arreglo["elemento1"]="valor1";
	$arreglo["elemento2"]="valor2";
	$arreglo["elemento3"]="valor3";


	echo $arreglo["elemento1"]; //"valor1"
*/



?>