<?php
  function conexion(){
     /*  $conexion=mysqli_connect('localhost',
                                'root',
                                '',
                                'galeria'); */
      $conexion=mysqli_connect('50.62.209.223','carlosibarra','salome1961','galeria');                         
 return $conexion;
  }
?>