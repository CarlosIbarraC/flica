<div class="contenedor ">
    <div class="row footer mx-0">
        <div class="col-12 col-sm-4">
       <h4> Nosotros</h4>
       <div class="text-left pl-5 pt-5">
           <i class="fas fa-envelope"> flicadistribuciones@gmail.com</i><br><br>
           <i class="fas fa-coffee"> Cr 23 # 44-82 sur Barrio Santa Lucia (Bogota)</i><br><br>
           <i class="fas fa-phone-square"> fijo 57-7606430</i><br><br>
           <i class="fab fa-whatsapp-square"> whats app 3122837519</i>
       </div>
        </div>
        <div class="col-12 col-sm-4">
        <h4> Productos</h4>
        <?php
	     foreach ($resultado as $row) {
		?>	 					         
        <div class="text-left pl-5">
        <i class="fab fa-product-hunt"><a href="crear.tabla.php?categoria=<?php echo $row['categoria'] ?>#fot">   <?php echo $row['categoria'] ?></a></i>
        </div>                                     
         <?php
         }
         ?>                              
                                                    
                                                   
        </div>
        <div class="col-12 col-sm-4">
        <h4> Legal</h4>
        </div>
    </div>
</div>