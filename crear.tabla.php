<?php

$categoria = $_GET['categoria'];

?>
<?php
require 'views/nav.view.php';
//require 'funciones.php'; 
$fotos_por_pagina = 6;


$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

/* $conexion = conexion('galeria', 'root', ''); */
$conexion = conexion('galeria','root','');
//$conexion = conexion( 'rodillos_galeria', 'rodillos_rodillo', 'salome-1978');
if (!$conexion) {
	die();
}
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM foto WHERE categoria = '$categoria' LIMIT $inicio, $fotos_por_pagina ");

$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
	error_reporting(0);
	header('Location: index.php');
}

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas ");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];


$total_paginas = ceil($total_post / $fotos_por_pagina);
?>
	 
	<title>Galeria</title>
</head>
<body>
	<header>
		<center>
			<div class="contenedor my-5">
			
				<h1 class="titulo" id="fot">Galeria De Productos <img src="img/logo-largo.png"  alt="" ></h1>
			</div>
		</center>
	</header>

	<section class="fotos">
		<div class="contenedor ">
			<div class="col-12">
				<div class="row ">
				<div class="col-12 col-sm-4"> 						
										
				<?php
				require 'categorias.php';
				 ?>      					                  
			   <?php if (isset($error)): ?>
				   <p class="error"><?php echo $error; ?></p>
			   <?php endif ?>  </div>
									 			

<div class="col-12 col-sm-8" >
   <div class="row mx-0">
				   <?php foreach($fotos as $foto):?>
   <div class="col-6 col-sm-4 thumb thumbnail">
   <a href="foto.php?id=<?php echo $foto['id']; ?>#fot">
	   <img src="fotos/<?php echo $foto['imagen'] ?>"class="img-thumbnail " alt="">
	   <p><?php echo $foto['titulo'] ?></p>
   </a>
</div>
	   <?php endforeach;?>	   						
						</div>							
					 <div class="paginacion">
							<?php if ($pagina_actual > 1): ?>
					<a href="crear.tabla.php?p=<?php echo $pagina_actual - 1?>&categoria=<?php echo $categoria;?>&id=#fot " class="izquierda"><i class="fas fa-angle-left"></i> Pagina Anterior</a>
				<?php endif ?>
	
				<?php if ($total_paginas != $pagina_actual): ?>
					<a href="crear.tabla.php?p=<?php echo $pagina_actual + 1; ?>&categoria=<?php echo $categoria;?>&id=#fot" class="derecha">Pagina Siguiente <i class="fas fa-angle-right"></i></a>
				<?php endif ?>		
					</div>
					
				</div>
			</div>
		</div>		
	</section>
	 <center>
   	 <a href="index.php#fot" class="regresar my-3"><i class="fas fa-angle-left"></i> volover</a>
   </center>	

	<center>
		<footer>
			<p class="copyright">Galeria creadad por Carlos Ibarra - suwebya,com</p>
		</footer>
	</center>
	<a href="#" id="js_up" class="boton-subir">
 
 <i class="material-icons" aria-hidden="true">	trending_up</i>
 <!-- <i class="fas fa-arrow-circle-up"></i> -->

</a>

<script>

$(window).scroll(function(){
 if($(this).scrollTop() > 300){ 
   $("#js_up").slideDown(300);
 }else{ // si no
   $("#js_up").slideUp(300); 
 }
});


$("#js_up i").on('click', function (e) { 
 e.preventDefault(); 
 $("body,html").animate({
   scrollTop: 0 
 },900);
 return false; //rompe el bucle
});
</script>
<script type="text/javascript">
	 $(document).ready(function(){
	   $('#buscador').load('buscador.php');
	 });
</script>
</body>
</html>