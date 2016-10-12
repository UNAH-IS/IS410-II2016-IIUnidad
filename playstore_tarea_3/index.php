<?php
	include_once("class/class_producto.php");
	include_once("class/class_aplicacion.php");
	include_once("class/class_icono.php");
	include_once("class/class_usuario.php");
	include_once("class/class_desarrollador.php");
	include_once("class/class_comentario.php");

	$iconos[]=new Icono("http://localhost/playstore/img/icono1.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore/img/icono2.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore/img/icono3.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore/img/icono4.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore/img/icono5.png",100,100);


	$comentarios[] = new Comentario("Comentario 1",new Usuario("Usuario1","usuario1@gmail.com"),"DEscripcion comentario 1","12-12-2012");
	$comentarios[] = new Comentario("Comentario 2",new Usuario("Usuario2","usuario2@gmail.com"),"DEscripcion comentario 2","12-12-2012");
	$comentarios[] = new Comentario("Comentario 3",new Usuario("Usuario3","usuario3@gmail.com"),"DEscripcion comentario 3","12-12-2012");
	$comentarios[] = new Comentario("Comentario 4",new Usuario("Usuario4","usuario4@gmail.com"),"DEscripcion comentario 4","12-12-2012");
	$comentarios[] = new Comentario("Comentario 5",new Usuario("Usuario5","usuario5@gmail.com"),"DEscripcion comentario 5","12-12-2012");


	$desarrolladores[] = new Desarrollador("Desarrollador 1", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 2", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 3", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 4", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 5", "desarrollador1@gmail.com","http://desarrollador.com");
	
	$categorias[] = "Categoria 1";
	$categorias[] = "Categoria 2";
	$categorias[] = "Categoria 3";
	$categorias[] = "Categoria 4";
	$categorias[] = "Categoria 5";
	
	$estatus[] = "Estatus 1";
	$estatus[] = "Estatus 2";
	$estatus[] = "Estatus 3";
	$estatus[] = "Estatus 4";
	$estatus[] = "Estatus 5";

	$aplicaciones[] = new Aplicacion("Aplicacion 1",
					"Descripcion aplicacion 1",
					"12-12-2012" ,
					4,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion1.apk",
					2342,
					$iconos[0],
					$categorias[0],
					$estatus[0],
					"1.0",
					"12-12-2012",
					$desarrolladores[0]);

	$aplicaciones[] = new Aplicacion("Aplicacion 2",
					"Descripcion aplicacion 2",
					"12-12-2012" ,
					4,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion2.apk",
					2342,
					$iconos[1],
					$categorias[1],
					$estatus[1],
					"1.0",
					"12-12-2012",
					$desarrolladores[1]);

	$aplicaciones[] = new Aplicacion("Aplicacion 3",
					"Descripcion aplicacion 3",
					"12-12-2012" ,
					5,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion3.apk",
					2342,
					$iconos[2],
					$categorias[2],
					$estatus[2],
					"1.0",
					"12-12-2012",
					$desarrolladores[2]);

	$aplicaciones[] = new Aplicacion("Aplicacion 4",
					"Descripcion aplicacion 4",
					"12-12-2012" ,
					3,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion4.apk",
					2342,
					$iconos[3],
					$categorias[3],
					$estatus[3],
					"1.0",
					"12-12-2012",
					$desarrolladores[3]);

	$aplicaciones[] = new Aplicacion("Aplicacion 5",
					"Descripcion aplicacion 5",
					"12-12-2012" ,
					2,
					$comentarios,
					"http://localhost/playstore/apks/aplicacion5.apk",
					2342,
					$iconos[4],
					$categorias[4],
					$estatus[4],
					"1.0",
					"12-12-2012",
					$desarrolladores[4]);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oh no, Examen práctico</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a id="btn-accion" href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	<div class="alert alert-success" role="alert">
		<!-- Imprimir en esta seccion las verificaciones.-->
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<!--- INICIO DEL FORMULARIO -->
			
				<table class = "table table-striped table-hover">
					<tr>
						<td>Nombre aplicación:</td>
						<td>
							<input type="text" name="" id="txt-aplicacion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Descripción:</td>
						<td>
							<input type="text" name="" id="txt-descripcion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Fecha de publicación:</td>
						<td>
							<input type="text" name="" id="txt-fecha-publicacion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Calificación promedio:</td>
						<td>
							<input type="text" name="" id="txt-calificacion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>URL:</td>
						<td>
							<input type="text" name="" id="txt-url" class="form-control">
						</td>

					</tr>
					<tr>
						<td>Tamaño archivo:</td>
						<td>
							<input type="text" name="" id="txt-tamanio" class="form-control">
						</td>

					</tr>
					<tr>
						<td>Icono:</td>
						<td>
							<select name="" id="slc-icono" class="form-control">
								<?php 
								for ($i=0;$i<count($iconos);$i++)
									echo '<option value="'.$iconos[$i]->getURLImagen().'">'.$iconos[$i]->getURLImagen().'</option>';
								?>		
							</select>
						</td>
					</tr>
					<tr>
					
						<td>Categorias:</td>
						<td>
							<?php
								for($i=0;$i<count($categorias);$i++)
									echo '<label><input type="checkbox" name="chk-categorias[]" 
									value="'.$categorias[$i].'">'.$categorias[$i].'</label><br>';
							
							?>
						</td>
					</tr>
					<tr>
						<td>Version:</td>
						<td>
							<input type="text" name="" id="txt-version" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Fecha de actualización:</td>
						<td>
							<input type="text" name="" id="txt-fecha-actualizacion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Desarrollador:</td>
						<td>
							<select name="" id="slc-desarrollador" class="form-control">
								<?php 
									for ($i=0;$i<count($desarrolladores);$i++)
										echo '<option value="'.$desarrolladores[$i]->getNombreUsuario().'">'.$desarrolladores[$i]->getNombreUsuario().'</option>';
								?>	
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button id="btn-guardar" class="btn btn-primary">
								Guardar
							</button>
							<button id="btn-limpiar" class="btn btn-warning">
								Limpiar
							</button>
						</td>
					</tr>
				</table>
				<!--- FIN DEL FORMULARIO -->
			</div>
			<!--Listado de las aplicaciones-->
			<div class="col-lg-6">
				<div class="row" id="div-lista-aplicaciones">
					
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
    <script type="text/javascript">
    	$("#btn-accion").click(function(evento){
    		//En caso de que el boton sea un anchor <a>
    		evento.preventDefault();
    		alert("Acccion");
    	});

    </script>
</body>
</html>