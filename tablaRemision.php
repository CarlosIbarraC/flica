<div class="row">
    <div class="col-sm-12">
   
        <table class="table-hover table-condensed table-bordered table-dark  ">
        
        <tr class="py-0 bg-secondary">
           
            <td>producto</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>subtotal</td>            
            <td>Eliminar</td>           
        </tr>
          <?php
             session_start();
             require 'funciones.php';
             $conexion = conexion('galeria','root','');
            if(!$conexion){
            header('location: index.php');
            }                         
            error_reporting(E_ALL ^ E_NOTICE);
            $t = $_SESSION['remision']; 
           if($_SESSION['remision']==""){
               $row= 0;
           }
            $statement = $conexion->prepare("SELECT * FROM remision WHERE remision='$t' ");
            $statement->execute();
            $resultado = $statement->fetchAll();
            $total=0;	
            foreach ($resultado as $row) {
              $valor=$row['monto'];
              $valor=number_format($valor, 2, ',', '.');
               

          ?>
        <tr>           
            <td><?php echo $row[3]?></td>
            <td><?php echo "$ ".number_format($row[5])?></td>
            <td><?php echo $row[4]?></td>
            <td><?php echo "$ ".number_format($Total=$row[5]*$row[4]);
            $Total1=$Total+$Total1?></td>           
            <td>
            <button class="btn btn-danger material-icons" onclick = "preguntaSiNoItemRemi('<?php echo $row[0] ?>')">clear</button>
            </td>
        </tr>
        
        <?php
            }            
        ?>
         <tr class="bg-secondary text-white">
            <td>TOTAL</td>
            <td colspan="2"></td>            
            <td><?php echo "$ ".number_format($Total1)?></td>
            <td colspan="2"></td>
            
        </tr> 
        </table>
    </div>
</div>