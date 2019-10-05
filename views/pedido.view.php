<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/css/formulario.css">
<head>	
	<title>Ingresar Cliente</title>
</head>
<body>
	<center>
    <div class="contenedor1">
      <h1 class="titulo my-4">Ingresar Cliente</h1>   
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario1" name="login" >
        <div class="form-group">
           <i class="icono izquierda fa fa-user"></i>
           <input type="text" name="cliente" class="usuario" placeholder="Cliente" value="<?php echo $cliente ?>" required>
        </div>
        <div class="form-group">
           <i class="icono izquierda fa fa-home"></i>
           <input type="text" name="direccion" class="usuario" placeholder="direccion"  value="<?php echo $direccion ?>" required>
        </div>
        <div class="form-group">
           <i class="icono izquierda fa fa-phone"></i>
           <input type="text" name="telefono" class="usuario" placeholder="telefono"  value="<?php echo $telefono ?>" required>
        </div>
        <div class="form-group">
           <i class="icono izquierda fa fa-city"></i>
           <input type="text" name="ciudad" class="usuario" placeholder="ciudad" value="<?php echo $ciudad ?>" required>
        </div>
        <div class="form-group">
        <i class="icono izquierda fa fa-id-card"></i>
        <input type="number" name="nit" class="usuario " placeholder="NIT solo numeros" size ='12'  value="<?php echo $nit ?>" required>                 
        </div>  
        <div class="form-group">
        <i class="icono izquierda fas fa-suitcase"></i> 
        <select name="vendedor" id="" class="usuario" required>       
            <option selected value="0">Elige Vendedor </option>
            <?php
              $statement= $conexion->prepare("SELECT vendedor FROM vendedores ");
               $statement->execute();
               $resultado = $statement->fetchAll(); 
               foreach ($resultado as $row) {
                  
                  echo "<option value=".$row['vendedor'].">" .$row['vendedor']. "</option>";
               }
            ?>
        </select>
      </div>   
        <div class="form-group mt-3">
        <input type="submit" name="submit" class="btn btn-success" >                 
        </div>  
           
       
      </form>  

      <a href="views_reporte.php"><button class="btn btn-success btn-large my-3 mx-2">Volver Panel Admin <i class="fas fa-arrow-circle-left"></i> </button></a>   
     
  </center>
  <script> 

MiFuncionJS(){ 
   alert ('EXITO');
  }
</script>