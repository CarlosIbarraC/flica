<?php
require 'funciones.php';
require 'views/nav-admin.php';

?>

		<center>
			<h1 class="h2 titulo">FORMULARIO NUEVA CATEGORIA</h1>
			<!-- <form action="guardar.categoria.php" method="POST" class="form-horizontal"> -->
				<div class="form-group">
					<div class="col-10 col-sm-6">
				<!-- <input type="hidden" name="vendedor" class="form-control" value="<?php echo $vendedor; ?>"> -->
				<form class=" form-horizontal" method="GET"  action="guardar.categoria.php">
				<input type="text" REQUIRED name="categoria" placeholder="categoria"  class="form-control mt-2" values="">
				
				<input type="submit" class=" btn  btn-sm btn-outline-info mt-2" value="G U A R D A R"/>
			        </div>
			    </div>
			</form>
		</center>
	<center>	
<div class=' col-sm-10 col-8'>
<form action="alert-Categoria.php" method="POST" class="formulario1 mt-2 "> 
	 <center>     
	 <select REQUIRED name="categoria" class='mt-5 form-control' >
	 <option value="" disabled selected>seleccione Categoria (si elimina se van los adjuntos)</option>
	<?php
	try {	
		/* $conexion = new PDO('mysql:host=localhost;dbname=galeria', 'root', ''); */
		$conexion = new PDO('mysql:host=localhost;dbname=galeria','root','');
	} catch (PDOException $e) {
	  echo "Error: " . $e->getMessage();
	}
	
	$statement1 = $conexion->prepare('SELECT categoria FROM categoria ');
	$statement1->execute();
	$resultado = $statement1->fetchAll();
	foreach ($resultado as $row) {
	?>	
	<option value="<?php echo $row["categoria"]; ?>" ><?php echo $row["categoria"]; ?></option>
	
	<?php
	} 
	echo $_SESSION['prueba'];
	?>                
		 
	</center>     
	</center>
	<center>
	<input class="btn  btn-sm btn-outline-info mt-2"  type="submit" value="E L I M I N A R" name="submit"/>
	</center>
	</div>
	</form>
	</div>
	 
</div>
</center>