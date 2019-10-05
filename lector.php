<?php
require 'funciones.php';
require 'views/nav-admin.php';

?>
<div class="container">
    <div class="row mx-0">
        <div class="col-6">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="POST" name ="login">

         <input type="text" name="lector" class="form-group px-3" placeholder="lector de codigos o cod.">

         <!-- <button type="button" class="btn btn-warning" name="login" >Actualizar</button> -->
        </form>
        </div>
    </div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$codigo = $_POST['lector'];
$conexion = conexion('galeria','root','');
if (!$conexion) {
	die();
}
$statement = $conexion->prepare("SELECT * FROM codigo where codigo= $codigo ");
$statement->execute();
$resultado = $statement->fetchAll();
foreach ($resultado as $row) {
    ?> 
<div class="col-6">
     <h4 class=" px-3">producto:<?php echo $row["nombre"]; ?></h4>
</div>
</div>
  <?php
  }
}
  ?> 
