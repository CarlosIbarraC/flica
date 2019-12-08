 <!--  -----------------------------------------------------------TABLA-------------------------------------------- -->
 <div class=" d-flex justify-content-center ">
   <div class="col-12 col-md-10">
     <table class= "table table-hover table-condensed table-bordered table-responsive-sm " id="tablaClientes">  
        
        <tr class="table-success text-dark ">   
            <td>Cliente</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Ciudad</td>            
            <td>Nit</td>
            <td>Vendedor</td>
            <td>Editar</td>
           
        </tr>
        
        <?php
        require '../funciones.php';
        $id=0; 
        /* ------------------------------------nueva conexion------------------------------------ */
              $conexion = conexion('galeria','root','');
                if(!$conexion){
                header('location: index.php');
                }
                
               
                $statement = $conexion->prepare("SELECT * FROM clientes order by cliente");
                $statement->execute();
                $resultado = $statement->fetchAll();
                $total=0;	
                foreach ($resultado as $row) {              
                    
    
                ?>
    
        
          <tr>   
               
            <td class="text-center "><?php echo $row["cliente"];?></td>
            <td class="text-center "><?php echo $row["direccion"];?></td>
            <td class="text-left"><?php echo $row["telefono"] ;?></td>
            <td class="text-left"><?php echo $row["ciudad"] ;?></td>
            <td class="text-left"><?php echo $row["nit"] ;?></td>
            <td class="text-left"><?php echo $row["vendedor"] ;?></td>
                       
            <td class="text-center "><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalCliente" onClick="agregaFrmClientes('<?php echo $row[0]?>');"> <i class="material-icons">border_color</i></button></td>
            
           
          </tr>
    
         
        <?php 
                     }
           ?>
        </table>
   </div>
 </div>


 <!-- -------------------------------------------------------------------FIN TABLA----------------------------------------- -->