
	 
	<title>Flica</title>
</head>
<body>
	<header>
		<center>
			<div class="contenedor my-5">
				<h1 class="titulo ">NUESTRA EMPRESA </h1>
			</div>
		</center>
	</header>
	<center>
			<div class="contenedor my-5 ">
				<div class="row mx-0">
					<div class="col-12 col-sm-4 ">
					<a href="#nosotros">
							<img src="img/img-nosotros.png" class="img-fluid" alt="">	
							</a>					
						</div>					
						<div class="col-12 col-sm-4 ">
						<a href="#mision">
						<img src="img/img-mision.png" class="img-fluid" alt="">
						</a>
						</div>
						<div class="col-12 col-sm-4 ">
						<a href="#vision">
						<img src="img/img-vision.png" class="img-fluid" alt="">
						</a>
						</div>
					</div>
				</div> 
			</div>
		</center>		
        <center>
        	<center>
			<div class="contenedor my-5 mx-4">
				<h1 class="titulo" id="fot" >NUESTROS PRODUCTOS </h1>
			</div>
			<div id="buscador" class="my-4">			 
			</div>
			
		</center>		
        <section class="fotos">	
          <div class="contenedor">
				<div class="row mx-0">
					<div class="col-12 col-sm-4 acordeon">
						<?php
						require 'categorias.php';
						?>
									    <?php if (isset($error)): ?>
									    	<p class="error"><?php echo $error; ?></p>
									    <?php endif ?>  </div>				 			
					
						<div class="col-12 col-sm-8">
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
						<a href="index.php?p=<?php echo $pagina_actual - 1; ?>&id=#fot" class="izquierda"><i class="material-icons">	keyboard_arrow_left</i> Pagina Anterior</a>
					<?php endif ?>
						
					<?php if ($total_paginas != $pagina_actual): ?>
						<a href="index.php?p=<?php echo $pagina_actual + 1; ?>&id=#fot" class="derecha">Pagina Siguiente <i class="material-icons">	keyboard_arrow_right</i></a>
					<?php endif ?>		
						</div>
					</div>
								</div>
		</div>		
	</section>
	
	<?php 
      require 'contacto.php';
	 ?>
    <div class="contenedor px-5">
		<div class="row mx-0">
			<div class="col-12 mision col-md-4 ">
			<h2 class="py-4" id="mision">Mision</h2>
			<p><em>Somos DISTRIBUCIONES <strong>F L I C A</strong> una empresa dedicada a la producción y comercialización de elementos para ferretería, nuestro principal objetivo es la comercialización de productos que cumplan con altos estándares de calidad con el fin de satisfacer las expectativas de nuestros clientes potenciales como la de los usuarios finales .
            La calidad esta relacionada con la generación de valor para cada uno de nuestros clientes, como para la organización, basados en la buena administración de los recursos y fomentando el desarrollo del talento humano. 
            </em></p>	
			</div>
			<div class="col-12 vision col-md-4">
			<h2 class="py-4"  id="vision">Vision</h2>
			<p><em>Para el año 2020 DISTRIBUCIONES F L I C A , será una empresa líder en el mercado, atendiendo nichos  ampliamente objetivos y posicionando el nombre como una empresa de alto reconocimiento en la comercialización de nuestro portafolio </em></p>	
			</div>
			<div class="col-12 experiencia col-md-4">
			<h2 class="py-4" id="nosotros">Objetivo General</h2>
			<p><em>Mantener una posición solida, tanto del mercado como financiera,  con el fin de construir un futuro exitoso en DISTRIBUCIONES F L I C A  de manera independiente y manteniendo siempre nuestra identidad corporativa. </em></p>	
			</div>
		</div>
	</div>



	<center>
	<?php
     require "footter.php";
     ?>
		<footer>		
			<p class="copyright">Galeria creadad por C.Ibarra.C - <a href="https://suwebya.com">  suwebya.com</a></p>
		</footer>
	</center>
	<a href="#" id="js_up" class="boton-subir">
 
  <i class="material-icons" aria-hidden="true">vertical_align_top</i>
 
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