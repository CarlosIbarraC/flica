<?php
require 'funciones.php';
require 'views/nav-admin.php';

/* require 'funciones.php'; */

$enviado='';
$cliente='';$direccion='';$telefono='';$ciudad='';$nit='';
if ($_SERVER['REQUEST_METHOD'] == 'POST'  ) {
	$cliente = filter_var(strtoupper($_POST['cliente']), FILTER_SANITIZE_STRING);
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $nit = $_POST['nit'];
    $vendedor= $_POST['vendedor'];

    if ($vendedor!='0') { 
        /* $conexion = conexion('galeria','root',''); */
    $conexion = conexion('galeria','root','');
	if(!$conexion){
		header('location: index.php');
		}
	$statement = $conexion->prepare("INSERT INTO clientes(cliente, direccion, telefono, ciudad, nit,vendedor)
    VALUES('$cliente', '$direccion','$telefono','$ciudad', '$nit','$vendedor' )");     
    $statement->execute();
    $cliente='';$direccion='';$telefono='';$ciudad='';$nit='';
    echo '<script language="javascript">alert("cliente ingresado");</script>';
}else{
    echo '<script language="javascript">alert("ingresa vendedor");</script>';
}
}
require 'views/pedido.view.php';

?>





