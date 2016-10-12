<?php

	class Comentario{

		private $tituloComentario;
		private $usuario;
		private $descripcionComentario;
		private $fechaComentario;

		public function __construct($tituloComentario,
					$usuario,
					$descripcionComentario,
					$fechaComentario){
			$this->tituloComentario = $tituloComentario;
			$this->usuario = $usuario;
			$this->descripcionComentario = $descripcionComentario;
			$this->fechaComentario = $fechaComentario;
		}
		public function getTituloComentario(){
			return $this->tituloComentario;
		}
		public function setTituloComentario($tituloComentario){
			$this->tituloComentario = $tituloComentario;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getDescripcionComentario(){
			return $this->descripcionComentario;
		}
		public function setDescripcionComentario($descripcionComentario){
			$this->descripcionComentario = $descripcionComentario;
		}
		public function getFechaComentario(){
			return $this->fechaComentario;
		}
		public function setFechaComentario($fechaComentario){
			$this->fechaComentario = $fechaComentario;
		}
		public function toString(){
			return "TituloComentario: " . $this->tituloComentario . 
				" Usuario: " . $this->usuario . 
				" DescripcionComentario: " . $this->descripcionComentario . 
				" FechaComentario: " . $this->fechaComentario;
		}
	}
?>