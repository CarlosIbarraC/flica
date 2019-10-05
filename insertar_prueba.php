<?php

$conexion = new mysqli('localhost', 'root', '', 'galeria');

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("SELECT * FROM clientes order by cliente");
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
    echo '<option value="0">Seleccionalo</option>';
	while(($fila = $resultados->fetch_assoc()) != NULL){       
        echo '<option value="'.$fila["cliente"].'">'.$fila["cliente"].'</option>';
		array_push($respuesta,$fila["cliente"]);
	}
}