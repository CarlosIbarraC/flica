
   <div class="container">
       <div class="row mx-0">

                 
         <center>  
           <div class="col-12 d-flex mx-3 mp-5">
                 <?php                       
						$conexion = conexion('galeria','root','');
						                if(!$conexion){
							            header('location: index.php');
						                }
						 $statement = $conexion->prepare('SELECT * FROM clientes order by cliente asc');
						                 $statement->execute();
						                 $resultado = $statement->fetchAll(); ?>											
					<form method="post" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">			
                        <select REQUIRED name="cliente" class="selectpicker px-4 py-2" >
                       <option value="" disabled selected class="mx-5  " >SELECCIONE CLIENTE</option>
						<?php
	                     foreach ($resultado as $row) {
		                ?>						
							<option  value ="<?php echo $row['cliente'] ?>"  ><?php echo $row['cliente'] ?></option>
							<?php
                           }
                  ?>							
						
                        </select>
                        <input type="submit" class=" my-4 px-2 py-1 btn btn-info ml-4" value="hacer remision" name="login" id="select_cliente">
                        </form>	
           </div>
                        
           </div>
          
       </div>
  
    
</body>
</html>