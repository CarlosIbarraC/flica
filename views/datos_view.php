
<head>   
    <title>datos</title>
</head>
<body>
<header>
		<div class="contenedor">
			<div class="logo p-3">
                <img src="img/logo-largo.ico" alt="">                
			</div>			
            <?php
             require 'nav-admin.php';
            ?>
		</div>
    </header>
    <?php
   /*  session_start(); */
    $date=  date("Y/m/d")." h: ".  date("h:i:a"); 
     
    ?>
    <div class="container">    
            <div class="col-12 mx-auto">
            <h4 class="text-left"> Cobros</h4>
                <form class="form-inline  " action="cobros_flica.php"  method="post">                    
                     <input type="text" class="form-control mr-1 mb-1" name="cobro" required placeholder="cliente">                    
                     <input type="number" class="form-control mr-1 mb-1" name="factura" required placeholder="Factura"> 
                     <input type="number" class="form-control mr-1 mb-1" name="monto" required placeholder="Monto">                                 
                     <label class="radio-inline ml-3 py-3"><input type="radio" name="optradio" value="abono"> Abono </label>
                     <label class="radio-inline mx-3 py-3"><input type="radio" name="optradio" value="total"checked> Total </label>                             
                     <input type="text" class="form-control mr-1 mb-1" name="com-cobro" placeholder="comentarios" >                     
                     <input type="hidden" class="form-control " name="fecha" value="<?php echo $date?>"> 
                     <label for="exampleInputEmail1">Direccion de Correo a copiar </label>
                     <input type="email" class="form-control mx-3" name="correo" aria-describedby="emailHelp" placeholder="escriba correo a copiar">           
                     <button type="submit" class=" btn btn-warning">enviar</button>
                </form>
            </div>   
    </div>
    
              
    </body>

