<?php

session_start();
require 'funciones.php';

/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
if(!$conexion){
	header('location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
	$check = @getimagesize($_FILES['foto']['tmp_name']);
	if ($check !== false) {
		$carpeta_destino = 'fotos/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		@move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido); 
   
		$_SESSION['titulo']= $_POST['titulo'];

		$statement = $conexion->prepare("
			INSERT INTO foto (titulo, imagen, texto, categoria)
			 VALUES (:titulo, :imagen, :texto, :categoria )
		");

		$statement->execute(array(
			':titulo' => $_POST['titulo'],
			':imagen' => $_FILES['foto']['name'],
			':texto' => $_POST['texto'],
			':categoria' => $_POST['categoria']
		));
       
		header('Location: subir.php');
	} else {
		$error = "El archivo no es una imagen o el archivo es muy pesado";
	}
}



require 'views/subir.view.php';
?>

