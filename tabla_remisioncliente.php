<?php
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
$nombre = $_POST['cliente'];
$conexion = new mysqli('localhost', 'root', '', 'galeria');
if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("SELECT * FROM numeroremision WHERE cliente= '$nombre' Order BY remision ");
    $statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'cliente' 	=> $fila['cliente'],
			'remision' 	=> $fila['remision'],
			'fecha'		=> $fila['fecha']
			
		];
		array_push($respuesta,$usuario);
	}
}
echo json_encode($respuesta);  