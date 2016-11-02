<?php

	class Categoria{

		private $codigoCategoria;
		private $nombreCategoria;

		public function __construct($codigoCategoria,
					$nombreCategoria){
			$this->codigoCategoria = $codigoCategoria;
			$this->nombreCategoria = $nombreCategoria;
		}
		public function getCodigoCategoria(){
			return $this->codigoCategoria;
		}
		public function setCodigoCategoria($codigoCategoria){
			$this->codigoCategoria = $codigoCategoria;
		}
		public function getNombreCategoria(){
			return $this->nombreCategoria;
		}
		public function setNombreCategoria($nombreCategoria){
			$this->nombreCategoria = $nombreCategoria;
		}


		public static function generarCheckboxesCategoria($conexion){
			echo "Informacion generada desde la clase Categoria<br>";
			$resultado = $conexion->ejecutarInstruccion(
				"SELECT codigo_categoria, nombre_categoria
				FROM tbl_categorias
				ORDER BY nombre_categoria"
			);

			while ($fila= $conexion->obtenerFila($resultado)){
				echo '<label><input type="checkbox" name="chkcategorias[]" 
				value="'.$fila["codigo_categoria"].'">'.$fila["nombre_categoria"].'</label><br>';
			}
		}

	}
?>