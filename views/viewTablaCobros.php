
     
         <table id="tablaCobros" class= "table table-hover table-condensed table-bordered table-responsive "  style="width:100%">  
            
            <thead>
                <tr class="table-success text-dark ">   
                    <td>Cliente</td>
                    <td>Factura</td>
                    <td>Fecha</td>
                    <td>Monto</td>            
                    <td>Pago</td>
                    <td>Observaciones</td>
                    <td>Fecha Pago</td>
                    <td>Estado</td>
                    <td>Editar</td>
                </tr>
            </thead>
            
            <?php
            require '../funciones.php';
            $id=0; 
            /* ------------------------------------nueva conexion------------------------------------ */
                  $conexion = conexion('galeria','root','');
                    if(!$conexion){
                    header('location: index.php');
                    }
                    
                   
                    $statement = $conexion->prepare("SELECT id,cliente,factura,fecha,monto,pago,observaciones,fechaPago,estado FROM pagos order by cliente, factura");
                    $statement->execute();
                    $resultado = $statement->fetchAll();
                    $total=0;	
                    foreach ($resultado as $row) {              
                        
        
                    ?>
        
            
              <tbody>
                  <tr>   
                       
                    <td class="text-center "><?php echo $row["cliente"];?></td>
                    <td class="text-center "><?php echo $row["factura"];?></td>
                    <td class="text-left"><?php echo $row["fecha"] ;?></td>
                    <td class="text-left"><?php echo $row["monto"] ;?></td>
                    <td class="text-left"><?php echo $row["pago"] ;?></td>
                    <td class="text-left"><?php echo $row["observaciones"] ;?></td>
                    <td class="text-left"><?php echo $row["fechaPago"] ;?></td>
                    <td class="text-left"><?php echo $row["estado"] ;?></td>
                    

                          <td>
                          	<div class= "float-right">
                              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#guardarPago"  onclick="agregaPago('<?php echo $row[0]?>')">
                                pago
                              </button>
                          	</div>
                          </td>
                     </form>            
                
                   
                                
                   
                     
                    
                   </tr>
               </tbody>
      
     
          
         <?php 
                      }
            ?>
         </table>  
         
  
                
                