<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rodillos Flica</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link href="https://fonts.googleapis.com/css?family=Assistant:200|Kanit:100" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/estilos1.css">
	 <link rel="stylesheet" href="css/alertify.css">
	 <link rel="stylesheet" href="css/css/themes/default.css">
	 <link rel="stylesheet" href="css/css/select2.css">
	 <script src="js/jquery-3.2.1.min.js"></script>
	 <script src="js/jquery.min.js"></script>
	 <script src="js/alertify.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	 <script src="js/funciones.js"></script>
	 <script src="css/js/select2.js"></script>
	
</head>	
	<div class="contenedor nav">		 
			<nav class="navbar navbar-expand-lg ">				   	
				<button class="navbar-toggler propio" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion"><img src="img/rallas.png" alt="">
					
				</button>
				
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav mr-auto ">
						<li class="nav-item navbar-right">
							<a href="index.php" class="nav-link">Inicio</a>
						</li>
						<li class="separador">
							<img src="img/separador.png"  width="15" height="30" alt="">
						</li>
						<?php
                         require 'funciones.php';  
						/* $conexion = conexion('galeria','root', ''); */
						$conexion = conexion('galeria','root','');
										/* 
										 */
						 $statement = $conexion->prepare('SELECT categoria FROM categoria order by categoria desc');
						                 $statement->execute();
						                 $resultado = $statement->fetchAll(); ?>	
											
						<li class="nav-item dropdown ">
						<a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos </a>
						<div class="dropdown-menu bg-dark" aria-labelledby="menu-categorias">
						<?php
	                     foreach ($resultado as $row) {
		                ?>
						
							<a href="crear.tabla.php?categoria=<?php echo $row['categoria'] ?>#fot" class="dropdown-item text-info"><?php echo $row['categoria'] ?></a>
							<?php
                           }
                        ?>							
						</div>
					    </li>
						 						
						<li class="separador">
							<img src="img/separador.png"  width="15" height="30" alt="">
						</li>
											   
						
						<!-- <li class="nav-item">	
							
							<a href="/flica.com/formulario.php" class="nav-link">administracion</a>
						</li> -->	
						<li class="nav-item dropdown ">
						<a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administracion </a>
						<div class="dropdown-menu bg-dark" aria-labelledby="menu-categorias">
							<a href="formulario.php" class="dropdown-item text-info">Admin 1</a>
							<a href="formulario_cobros.php" class="dropdown-item text-info">Ventas 1</a>							
						</div>
					    </li>
						<li class="separador">
							<img src="img/separador.png"  width="15" height="30" alt="">
						</li>				
						<li class="nav-item">
							<a href="contacto1.php" class="nav-link">Contactanos</a>
						</li>
					</ul>
					
				</div>
			<!--  <img src="img/logo-largo.png" alt="logo flica" width="150px" > --> 
		</nav>
		</div>
		<div class="contenedor">
		<div class="row mx-0">
			<div class="col-12 px-0">
				<div class="carousel slide" id="principal-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#principal-carousel" data-slid-to="0" class="active"></li>
						<li data-target="#principal-carousel" data-slid-to="1"></li>
						<li data-target="#principal-carousel" data-slid-to="2"></li>
						<li data-target="#principal-carousel" data-slid-to="3"></li>
					</ol>

					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/flica-1.jpg"  alt="" width="100%">
						</div>
						<div class="carousel-item">
							<img src="img/flica-2.jpg" alt="" width="100%">
						</div>
						<div class="carousel-item">
							<img src="img/flica-3.jpg" alt="" width="100%">
						</div>
						<div class="carousel-item">
							<img src="img/flica-4.jpg" alt="" width="100%">
						</div>
					</div>

					<a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>

					<a href="#principal-carousel" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
			</div>
		</div>

		
	</div>

	
			