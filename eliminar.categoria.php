<?php
session_start();
require "funciones.php";
$id = $_SESSION['id'];
echo $id;
/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
$statement = $conexion->prepare("DELETE From categoria WHERE categoria='$id'");
$statement->execute();

$statement3= $conexion->prepare("SELECT* From foto WHERE categoria=:id"); 
$statement3->execute(array(':id'=> $id));
$resultado = $statement3->fetchAll();

$titulo= $resultado['titulo'];
echo $titulo;
 foreach($resultado as $row){
   $fre=$row['titulo'];
$statement2 = $conexion->prepare("DELETE FROM referencias WHERE titulo = '$fre'");
$statement2->execute();
 }

$statement1 = $conexion->prepare("DELETE From foto WHERE categoria='$id'");
$statement1->execute();

  header('Location: index.php');  

?>