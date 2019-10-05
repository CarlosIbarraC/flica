<?php
session_start(); 
require 'views/nav.view.php';
 
/* require 'funciones.php'; */
/* $conexion = conexion('galeria', 'root', ''); */
$conexion = conexion('galeria','root','');
if (!$conexion) {
	die();
}

$id =  $_SESSION['idfoto'];

$statement = $conexion->prepare('SELECT * FROM foto WHERE id = :id');
$statement->execute(array(':id' => $id));

$foto = $statement->fetch();

$_SESSION['foto'] = $foto['titulo'];

require 'views/fotoreferencia.php';

?>
