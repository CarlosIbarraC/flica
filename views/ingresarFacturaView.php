<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/css/formulario.css">
<head>	
	<title>Ingresar Cliente</title>
</head>
<body>
	<center>
    <div class="contenedor1">
      <h1 class="titulo my-4">Ingresar Factura</h1>   
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario1" name="login" >
        <div class="form-group">
           <i class="icono izquierda material-icons">person</i>
           <select name="cliente" id="buscarCliente" class="usuario " value="<?php echo $row[0] ?>" required>       
            <option selected value="">Cliente </option>
            <?php
              $statement= $conexion->prepare("SELECT cliente FROM clientes ");
               $statement->execute();
               $resultado = $statement->fetchAll(); 
               foreach ($resultado as $row) {  
                   ?>                
                  <option value="<?php echo $row[0] ?>" ><?php echo $row[0] ?></option>
                  <?php
               }
            ?>
        </select>
        </div>
        <div class="form-group">
        <i class="icono izquierda material-icons"> insert_drive_file</i>
           <input type="text" name="facturas" class="usuario" placeholder="factura"  required>
        </div>
        <div class="form-group">
        <i class="icono izquierda material-icons"> event_available</i>
           <input type="date" name="fecha" class="usuario" placeholder="fecha"  required>
        </div>
        <div class="form-group">
        <i class="icono izquierda material-icons"> local_atm</i>
           <input type="number" name="monto" step="0.01" class="usuario factura" placeholder="valor"  required>
           
        </div>   
        
      
        <div class="form-group mt-3">
        <input type="submit" name="submit" class="btn btn-success" id="input2" >                 
        </div>  
           
       
      </form>  

      <a href="views_reporte.php"><button class="btn btn-success btn-large my-3 mx-2">Volver Panel Admin <i class="fas fa-arrow-circle-left"></i> </button></a>   
     
  </center>
  <script type="text/javascript"> 
    $(document).ready(function(){
        $('#buscarCliente').select2();

    });
    function saltar(e,id)
{
	// Obtenemos la tecla pulsada
	(e.keyCode)?k=e.keyCode:k=e.which;
 
	// Si la tecla pulsada es enter (codigo ascii 13)
	if(k==13)
	{
		// Si la variable id contiene "submit" enviamos el formulario
		if(id=="submit")
		{
			document.forms[0].submit();
		}else{
			// nos posicionamos en el siguiente input
			document.getElementById(id).focus();
		}
	}
}

</script>