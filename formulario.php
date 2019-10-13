<?php 
require 'funciones.php';
session_start();



$errores = ''; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	/* $password = hash('sha512', $password); */

	/* try {
		$conexion = new PDO('mysql:host=50.62.209.223;dbname=galeria', 'carlosibarra', 'salome1961');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	} */
	$conexion = conexion('galeria','root','');
	if(!$conexion){
		header('location: index.php');
		}
	    
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE admin = :usuario AND clave = :password ');
	$statement->execute(array(
		':usuario' => $usuario,
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: views_reporte.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
	$statement = $conexion->prepare('SELECT id,titulo,referencia FROM referencias');
$statement->execute();
$resultado = $statement->fetchAll(); 
$ini = 7705555;
foreach ($resultado as $row) {
    $id=$row['id'];
    $codigo= $ini.$id;    
    $titulo=$row['titulo'].' '. $row['referencia'];
	/* $conexion=conexion('galeria','root',''); */
	$conexion = conexion('galeria','root','');
    $statement1 = $conexion->prepare("INSERT INTO codigo (id_producto, nombre, codigo) VALUES ( '$id', '$titulo ','$codigo' )");
    $statement1->execute();
}
}
require 'views/formulario.view.php';
?>