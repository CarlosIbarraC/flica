<?php


require 'conexion.php';

/* $conexion = conexion('galeria', 'root', ''); */
$conexion = conexion('galeria', 'carlosibarra', 'salome1961');
if (!$conexion) {
  die();
}

 $nombre=$_POST['codigo'];

 $sql="INSERT Into codigo(nombre)  VALUES('$nombre')";
  
    $result=mysqli_query($conexion,$sql);

    $id=mysqli_insert_id($conexion);
    $ad='77042';
    $codigo= $ad.$id.date('is');

    $sql="UPDATE codigo set codigo='$codigo' where id_producto='$id'";
    mysqli_query($conexion,$sql);
    if ($sql) { 
      echo "categoria guardada";
     header("location:../index.php");       
    } 
    else{
      echo("INSERCION NO EXITOSA");     
    }

