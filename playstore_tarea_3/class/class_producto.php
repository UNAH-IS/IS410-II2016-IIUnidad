<?php

	abstract class Producto{
		protected $nombreProducto;
		protected $descripcion;
		protected $fechaPublicacion;
		protected $calificacionPromedio;
		protected $comentarios;
		protected $URLProducto;
		protected $tamanioArchivo;
		protected $icono;

		public function __construct($nombreProducto,
					$descripcion,
					$fechaPublicacion,
					$calificacionPromedio,
					$comentarios,
					$URLProducto,
					$tamanioArchivo,
					$icono){
			$this->nombreProducto = $nombreProducto;
			$this->descripcion = $descripcion;
			$this->fechaPublicacion = $fechaPublicacion;
			$this->calificacionPromedio = $calificacionPromedio;
			$this->comentarios = $comentarios;
			$this->URLProducto = $URLProducto;
			$this->tamanioArchivo = $tamanioArchivo;
			$this->icono = $icono;
		}
		public function getNombreProducto(){
			return $this->nombreProducto;
		}
		public function setNombreProducto($nombreProducto){
			$this->nombreProducto = $nombreProducto;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getFechaPublicacion(){
			return $this->fechaPublicacion;
		}
		public function setFechaPublicacion($fechaPublicacion){
			$this->fechaPublicacion = $fechaPublicacion;
		}
		public function getCalificacionPromedio(){
			return $this->calificacionPromedio;
		}
		public function setCalificacionPromedio($calificacionPromedio){
			$this->calificacionPromedio = $calificacionPromedio;
		}
		public function getComentarios(){
			return $this->comentarios;
		}
		public function setComentarios($comentarios){
			$this->comentarios = $comentarios;
		}
		public function getURLProducto(){
			return $this->URLProducto;
		}
		public function setURLProducto($URLProducto){
			$this->URLProducto = $URLProducto;
		}
		public function getTamanioArchivo(){
			return $this->tamanioArchivo;
		}
		public function setTamanioArchivo($tamanioArchivo){
			$this->tamanioArchivo = $tamanioArchivo;
		}
		public function getIcono(){
			return $this->icono;
		}
		public function setIcono($icono){
			$this->icono = $icono;
		}
		public function toString(){
			return "NombreProducto: " . $this->nombreProducto . 
				" Descripcion: " . $this->descripcion . 
				" FechaPublicacion: " . $this->fechaPublicacion . 
				" CalificacionPromedio: " . $this->calificacionPromedio . 
				" Comentarios: " . $this->comentarios . 
				" URLProducto: " . $this->URLProducto . 
				" TamanioArchivo: " . $this->tamanioArchivo . 
				" Icono: " . $this->icono;
		}
	}
?>