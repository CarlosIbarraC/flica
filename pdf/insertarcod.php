<?php
//require 'conexion.php';

/* $conexion=conexion('galeria','root',''); */
$conexion = conexion('galeria','root','');
$statement = $conexion->prepare('SELECT id,titulo,referencia FROM referencias');
$statement->execute();
$resultado = $statement->fetchAll(); 
$ini = 7705555;
foreach ($resultado as $row) {
    $id=$row['id'];
    $codigo= $ini.$id;    
    $titulo=$row['titulo'].' '. $row['referencia'];
   /*  $conexion=conexion('galeria','root',''); */
    $conexion=conexion('galeria','carlosibarra','salome1961');
    $statement1 = $conexion->prepare("INSERT INTO codigo (id_producto, nombre, codigo) VALUES ( '$id', '$titulo ','$codigo' )");
    $statement1->execute();
}

?>
