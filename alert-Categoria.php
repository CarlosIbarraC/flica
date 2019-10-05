
<?php
session_start();
require 'funciones.php';
require 'views/nav-admin.php';


$titulo = $_POST['categoria'];
$_SESSION['id'] = $titulo ;
?>
<body>		
	<center>
		<div class="alert alert-warning mt-3">
					<strong>Aviso</strong> Esta seguro que desea eliminar ...<strong><?php echo strtoupper( $titulo) ?></strong> <button class="btn btn-warning btn-sm"><a href="eliminar.categoria.php" class="alert-link">eliminar</a></button> <button class="btn btn-warning btn-sm"><a href="entrar.categoria.php" class="alert-link">volver</a> </button>
        </div>
</center> 
<div class="logoc">
			<h6 class='ml-5'>Ibarra&desarrollos</h6>			
			</div>	  
</body>