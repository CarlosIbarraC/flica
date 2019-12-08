


 
   
    <table class= "table table-hover table-condensed table-bordered" id="tabla2">  
    
    <tr>   
       <td>Cliente</td> 
        <td>Factura</td>
        <td>Fecha</td>
        <td>$ Fac</td>
        <td>$ Pago</td>        
        <td>Observaciones</td>
        <td>Pagar</td>
    </tr>
    
    <?php
    require 'funciones.php';
    /* ------------------------------------nueva conexion------------------------------------ */
          $conexion = conexion('galeria','root','');
            if(!$conexion){
            header('location: index.php');
            } 
            
            error_reporting(E_ALL ^ E_NOTICE);
            $t = $_SESSION['titulo'];
          
           //$parametro1= $_SESSION['cliente'];
             //echo $parametro1="LUIS CAICEDO";
            $statement = $conexion->prepare("SELECT * FROM factura WHERE cliente='$parametro1' ");
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
        <td class="text-right "><?php$row["vendedor"];?></td> 
        <td class="text-right "><?php echo $row["observaciones"];?></td> 
        <td class="text-center "><button type="button" class="btn btn-success glyphicon glyphicon-search" data-toggle="modal" data-target="#modalpago" onclick="agregaFrmActualizar('<?php echo $row[0]?>')"></button></td>
       
      </tr>

     
    <?php 
                 }
       ?>
    </table>
   

