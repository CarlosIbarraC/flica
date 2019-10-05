<?php 
require 'funciones.php';
session_start();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$vendedor = filter_var(strtolower($_POST['vendedor']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	/* $password = hash('sha512', $password); */

	/* $conexion = conexion('galeria','root',''); */
	$conexion = conexion('galeria','root','');
	if(!$conexion){
		header('location: index.php');
		}
	
	$statement = $conexion->prepare('SELECT * FROM vendedores WHERE vendedor = :usuario AND password = :password ');
	$statement->execute(array(
		':usuario' => $vendedor,
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['vendedor'] = $vendedor;
		header('Location: tabla_envio.php');
	} else {
		 '<li>Datos Incorrectos</li>';
	}
}
require 'views/cobros_view.php';
?>