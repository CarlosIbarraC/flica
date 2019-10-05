<?php
require 'funciones.php';
$conexion = conexion('galeria', 'root', '');
if (!$conexion) {
  die();
}
 $categoria = $_GET['categoria']  ;
  $statement = $conexion->prepare("INSERT INTO categoria (id,categoria) VALUES(null,'$categoria')");
    $statement->execute();

    if ($statement) { 
      echo "categoria guardada";
     header("location:index.php");       
    } 
    else{
      echo("INSERCION NO EXITOSA");     
    }
?>