<?php
require 'funciones.php';
require 'views/nav-admin.php';
/* require 'funciones.php'; */
mb_internal_encoding('UTF-8');

$cliente='';$facturas='';$fecha='';$monto='';
if ($_SERVER['REQUEST_METHOD'] == 'POST'  ) {
    $cliente = $_POST['cliente'];   
    $facturas = filter_var(strtoupper($_POST['facturas']), FILTER_SANITIZE_STRING);
    $fecha = $_POST['fecha'];
    $monto = filter_var(strtoupper($_POST['monto']), FILTER_SANITIZE_STRING);    
    $vendedor= $_POST['vendedor'];

    if ($vendedor!='0') { 
        /* $conexion = conexion('galeria','root',''); */
    $conexion = conexion('galeria','root','');
	if(!$conexion){
		header('location: index.php');
		}
	$statement = $conexion->prepare("INSERT INTO factura(cliente, facturas, fecha,  monto,vendedor)
    VALUES('$cliente', '$facturas','$fecha','$monto','$vendedor' )");     
    $statement->execute();
    $cliente='';$facturas='';$fecha='';$monto='';
    echo '<script language="javascript">alert("cliente ingresado");</script>';
}else{
    echo '<script language="javascript">alert("ingresa vendedor");</script>';
}
}
require 'views/ingresarFacturaView.php';

?>

