<?php
  require_once 'conexion.php';
  require_once 'crud.php';

  $obj = new crud();
  $id=$_POST['id_factura'];
  echo 
  echo json_encode($obj->obtendatos($id));

  
?> 