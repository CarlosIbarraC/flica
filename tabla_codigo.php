<?php
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
$nombre = $_POST['codigo'];
$conexion = new mysqli('localhost', 'root', '', 'galeria');
if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("SELECT * FROM codigo WHERE codigo= '$nombre' ");
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'id_producto' 		=> $fila['id_producto'],
			'nombre' 	=> $fila['nombre']			
		];
		array_push($respuesta,$usuario);
	}
}
echo json_encode($respuesta); 


