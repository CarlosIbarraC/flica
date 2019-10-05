
	 
<title>Galeria</title>
</head>
<body>
	<header>		
			<div class="contenedor my-5">
			<center>
				<h1 class="titulo" id="fot">Galeria De Productos</h1>
				<h1 class="titulo">Producto: <?php if (!empty($foto['titulo'])) {
				echo $foto['titulo'];
				$_SESSION['foto']= $foto['titulo'];
			} else {
				echo $foto['imagen'];
			} ?></h1>
			</center>
			</div>		
	</header>
	<div class="col-12 fotos ">
		<div class="row mx-auto">
			
				<div class="col-10 col-sm-6 foto ">					
						<img src="fotos/<?php echo $foto['imagen']; ?>" class="img-fluid"  alt="">			
				</div>
				<div class="col-10 col-sm-6 foto">
				  <?php 

				  echo $foto['texto'];
				 			 				 
				 
				 ?>
				</div>	
					
		</div>		
	</div>
	<?php   require 't.productos.php'	?>		
   <center>
   	 <a href="index.php#fot" class="regresar my-3"><i class="fas fa-angle-left"></i> volover</a>
   </center>
	<center>
		<footer>
			<p class="copyright">Galeria creadad por Carlos Ibarra - suwebya,com</p>
		</footer>
	</center>
</body>
</html>