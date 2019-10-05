<?php


require 'funciones.php';

require 'views/nav-admin.php';


/* $conexion = conexion('galeria', 'root', ''); */
$conexion = conexion('galeria','root','');
if (!$conexion) {
  die();
}
$statement = $conexion->prepare("SELECT*FROM referencias");
$statement->execute();
$resultado = $statement->fetchAll(); 				                
     $i=0;                     

 foreach ($resultado as $row) {
     $n=array($row['id']=>($row['titulo'].' '.$row['referencia'])); 
   
    $i++;	
    $nom = $n[$row['id']]; 
    $id = $row['id'];
    $codigo=$id.date('is');
    $statement = $conexion->prepare("INSERT Into codigo(id_producto ,nombre ,codigo)  VALUES('$id', '$nom','$codigo' )");
    $statement->execute();                                       	    	 
  
}  

 ?>


 
