<?php
error_reporting(0);
header('Content-type: application/json; charset=utf-8');

$cliente = $_POST['cliente'];


function validarDatos($cliente){
	if($cliente == ''){
		return false;
	}
	return true;
}

if(validarDatos($cliente)){
	$conexion = new mysqli('localhost', 'root', '', 'galeria');
	$conexion->set_charset('utf8');

	if($conexion->connect_errno){
		$respuesta = ['error' => true];
	} else {
		$statement = $conexion->prepare("INSERT INTO numeroremision(cliente) VALUES(?)"); 
		$statement->bind_param("s", $cliente);
		$statement->execute();

		if($conexion->affected_rows <= 0){
			$respuesta = ['error' => true];
        }
        
       
	}
} 

echo json_encode($respuesta);