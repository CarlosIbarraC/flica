<?php

require "funciones.php";
/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
 $id = $_POST['id'];
$statement = $conexion->prepare("DELETE From referencias where id= '$id'");
$statement->execute();
echo $resultado = 1 ;

?>