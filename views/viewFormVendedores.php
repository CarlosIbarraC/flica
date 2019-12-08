<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/css/formulario.css">
<head>	
	<title>Ingresar Vendedor</title>
</head>
<body>


	<center>
    <div class="contenedor1">
      <h1 class="titulo my-4">Ingresar Vendedor</h1>   
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario1" name="login" >
        <div class="form-group">
           <i class="icono izquierda material-icons"> group</i>
           <input type="text" name="vendedor" class="usuario" placeholder="vendedor" required>
        </div>
        <div class="form-group">
        <i class="icono izquierda material-icons">https</i>
           <input TYPE="password" name="clave" class="usuario" placeholder="clave" required>
        </div>
        <div class="form-group">
        <i class="icono izquierda material-icons bg-info">https</i>
           <input TYPE="password" name="claveConfirmo" class="usuario" placeholder="confirmar clave" required>
        </div>
        
        <div class="form-group">
        <input type="submit" name="submit" class="btn btn-warning" value="Guardar" placeholder="guardar">                 
        </div>       
       
      </form> 
     
      <a href="views_reporte.php"><button class="btn btn-info btn-large my-3 mx-2">Volver Panel Admin <i class="material-icons"> trending_up</i> </button></a>
      <?php
        if(!empty($mensaje)):
        ?>
        <div class="mensaje"> 
        <?php
            echo $mensaje;
        ?>
        </div>
        <?php endif;?>   
     
  </center>
 </body>