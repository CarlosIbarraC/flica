<?php
session_start();
$remision = $_POST['rem'];
$cliente = $_POST['cliente1'];
$producto = $_POST['respro'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$subtotal = $_POST['subtotal'];
$totales = $_POST['totales'];

 $_SESSION['cliente']= $cliente;
 $_SESSION['remi']= $remision;


function validarDatos($cliente,$producto, $precio, $cantidad, $subtotal,$remision,$totales){
	if($cliente == ''){
		return false;
	}elseif($producto == ''){
		return false;
	} elseif($precio == '' ){
		return false;
	} elseif($cantidad == ''){
		return false;
	} elseif($subtotal == ''){
		return false;
	} 
	elseif($remision == ''){
		return false;
	} elseif($totales == ''){
		return false;
	} 
	return true;
}

if(validarDatos($cliente,$producto, $precio, $cantidad, $subtotal,$remision,$totales)){
	$conexion = new mysqli('localhost', 'root', '', 'galeria');
	$conexion->set_charset('utf8');

	if($conexion->connect_errno){
		$respuesta = ['error' => true];
	} else {
		$statement = $conexion->prepare("INSERT INTO remision(remision, cliente, producto, cantidad, precio, subtotal,acumulado) VALUES('$remision', '$cliente', '$producto', '$cantidad', '$precio', '$subtotal','$totales')"); 
		
		$statement->execute();

		if($conexion->affected_rows <= 0){
			$respuesta = ['error' => true];
		}

		$respuesta = [];
	}
} else {
	$respuesta = ['error' => true];
}




echo $respuesta = 1;