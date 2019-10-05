<?php

error_reporting(E_ALL ^ E_NOTICE);
$t = $_SESSION['foto'];
?>



    <center>
        <div class=" col-12 col-sm-10 mt-4">
        
            <h2 class="h3">Referencia de <?php echo $t?></h2>
        
        <table class= "table table-striped table-dark">
        
          
        <tr>
           <td>Producto</td> 
            <td>Referencia</td>
            <td>Caracteristicas</td>
           
        </tr>
        <?php        
        
        $conexion = conexion('galeria','root','');
                    if(!$conexion){
                       
                 header('location: index.php');
                    }
	                     
        $statement6 = $conexion->prepare("SELECT titulo,referencia,caracteristicas FROM referencias WHERE titulo='$t'");
                     $statement6->execute();
                     $resultado = $statement6->fetchAll();                     
                     foreach ($resultado as $row) { 
                               
                     ?>
        <tr>
            <td><?php echo $row["titulo"]?> </td>
            <td><?php echo $row["referencia"]?> </td>
            <td><?php echo $row["caracteristicas"]?></td>
           
        </tr>
        <?php 
                     }
           ?>
        </table>
        </div>
    </center>
