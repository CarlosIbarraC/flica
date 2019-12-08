<div class="contenedor ">
    <div class="row footer mx-0">
        <div class="col-12 col-sm-4">
       <h4> Nosotros</h4>
       <div class="text-left pl-5 pt-5">
           <i class="material-icons">email </i> flicadistribuciones@gmail.com<br><br>
           <i class="material-icons">location_on </i> Cr 23 # 44-82 sur Barrio Santa Lucia (Bogota)<br><br>
           <i class="material-icons">call </i> fijo 57-7606430<br><br>
           <i class="material-icons">	textsms </i> whats app 3122837519
       </div>
        </div>
        <div class="col-12 col-sm-4">
        <h4> Productos</h4>
        <?php
	     foreach ($resultado as $row) {
		?>	 					         
        <div class="text-left pl-5">
        <i class="material-icons"> check_box</i><a href="crear.tabla.php?categoria=<?php echo $row['categoria'] ?>#fot">   <?php echo $row['categoria'] ?></a>
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