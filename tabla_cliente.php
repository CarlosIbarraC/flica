<?php
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
$nombre = $_POST['cliemte'];
$conexion = new mysqli('localhost', 'root', '', 'galeria');
if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("SELECT * FROM clientes WHERE cliente= '$nombre' ");
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'id_clientes' 		=> $fila['id_clientes'],
			'cliente' 	=> $fila['cliente'],
			'direccion'		=> $fila['direccion'],
			'telefono'		=> $fila['telefono'],
			'ciudad'	=> $fila['ciudad'],
			'nit'	=> $fila['nit'],
		];
		array_push($respuesta,$usuario);
	}
}
echo json_encode($respuesta);  


