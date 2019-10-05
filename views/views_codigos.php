<?php
require 'views/nav-admin.php';


 $conexion= new mysqli('localhost','root','','galeria'); 
/* $conexion= new mysqli('50.62.209.18','carlosibarra','salome1961','galeria'); */
if ($conexion->connect_errno){
    die('lo siento no se conecto');
}
$sql="SELECT  id_producto  FROM codigo ORDER BY id_producto DESC LIMIT 1";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
$max= $row['id_producto']; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>codigos</title>
</head>
<body>
<form class="formulario" method="post" action="tcpdf/index.php" target="_blank">			

<div class="col-12">
    <label for="titulo">Imprimir codigos de barras</label>
    <input type="number" name="id_referencia" placeholder="id del producto" required class="form-control" min="188" max="<?php echo $max?>">
    <input type="number" name="cantidad" placeholder="cantidad" required class="form-control">
</div>


<div class="col-12">
 <input type="submit" class="btn btn-warning" value="imprimir pdf"/><i class="fas fa-file-pdf "></i>  
</div>

</form>	
</body>