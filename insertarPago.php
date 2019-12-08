<?php

require_once 'conexion.php';
  require_once 'crud.php';

  $obj= new crud();
    if($_POST['pago']!==''){
     $datos= array(
         $_POST['cliente'],
         $_POST['facturas'],
         $_POST['fecha'],
         $_POST['monto'],
         $_POST['pago'],         
         $_POST['observaciones'],
         $_POST['fechaP']
     );

     echo $obj->agregarDatos($datos);
    }else{
        header('location: modalFactira.php');
    }
?> 