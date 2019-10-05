<?php

session_start();
/* if(isset ($_SESSION['titulo']){
    header('Location: subir.php#form_uno');
} */
require "funciones.php";
/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
$t=$_SESSION['titulo'];
$r=$_POST['referencia'];
$c=$_POST['caracteristicas'];
$statement = $conexion->prepare("INSERT INTO referencias (titulo,referencia,caracteristicas)values('$t' ,  '$r' , '$c')");
$statement->execute();
echo   $resultado = 1;
?>
