<?php
	switch ($_GET["accion"]) {
		case '1':
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
			include_once("../class/class_producto.php");
			include_once("../class/class_icono.php");
			include_once("../class/class_usuario.php");
			include_once("../class/class_desarrollador.php");
			include_once("../class/class_aplicacion.php");
			$aplicacion = new Aplicacion(
					$_POST["txt-aplicacion"],
					$_POST["txt-descripcion"],
					$_POST["txt-fecha-publicacion"],
					$_POST["txt-calificacion"],
					null,//Comentarios
					$_POST["txt-url"],
					$_POST["txt-tamanio"],
					new Icono($_POST["slc-icono"],5,5),
					null,//Categorias
					null,//Estatus
					$_POST["txt-version"],
					$_POST["txt-fecha-actualizacion"],
					new Desarrollador($_POST["slc-desarrollador"], null,null)
			);

			$aplicacion->guardarRegistro();
			break;
		case '2':
			$archivo = fopen("../data/aplicaciones.csv","r");
			while($linea = fgets($archivo)){
				$partes = explode(",", $linea);
				//0:NOMBRE_APLICACION,1:DESCRIPCION,2:FECHA,3:CALIFICACION,4:URL,5:TAMAÑO,6:VERSION,7:DESARROLLADOR,8:URL_ICONO
				?>

				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
					<div class="well">
						<img src="<?php echo $partes[8]; ?>" class="img-responsive">
						<b><?php echo $partes[0]; ?></b><br>
						<span class="label label-primary"><?php echo $partes[3]; ?></span>
						<?php 
							for ($j=0;$j<$partes[3];$j++)
								echo '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
						?>
						<br>
						<?php echo $partes[1]; ?><br>
						Versión: <b><?php echo $partes[6]; ?></b><br>
						<a href="<?php echo $partes[4]; ?>">Descargar</a>
					</div>
				</div>
				<?php
				//echo $linea."<br>";
			}

			fclose($archivo);
			break;
		default:
			# code...
			break;
	}
	
?>