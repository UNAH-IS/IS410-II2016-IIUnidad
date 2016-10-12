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

		public function guardarRegistro(){
			$archivo = fopen("../data/aplicaciones.csv","a");
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
			fclose($archivo);
		}
	}

	
?>