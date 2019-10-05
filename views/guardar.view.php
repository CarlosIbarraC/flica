<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>categoria</title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Assistant:200|Kanit:100" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
	 <link rel="stylesheet" href="../css/bootstrap.min.css">
	 <link rel="stylesheet" href="../css/estilos1.css">
	 
	<title>subir</title>
</head>
<body>
	<header>
		<center>
			<div class="contenedor my-5">
				<h1 class="titulo">Crear Categoria</h1>
			</div>
		</center>
	</header>
	<div class="col-12 fotos">

		<form class="formulario" method="post" action="../guardar.categoria.php">			

			<div class="col-12">
				<label for="titulo">Titulo de la Categoria</label>
				<input type="text" id="categoria" name="categoria" required>
			</div>

			
			<div class="col-12">
				<input type="submit" class="submit" value="Subir categoria">
			</div>

		</form>	
		
	</div>	
   <center>
   	 <a href="index.php" class="regresar  my-3"><i class="fas fa-angle-left"></i> volover</a>
   </center>
	<center>
		<footer>
			<p class="copyright">Galeria creada por Carlos Ibarra - suwebya.com</p>
		</footer>
	</center>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>