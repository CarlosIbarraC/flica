<?php

require "funciones.php";
/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
 $id = $_POST['id'];
$statement = $conexion->prepare("DELETE From remision where id_remision = '$id'");
$statement->execute();
echo $resultado = 1 ;

?>