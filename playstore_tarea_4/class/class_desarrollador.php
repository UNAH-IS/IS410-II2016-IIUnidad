<?php

	class Desarrollador extends Usuario{

		private $paginaWeb;

		public function __construct(
					$nombreUsuario,
					$correoElectronico,
					$paginaWeb){
			parent::__construct($nombreUsuario,$correoElectronico);
			$this->paginaWeb = $paginaWeb;
		}
		public function getPaginaWeb(){
			return $this->paginaWeb;
		}
		public function setPaginaWeb($paginaWeb){
			$this->paginaWeb = $paginaWeb;
		}
		public function toString(){
			return parent::toString() . " PaginaWeb: " . $this->paginaWeb;
		}

		public static function generarListaDesarrolladores($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				"SELECT codigo_usuario, nombre, apellido
				FROM tbl_usuarios 
				WHERE codigo_tipo_usuario =2"
			);
			echo '<select name="" id="slc-desarrollador" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_usuario"].'">'.
					$fila["nombre"].' '.$fila["apellido"].'</option>';
			}
			echo '</select>';

		}
	}
?>