<div class="form-group mr-3">
           
           <select name="factura" id="buscarFactura" class="usuario ml-4" value="<?php echo $row['facturas'] ?>" required>       
            <option selected value="">Factura </option>
            <?php
              $vendedor=$_SESSION['vendedor'];
              $cliente=  $_REQUEST['w1'];
              echo $cliente;
              $statement= $conexion->prepare("SELECT facturas FROM factura  WHERE cliente='$cliente'");
               $statement->execute();
               $resultado = $statement->fetchAll(); 
               echo $resultado;
               foreach ($resultado as $row) {  
                   ?>                
                  <option value="<?php echo $row['facturas'] ?>" ><?php echo $row['facturas'] ?></option>
                  <?php
               }
            ?>
        </select>
        </div>   