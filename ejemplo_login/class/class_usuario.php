<?php

	class Usuario{

		private $codigoUsuario;
		private $nombreUsuario;
		private $correo;
		private $contrasena;
		private $codigoTipoUsuario;

		public function __construct($codigoUsuario,
					$nombreUsuario,
					$correo,
					$contrasena,
					$codigoTipoUsuario){
			$this->codigoUsuario = $codigoUsuario;
			$this->nombreUsuario = $nombreUsuario;
			$this->correo = $correo;
			$this->contrasena = $contrasena;
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getCodigoTipoUsuario(){
			return $this->codigoTipoUsuario;
		}
		public function setCodigoTipoUsuario($codigoTipoUsuario){
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function toString(){
			return "CodigoUsuario: " . $this->codigoUsuario . 
				" NombreUsuario: " . $this->nombreUsuario . 
				" Correo: " . $this->correo . 
				" Contrasena: " . $this->contrasena . 
				" CodigoTipoUsuario: " . $this->codigoTipoUsuario;
		}

		public static function verificarUsuario($conexion, $correo,$contrasena){
				$resultado = $conexion->ejecutarInstruccion(
					sprintf("SELECT codigo_usuario, nombre_usuario, correo, contrasena, codigo_tipo_usuario FROM tbl_usuarios 
					WHERE correo = '%s'
					AND contrasena = sha1('%s')",
					stripslashes($correo),
					stripslashes($contrasena)
				));
				$respuesta = array();

				if($conexion->cantidadRegistros($resultado) >0){
					$fila = $conexion->obtenerFila($resultado);
					$respuesta["codigo_resultado"] = 1;
					$respuesta["resultado"] = "Usuario Existe";
					$respuesta["codigo_usuario"] = $fila["codigo_usuario"];
					$respuesta["nombre_usuario"] = $fila["nombre_usuario"];
					$respuesta["codigo_tipo_usuario"] = $fila["codigo_tipo_usuario"];
				}
				else {
					$respuesta["codigo_resultado"] = 0;
					$respuesta["resultado"] = "Usuario no Existe";
				}
				return $respuesta;
		}
	}
?>