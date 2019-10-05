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
	    $statement = $conexion->prepare(" SELECT* FROM numeroremision  ORDER BY `remision` DESC LIMIT 1");
	    $statement->execute();
	    $resultados = $statement->get_result();	   
        $respuesta = [];
        
        while($fila = $resultados->fetch_assoc()){
            $usuario = [
                'remision' 		=> $fila['remision'],
                'cliente' 	=> $fila['cliente'],
                'fecha'		=> $fila['fecha']
            ];
            array_push($respuesta,$usuario);
        }
}
echo json_encode($respuesta); 







 