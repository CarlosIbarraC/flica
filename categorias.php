<?php

/* require 'views/nav-admin.php'; */
/* require 'funciones.php';  */

/* $conexion = conexion('galeria','root', ''); */
$conexion = conexion('galeria','root','');
						                if(!$conexion){
							            header('location: index.php');
						                }
						 $statement = $conexion->prepare('SELECT categoria FROM categoria order by categoria desc');
						                 $statement->execute();
						                 $resultado = $statement->fetchAll(); ?>					                
						                           	    		
						                 <?php
						                  foreach ($resultado as $row) {
						                 ?>	 					                                           	    	 
						                        <center>
						                        	<div class="col-12  my-2 fondo acordeon">  					                        	   	    		                 
						                           	<div class="letra">
						                           		<a href="crear.tabla.php?categoria=<?php echo $row['categoria'] ?>#fot">   <?php echo $row['categoria'] ?></a><br>
						                           	</div>
						                   	      </div>
						                        </center>
						                  <?php
						                } ?>						      					                  
									   
									   