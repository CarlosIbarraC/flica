<?php

require 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pagos= $_POST['pago'];
    $conexion = conexion('galeria','root','');
    if(!$conexion){
    header('location: index.php');
    }
    
    
    $parametro=$_REQUEST['w1'];
    $statement = $conexion->prepare("SELECT * FROM factura  JOIN clientes ON factura.cliente=clientes.cliente  AND clientes.cliente ='" . $parametro. "' ");
    $statement->execute();
    $resultado = $statement->fetchAll();
}
INSERT INTO "nombre_tabla" ("columna1", "columna2", ...) VALUES ("valor1", "valor2", ...)
?>
