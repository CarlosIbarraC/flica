<?php
require 'nav-admin.php';
?>
<!DOCTYPE html> 
<html lang="en">
  <link rel="stylesheet" href="css/css/formulario.css">
<head>	
	<title>Iniciar Sesión </title>
</head>  
<body>
	<center>
    <div class="contenedor1">
      <h1 class="titulo my-4">Iniciar Sesión</h1>   
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario1" name="login">
        <div class="form-group">
          <i class="material-icons icono izquierda" style="font-size:24px">person</i>
           <input type="text" name="usuario" class="usuario" placeholder="administrador">
        </div>
        <div class="form-group">
        <i class="material-icons icono izquierda ">vpn_key</i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
        <i class="submit-btn material-icons" onclick="login.submit()">forward</i>           
        </div>            
        <?php if(!empty($errores)): ?>
          <div class="error">
            <ul>
              <?php echo $errores; ?>
            </ul>
          </div>
        <?php endif; ?>
      </form>    
     
    </div>
  </center>
</body>
</html>