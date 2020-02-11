<?php
session_start();
require "funciones.php";
$conexion = conexion('galeria','root','');
$i=$_POST['id'];
$r=$_POST['referencia'];
$c=$_POST['caracteristicas'];
$statement = $conexion->prepare("UPDATE referencias SET referencia='$r',caracteristicas='$c' where id='$i' ");
$statement->execute();
$d= $r.$c;
$statement1 = $conexion->prepare("UPDATE codigo SET nombre='$d' where id_producto='$i' ");
$statement1->execute();
echo   $resultado = 1;
?>