<?php


require '../funciones.php';
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$t = $_SESSION['titulo'];
?>


<div class="row mx-0">
    <div class="col-sm-12">
    <h2 class="h3">Tabla para Ingreso de Datos de <?php echo $t?></h2>
    <table class= "table table-hover table-condensed table-bordered">
  
    <button class="btn btn-primary btn-large " data-toggle="modal" data-target="#modalNuevo">Agregar nuevo <i class="fas fa-plus"></i>   </button>
    
    <tr>
       <td>Producto</td> 
        <td>Referencia</td>
        <td>Caracteristicas</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
    <?php
    
                /* $conexion = conexion('galeria','root', ''); */
                $conexion = conexion('galeria','root','');
                if(!$conexion){
                   
	            header('location: index.php');
                }
               
				 $statement = $conexion->prepare("SELECT id,titulo,referencia,caracteristicas FROM referencias WHERE titulo='$t'");
                 $statement->execute();
                 $resultado = $statement->fetchAll();
                 
                 foreach ($resultado as $row) { 
                            $datos= $row['id']."||"      
                           .$row['referencia']."||"
                           .$row['caracteristicas'] ; 
                           
                           $ix=$row['id'];
                 ?>
    <tr>
        <td><?php echo $row["titulo"]?> </td>
        <td><?php echo $row["referencia"]?> </td>
        <td><?php echo $row["caracteristicas"]?></td>
        <td><button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')"><i class="fas fa-pencil-alt"></i></button></td>
        <td><button class="btn btn-danger "onclick="preguntaSiNo('<?php echo $ix ?>')"><i class="fas fa-times"></i></button></td>
    </tr>
    <?php 
                 }
       ?>
    </table>
    </div>
</div>