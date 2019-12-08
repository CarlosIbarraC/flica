<?php
        session_start();
        $parametro = $_SESSION['parametro'];
  ?>     
<table class= "table table-hover table-condensed table-bordered" id="tabla2">  
        
        <tr>   
            <td>cliente</td>
            <td>Factura</td>
            <td>Fecha</td>
            <td>valor Fac.</td>            
            <td>Pagar</td>
        </tr>
        
        <?php
       
        require '../funciones.php';
       
        
        //$id=0; 
        /* ------------------------------------nueva conexion------------------------------------ */
              $conexion = conexion('galeria','root','');
                if(!$conexion){
                header('location: index.php');
                }            
               
              
               
                $statement = $conexion->prepare("SELECT * FROM factura WHERE cliente='$parametro'");
                $statement->execute();
                $resultado = $statement->fetchAll();
                $total=0;	
                foreach ($resultado as $row) {
                  $valor=$row['monto'];
                  $valor=number_format($valor, 2, ',', '.'); 
                  $pago =0;
                    
    
                ?>
    
        
          <tr>   
               
            <td class="text-center "><?php echo $row["cliente"];?></td>
            <td class="text-center "><?php echo $row["facturas"];?></td>
            <td class="text-left"><?php echo $row["fecha"] ;?></td>
            <td class="text-right "><?php echo $valor;?></td>             
            <td class="text-center "><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalpago" onClick="agregaFrmActualizar('<?php echo $row[0]?>');"> <i class="material-icons">reply</i></button></td>
           
          </tr>
    
         
        <?php 
                     }
           ?>
        </table>