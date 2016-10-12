<?php

	class Icono{

		private $URLImagen;
		private $ancho;
		private $alto;

		public function __construct($URLImagen,
					$ancho,
					$alto){
			$this->URLImagen = $URLImagen;
			$this->ancho = $ancho;
			$this->alto = $alto;
		}
		public function getURLImagen(){
			return $this->URLImagen;
		}
		public function setURLImagen($URLImagen){
			$this->URLImagen = $URLImagen;
		}
		public function getAncho(){
			return $this->ancho;
		}
		public function setAncho($ancho){
			$this->ancho = $ancho;
		}
		public function getAlto(){
			return $this->alto;
		}
		public function setAlto($alto){
			$this->alto = $alto;
		}
		public function toString(){
			return "URLImagen: " . $this->URLImagen . 
				" Ancho: " . $this->ancho . 
				" Alto: " . $this->alto;
		}
	}
?>