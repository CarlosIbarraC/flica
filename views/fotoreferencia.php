
	 
<title>Galeria</title>
</head>
<body>
	<header>
		<center>
			<div class="contenedor my-5">
				<h1 class="titulo" id="fot">Galeria De Productos</h1>
				<h1 class="titulo">Producto: <?php if (!empty($foto['titulo'])) {
				echo $foto['titulo'];
			} else {
				echo $foto['imagen'];
			} ?></h1>
			</div>

		</center>
	</header>
	<div class="col-12 fotos">

		<div class="row">

			<div class="col-8 col-sm-7 foto">
				<center>
					<img src="fotos/<?php echo $foto['imagen']; ?>" class="img-fluid"  alt="">		
					
				</center>
			</div>
			<div class="col-4 col-sm-5 px-5 foto">
				<center>
					<p class="texto text-center"><?php echo $foto['texto']; ?></p>
					
				</center>
			</div>						
		</div>
	</div>
	  <div class="contenedor">
			<div class="col-12">
			<?php
							   require 't.productos.php';						   
						?>	
			</div>	
      </div>	
		
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