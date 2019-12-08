<?php
  require_once 'conexion.php';
  require_once 'crud.php';
  $obj = new crud();
  $id_cliente=$_POST['id_cliente']; 
  echo json_encode($obj->obtenCliente($id_cliente));   
?>