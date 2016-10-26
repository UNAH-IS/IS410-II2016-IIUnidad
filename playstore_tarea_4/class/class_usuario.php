<?php

	class Usuario{

		protected $nombreUsuario;
		protected $correoElectronico;

		public function __construct($nombreUsuario,
					$correoElectronico){
			$this->nombreUsuario = $nombreUsuario;
			$this->correoElectronico = $correoElectronico;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getCorreoElectronico(){
			return $this->correoElectronico;
		}
		public function setCorreoElectronico($correoElectronico){
			$this->correoElectronico = $correoElectronico;
		}
		public function toString(){
			return "NombreUsuario: " . $this->nombreUsuario . 
				" CorreoElectronico: " . $this->correoElectronico;
		}
	}
?>