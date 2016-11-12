<?php
	switch ($_GET["accion"]) {
		case '1': //Guardar
			/*$nombreProducto,
			$descripcion,
			$fechaPublicacion,
			$calificaciónPromedio,
			$comentarios,
			$URLProducto,
			$tamanioArchivo,
			$icono,
			$categoria,
			$estatus,
			$version,
			$fechaActualizacion,
			$desarrollador*/
			include_once("../class/class_conexion.php");
			include_once("../class/class_producto.php");
			include_once("../class/class_icono.php");
			include_once("../class/class_usuario.php");
			include_once("../class/class_desarrollador.php");
			include_once("../class/class_aplicacion.php");

			$conexion = new Conexion();
			$aplicacion = new Aplicacion(
					$_POST["txt-aplicacion"],
					$_POST["txt-descripcion"],
					$_POST["txt-fecha-publicacion"],
					$_POST["txt-calificacion"],
					null,//Comentarios
					$_POST["txt-url"],
					null,
					new Icono($_POST["slc-icono"],5,5),
					$_POST["categorias"],//Categorias, esto es un arregla
					null,//Estatus
					$_POST["txt-version"],
					$_POST["txt-fecha-actualizacion"],
					new Desarrollador($_POST["slc-desarrollador"], null,null)
			);

			echo "Categorias: " . var_dump($_POST["categorias"]);

			$aplicacion->guardarRegistro($conexion);
			$conexion->cerrarConexion();
			break;
		case '2': //Generar lista de aplicaciones
			include_once("../class/class_conexion.php");
			$conexion = new Conexion();
			$resultado = $conexion->ejecutarInstruccion(
					'SELECT 	a.codigo_aplicacion, a.codigo_desarrollador, 
								a.nombre_aplicacion,a.descripcion, 
								a.fecha_publicacion, a.fecha_actualizacion, 
								a.version, a.url, a.url_icono, a.calificacion, b.usuario
					FROM tbl_aplicaciones a
					INNER JOIN tbl_usuarios b
					ON (a.codigo_desarrollador = b.codigo_usuario)'
			);
			while ($fila = $conexion->obtenerFila($resultado)){
				?>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
					<div class="well">
						<a href="detalle_aplicacion.php?codigo_aplicacion=<?php echo $fila["codigo_aplicacion"]; ?>"><img src="<?php echo $fila["url_icono"]; ?>" class="img-responsive">
						<b><?php echo $fila["nombre_aplicacion"]; ?></b><br></a>
						<span class="label label-primary"><?php echo $fila["calificacion"]; ?></span>
						<?php 
							for ($j=0;$j<$fila["calificacion"];$j++)
								echo '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
						?>
						<br>
						<?php echo $fila["descripcion"]; ?><br>
						Versión: <b><?php echo $fila["version"]; ?></b><br>
						<a href="<?php echo $fila["url"]; ?>">Descargar</a>
						<br>
						<a href="#" onclick="editarAplicacion(<?php echo $fila["codigo_aplicacion"]; ?>)" aria-hidden="true"><span class="glyphicon glyphicon-pencil" ></span></a>
						<a href="#" onclick="eliminarAplicacion(<?php echo $fila["codigo_aplicacion"]; ?>)" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					</div>
				</div>
				<?php
			}
			$conexion->cerrarConexion();
			break;
		case '3': //Editar registro, obtener informacion de una aplicacion seleccionada
			include_once("../class/class_conexion.php");
			$conexion = new Conexion();
			$resultado = $conexion->ejecutarInstruccion(
					sprintf(
						'SELECT 	a.codigo_aplicacion, a.codigo_desarrollador,
									a.nombre_aplicacion,a.descripcion, 
									a.fecha_publicacion, a.fecha_actualizacion, 
									a.version, a.url, a.url_icono, a.calificacion, b.usuario
						FROM tbl_aplicaciones a
						INNER JOIN tbl_usuarios b
						ON (a.codigo_desarrollador = b.codigo_usuario)
						WHERE a.codigo_aplicacion=%s',
						stripslashes($_POST["codigo_aplicacion"])
					)
			);

			$fila = $conexion->obtenerFila($resultado);
			echo json_encode($fila);
			$conexion->cerrarConexion();
			break;
	case '4': //Actualizar un registro
		echo "Actualizar";
			include_once("../class/class_conexion.php");
			include_once("../class/class_producto.php");
			include_once("../class/class_icono.php");
			include_once("../class/class_usuario.php");
			include_once("../class/class_desarrollador.php");
			include_once("../class/class_aplicacion.php");

			$conexion = new Conexion();
			$aplicacion = new Aplicacion(
					$_POST["txt-aplicacion"],
					$_POST["txt-descripcion"],
					$_POST["txt-fecha-publicacion"],
					$_POST["txt-calificacion"],
					null,//Comentarios
					$_POST["txt-url"],
					null,
					new Icono($_POST["slc-icono"],5,5),
					null,//$_POST["categorias"],//Categorias, esto es un arregla
					null,//Estatus
					$_POST["txt-version"], 
					$_POST["txt-fecha-actualizacion"],
					new Desarrollador($_POST["slc-desarrollador"], null,null)
			);

			//echo "Categorias: " . var_dump($_POST["categorias"]);

			$aplicacion->actualizarRegistro($conexion, $_POST["txt-codigo-aplicacion"]);
			$conexion->cerrarConexion();
		break;
		case '5':
			include_once("../class/class_conexion.php");
			include_once("../class/class_producto.php");
			include_once("../class/class_aplicacion.php");
			$conexion = new Conexion();
			Aplicacion::eliminarAplicacion($conexion, $_POST["codigo_aplicacion"]);
			$conexion->cerrarConexion();
			break;
	default:
			# code...
			break;
	}
	
?>