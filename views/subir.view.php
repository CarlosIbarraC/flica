<?php

require 'nav-admin.php';
?>
 <!-- <script src="js/jquery-3.2.1.min.js"></script>
		   <script>scr="js/alertify.js"</script>
		   <script src="js/funciones.js"></script>
	       <script src="js/popper.min.js"></script>
	       <script src="js/bootstrap.min.js"></script> -->
		  	 
	<title>subir</title>
</head>
<body>
	<header>
		<center>
			<div class="contenedor my-5" id="form_uno">
				<h1 class="titulo">SUBIR IMAGEN A CATALOGO</h1>
			
			</div>
		</center>
	</header>
	<div class="col-12 fotos">

		<form class="formulario" method="post" enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>#fin">

			<div class="col-12">
				<label for="foto">Selecciona La Imagen</label>
				<input   type="file" id="foto" name="foto">
			</div>
			<div class="col-12">
				<label for="titulo">Titulo del Producto</label>
				<input type="text" id="titulo" name="titulo" required>
			</div>

			<div class="col-12">
				<label for="texto">Descripcion Producto:</label>
				<textarea name="texto" id="texto" placeholder="Ingresa una descripcion" required></textarea>
			</div>
			<div class="col-12 mb-4">
			 <select REQUIRED name="categoria" >
            <option value="" disabled selected>seleccione Categoria</option>
				<?php
			 	$conexion = conexion('galeria','root', ''); 
			//$conexion = conexion( 'rodillos_galeria', 'rodillos_rodillo', 'salome-1978');
                if(!$conexion){
	            header('location: index.php');
                }
				 $statement = $conexion->prepare('SELECT categoria FROM categoria');
                 $statement->execute();
                 $resultado = $statement->fetchAll();
                  foreach ($resultado as $row) {
                 ?>        
                  <option value="<?php echo $row["categoria"]; ?>"><?php echo $row["categoria"]; ?></option>
               <?php
               } ?>   

			<?php if (isset($error)): ?>
				<p class="error"><?php echo $error; ?></p>
			<?php endif ?>
           </select>
		   <div class="col-12 mt-5">
				<input type="submit" class="submit " value="Guardar">
				<img src="fotos/<?php echo $foto['imagen']; ?>"class="img-thumbnail " alt="">
			</div>       
           </div>
		   <div id="tabla"> 
		   </div>
		   <!-- Button trigger modal -->
			

<!-- Modal -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Datos a Tabla</h4>
      </div>
      <div class="modal-body">
		<input type="hidden" name="" id="titulo"class="" value=" <?php echo $_SESSION['titulo'];?>   ">
		<label for="">Referencia:</label>
		<input type="text" name="" id="referencia"class=" input-sm">
		<label for="">Caracteristicas:</label>
		<input type="text" name="" id="caracteristicas"class=" input-sm">
      </div>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> -->
        <button type="button" class="btn btn-primary" id="guardarnuevo" data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal edicion -->


<!-- Modal -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
      </div>
      <div class="modal-body">
	  <label for="">Referencia:</label>
	    <input type="text" hidden="" id="id">
		<input type="text" name="" id="referenciae"class=" input-sm">
		<label for="">Caracteristicas:</label>
		<input type="text" name="" id="caracteristicase"class=" input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" Id="actualizadatos" data-dismiss="modal">Actualizar</button>
       
      </div>
    </div>
  </div>
</div>
			

		</form>	
	</div>	
   <center>
   	 <a href="index.php" id="fin" class="regresar  my-3"><i class="material-icons"> keyboard_arrow_left </i> volver</a>
   </center>
<?php  error_reporting(E_ALL ^ E_NOTICE);

$titulo = $_SESSION['titulo'] ;
 ?>

	<center>
		<footer>
			<p class="copyright">Galeria creadad por Carlos Ibarra - suwebya,com</p>
		</footer>
	</center>
	
</body>
</html>
<!-- llamamos tabla -->
<script type="text/javascript">
      $(document).ready(function(){
				$('#tabla').load('views/tabla.php');
				
	  });
</script>
<script type="text/javascript">
      $(document).ready(function(){
        $('#guardarnuevo').click(function(){
			titulo = $('#titulo').val();
			referencia = $('#referencia').val();
			caracteristicas = $('#caracteristicas').val();
			agregardatos(titulo,referencia,caracteristicas);
			
		});
		$('#actualizadatos').click(function(){
			actualizadatos();
		});
	  });
</script>
