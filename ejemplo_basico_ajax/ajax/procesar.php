<?php 
	switch ($_GET["accion"]) {
		case 'guardar':
			sleep(10);
			echo "Esta es la informacion que se recibe de index.php: <br>";
			echo "Nombre de usuario: " . $_POST["txt-usuario"]."<br>";
			echo "Contraseña: " . $_POST["txt-contrasena"]."<br>";
			
			$archivo = fopen("log_usuarios.csv","a"); //Nombre archivo, modo de apertura: r, w, a
			fwrite($archivo,$_POST["txt-usuario"] . "," .$_POST["txt-contrasena"]."\n") ;
			fclose($archivo);
			break;
		case 'obtener':
			$archivo = fopen("../data/aplicaciones.csv","r");

			while($linea = fgets($archivo))
				echo $linea."<br>";

			fclose($archivo);
			break;
		default:
			echo "Accion invalida";
			break;
	}
	
?>