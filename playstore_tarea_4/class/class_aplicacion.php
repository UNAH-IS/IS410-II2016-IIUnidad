<?php

	class Aplicacion extends Producto{

		private $categoria;
		private $estatus;
		private $version;
		private $fechaActualizacion;
		private $desarrollador;

		public function __construct($nombreProducto,
					$descripcion,
					$fechaPublicacion,
					$calificacionPromedio,
					$comentarios,
					$URLProducto,
					$tamanioArchivo,
					$icono,
					$categoria,
					$estatus,
					$version,
					$fechaActualizacion,
					$desarrollador){
			parent::__construct($nombreProducto,
					$descripcion,
					$fechaPublicacion,
					$calificacionPromedio,
					$comentarios,
					$URLProducto,
					$tamanioArchivo,
					$icono);
			$this->categoria = $categoria;
			$this->estatus = $estatus;
			$this->version = $version;
			$this->fechaActualizacion = $fechaActualizacion;
			$this->desarrollador = $desarrollador;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}
		public function getEstatus(){
			return $this->estatus;
		}
		public function setEstatus($estatus){
			$this->estatus = $estatus;
		}
		public function getVersion(){
			return $this->version;
		}
		public function setVersion($version){
			$this->version = $version;
		}
		public function getFechaActualizacion(){
			return $this->fechaActualizacion;
		}
		public function setFechaActualizacion($fechaActualizacion){
			$this->fechaActualizacion = $fechaActualizacion;
		}
		public function getDesarrollador(){
			return $this->desarrollador;
		}
		public function setDesarrollador($desarrollador){
			$this->desarrollador = $desarrollador;
		}
		public function toString(){
			return parent::toString() . " Categoria: " . $this->categoria . 
				" Estatus: " . $this->estatus . 
				" Version: " . $this->version . 
				" FechaActualizacion: " . $this->fechaActualizacion . 
				" Desarrollador: " . $this->desarrollador->toString();
		}

		public function guardarRegistro($conexion){
			$sql = sprintf(
				"INSERT INTO tbl_aplicaciones 
						(
							codigo_aplicacion, codigo_desarrollador,
							 nombre_aplicacion, descripcion,
							  fecha_publicacion, fecha_actualizacion, 
							  version, url, url_icono, calificacion
						) VALUES (
							NULL, '%s', '%s', '%s', '%s', '%s', 
							'%s', '%s', '%s', '%s'
						)",
						stripslashes($this->desarrollador->getNombreUsuario()),//mysqli_magic_quotes, mysqli_real_....
						stripslashes($this->nombreProducto),
						stripslashes($this->descripcion),
						stripslashes($this->fechaPublicacion),
						stripslashes($this->fechaActualizacion),
						stripslashes($this->version),
						stripslashes($this->URLProducto),
						stripslashes($this->icono->getURLImagen()),
						stripslashes($this->calificacionPromedio)
				);
			echo "<br>Instruccion a ejecutar: ".$sql;
			$resultado = $conexion->ejecutarInstruccion($sql);
			if($resultado){
				echo "<b>Registro almacenado con exito</b>";
			}else{
				echo "Error al guardar el registro";
				exit;
			}
			//Es necesario obtener el ultimo ID agregado:
			$resultado = $conexion->ejecutarInstruccion("SELECT last_insert_id() as id;");
			$fila = $conexion->obtenerFila($resultado);

			//Las categorias es un arreglo que contiene los codigos de las categorias que 
			//selecciono el usuario. Por cada categoria tendria
			//que guardar un registro
			if ($fila["id"]>0){
				for ($i=0;$i<count($this->categoria);$i++){
					$sql = sprintf(
						"INSERT INTO tbl_categorias_x_aplicacion(codigo_categoria, 
									codigo_aplicacion) VALUES ('%s','%s')",
						stripslashes($this->categoria[$i]),
						stripslashes($fila["id"])						
					);
					$conexion->ejecutarInstruccion($sql);
				}
			}

			/*$archivo = fopen("../data/aplicaciones.csv","a");
			fwrite(
				$archivo,
				$this->nombreProducto.",".
				$this->descripcion.",".
				$this->fechaPublicacion.",".
				$this->calificacionPromedio.",".
				$this->URLProducto.",".
				$this->tamanioArchivo.",".
				$this->version.",".
				$this->desarrollador->getNombreUsuario().",".
				$this->icono->getURLImagen()."\n"
			);
			fclose($archivo);*/
		}


		public function actualizarRegistro($conexion, $codigoAplicacion){
			$sql = sprintf(
					"UPDATE tbl_aplicaciones 
					SET codigo_desarrollador='%s',
						nombre_aplicacion='%s',
						descripcion='%s',
						fecha_publicacion='%s',
						fecha_actualizacion='%s',
						version='%s',
						url='%s',
						url_icono='%s',
						calificacion='%s'
					WHERE codigo_aplicacion = '%s'",
						stripslashes($this->desarrollador->getNombreUsuario()),//mysqli_magic_quotes, mysqli_real_....
						stripslashes($this->nombreProducto),
						stripslashes($this->descripcion),
						stripslashes($this->fechaPublicacion),
						stripslashes($this->fechaActualizacion),
						stripslashes($this->version),
						stripslashes($this->URLProducto),
						stripslashes($this->icono->getURLImagen()),
						stripslashes($this->calificacionPromedio),
						stripslashes($codigoAplicacion)
				);
			echo "<br>Instruccion a ejecutar: ".$sql;
			$resultado = $conexion->ejecutarInstruccion($sql);
			if($resultado){
				echo "<b>Registro actualizado con exito</b>";
			}else{
				echo "Error al actualizar el registro";
				exit;
			}
			

			//Las categorias es un arreglo que contiene los codigos de las categorias que 
			//selecciono el usuario. Por cada categoria tendria
			//que guardar un registro
			/*if ($fila["id"]>0){
				for ($i=0;$i<count($this->categoria);$i++){
					$sql = sprintf(
						"INSERT INTO tbl_categorias_x_aplicacion(codigo_categoria, 
									codigo_aplicacion) VALUES ('%s','%s')",
						stripslashes($this->categoria[$i]),
						stripslashes($fila["id"])						
					);
					$conexion->ejecutarInstruccion($sql);
				}
			}*/
		}

		public static function eliminarAplicacion($conexion, $codigoAplicacion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf(
					"DELETE FROM tbl_categorias_x_aplicacion
					WHERE codigo_aplicacion = '%s'",
					stripslashes($codigoAplicacion))
			);

			if ($resultado)
				echo "Registros de categorias relacionados con el codigo de aplicacion".$codigoAplicacion." eliminados";
			else 
				echo "Error al eliminar categorias relacionadas al registro con codigo ".$codigoAplicacion;

			$resultado = $conexion->ejecutarInstruccion(
				sprintf(
					"DELETE FROM tbl_aplicaciones 
					WHERE codigo_aplicacion = '%s'",
					stripslashes($codigoAplicacion))
			);


			if ($resultado)
				echo "Registro con el codigo de aplicacion".$codigoAplicacion." eliminado";
			else 
				echo "Error al eliminar registro con codigo ".$codigoAplicacion;
		}
	}

	
?>