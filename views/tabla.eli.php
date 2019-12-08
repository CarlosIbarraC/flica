<?php


require '../funciones.php';
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$t = $_SESSION['titulo'];
?> 


<div class="row mx-auto">
    <div class="col-sm-10 mx-auto">
    <h2 class="h3">Tabla Para Edicion o Eliminacion de productos </h2>
    <table class= "table table-hover table-condensed table-bordered">
  
    
    
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
               
				 $statement = $conexion->prepare("SELECT id, titulo, referencia, caracteristicas FROM referencias Order By titulo ASC ");
                 $statement->execute();
                 $resultado = $statement->fetchAll();
                 
                 foreach ($resultado as $row) { 
                            $datos= $row['id']."||".$row['titulo']."||".$row['referencia']."||".$row['caracteristicas'] ; 
                           
                           $ix=$row['id'];
                 ?>
    <tr>
        <td><?php echo $row["titulo"]?> </td>
        <td><?php echo $row["referencia"]?> </td>
        <td><?php echo $row["caracteristicas"]?></td>
        <td><button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion1" onclick="agregaform1('<?php echo $datos ?>')"><i class="material-icons"> create</i></button></td>
        <td><button class="btn btn-danger "onclick="preguntaSiNo('<?php echo $ix ?>')"><i class="material-icons"> clear</i></button></td>
    </tr>
    <?php 
                 }
       ?>
    </table>
    </div>
</div>
