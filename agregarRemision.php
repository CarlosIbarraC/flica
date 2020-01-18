<?php
session_start();
require "funciones.php";
$conexion = conexion('galeria','root','');
$remision=$_POST['remision'];
$cliente=$_POST['cliente'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];
$_SESSION['remision']=$_POST['remision'];

$statement = $conexion->prepare("INSERT INTO remision (remision,cliente,producto,cantidad,precio)values('$remision', '$cliente','$producto','$cantidad','$precio')");
$statement->execute();
echo   $resultado = 1;
?>
