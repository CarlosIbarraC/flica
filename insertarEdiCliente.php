<?php

require_once 'conexion.php';
require_once 'crud.php';

  $obj= new crud();
   
     $datas= array(
         $_POST['id_cliente'],
         $_POST['cliente'],
         $_POST['direccion'],
         $_POST['telefono'],
         $_POST['ciudad'],
         $_POST['nit'],
         $_POST['vendedor']
                 
     );

     echo $obj->editarCliente($datas);
    
?>