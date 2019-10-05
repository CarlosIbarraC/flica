<?php


require 'views/nav.view.php';



/* $conexion = conexion('galeria', 'root', ''); */
$conexion = conexion('galeria','root','');
if (!$conexion) {
	die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
	header('Location: index.php');
}

$statement = $conexion->prepare('SELECT * FROM foto WHERE id = :id');
$statement->execute(array(':id' => $id));
$foto = $statement->fetch();
$titulo = $foto['titulo'];
/* echo $titulo; */

if (!$foto) {
	header('Location: index.php');
}

require 'views/foto.view.php';
/* require 't.productos.php';
 */
?>