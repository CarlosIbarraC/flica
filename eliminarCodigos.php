<?php

require "funciones.php";
/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
 $id = $_POST['id'];
$statement = $conexion->prepare("DELETE From codigo where id_producto = '$id'");
$statement->execute();
echo $resultado = 1 ;

?>