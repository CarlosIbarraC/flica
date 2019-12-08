<?php

session_start();

require "funciones.php";

$conexion = conexion('galeria','root','');
$t=$_SESSION['titulo'];
$r=$_POST['referencia'];
$c=$_POST['caracteristicas'];
$statement = $conexion->prepare("INSERT INTO referencias (titulo,referencia,caracteristicas)values('$t' ,  '$r' , '$c')");
$statement->execute();
echo   $resultado = 1;
?>
