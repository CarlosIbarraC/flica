<?php
require 'funciones.php';
require 'views/nav-admin.php';
/* require 'funciones.php'; */
mb_internal_encoding('UTF-8');


    

if ($_SERVER['REQUEST_METHOD'] == 'POST'  ) {
    $cliente = $_POST['cliente'];   
    $facturas = filter_var(strtoupper($_POST['facturas']), FILTER_SANITIZE_STRING);
    $fecha = $_POST['fecha'];
    $monto = filter_var(strtoupper($_POST['monto']), FILTER_SANITIZE_STRING);    
    
    
    
    
        /* $conexion = conexion('galeria','root',''); */
    $conexion = conexion('galeria','root','');
	if(!$conexion){
		header('location: index.php');
        }
        
	$statement = $conexion->prepare("INSERT INTO factura(cliente, facturas, fecha,  monto)
    VALUES('$cliente', '$facturas','$fecha','$monto' )");     
    $statement->execute();
    unset($GLOBALS['cliente']);
    
    echo '<script language="javascript">alert("factura ingresada");</script>';
    $cliente=$_POST['cliente'];
    
    
   
}

require 'views/ingresarFacturaView.php';
// formulario de facturas

?>

