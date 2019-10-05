<?php 

/* function conexion($tabla, $usuario, $pass){
	try {
		$conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
} */
function conexion($tabla, $usuario, $pass){
	try {
		$conexion = new PDO("mysql:host=localhost;dbname=$tabla;charset=utf8mb4", $usuario, $pass);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}
?>
