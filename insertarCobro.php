<?php

require_once 'conexion.php';
  require_once 'crud.php';

  $obj= new crud();
   
     $datos= array(
        $_POST['cliente'],
         $_POST['factura'],
         $_POST['valor'],
         $_POST['estado'],
         $_POST['id_pago'],
         $_POST['cobro'],
         $_POST['pago']
        
     );

     echo $obj->insertarCobro($datos);
   

?> 