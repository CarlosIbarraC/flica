<?php

require_once 'views/nav-admin.php';

require_once 'funciones.php';

/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
if(!$conexion){
    header('location: index.php');
    }
$statement = $conexion->prepare("SELECT * From referencias");
$statement->execute();
$resultado = $statement->fetchAll();  

?>

		<div class="col-12  my-2  ">  					                        	   	    		                 
	    	
            <table class="table table-condensed">
<thead>
      <tr>
        <th>ID</th>
        <th>titulo</th>
        <th>Referencia</th>
        <th>Caracteristicas</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <?php
       
 foreach ($resultado as $row) {					                 ?>	 			                                           	    	 
	
    
    <tbody>
      <tr>
        <td><?php echo $row[0]?></td>
        <td><?php echo $row[1]?></td>
        <td><?php echo $row[2]?></td>
        <td><?php echo $row[3]?></td>
        <td><?php echo $row[0]?></td>
        <td><?php echo $row[0]?></td>
      </tr>
      <?php
    } ?>  
    </tbody>
  </table>
	  </div>
	<?php
    header('location:eliminar.producto.php');
         					                  
									   