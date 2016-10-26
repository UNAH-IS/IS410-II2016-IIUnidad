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
	}
?>