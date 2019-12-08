
<?php
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
$remision = $_POST['remision'];
 
$conexion = new mysqli('localhost', 'root', '', 'galeria');

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$x=$x+1;
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("SELECT * FROM remision WHERE remision= '$remision'"); 
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			 'remision' => $fila['remision'],
			'producto' 	=> $fila['producto'],
			'cantidad'		=> $fila['cantidad'],
			'precio'		=> $fila['precio'],
			'subtotal'	=> $fila['subtotal'],
			'acumulado' => $fila['acumulado']
		];
		array_push($respuesta, $usuario);
	}
}

echo json_encode($respuesta); 