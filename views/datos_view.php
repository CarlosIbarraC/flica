
<head>   
    <title>datos</title>
</head>
<body>
<center>        
     <a href="index.php" class="text-center pb-5"><button class="btn btn-info my-2">volver </button>   </a>    
</center>

    <?php    
   
    if(isset($_SESSION['vendedor'])){
    $vendedor=$_SESSION['vendedor'];
     }else{
         $vendedor='';
     }
    
    ?>
    <div class="container mt-5">    
        <div class="col-12 mx-auto ">
            <h4 class="text-center"> Tabla de Cobros <?php echo $vendedor ?> </h4>
            <div class="d-flex justify-content-center my-5">
                <form class="form-inline  " action="cobros_flica.php"  method="post">                    
            <div class="form-group mr-3 ">           
               <select name="cliente" id="buscarCliente" class="usuario ml-4" value="<?php echo $row[0] ?>"  >       
                <option selected value="" onchange="factura()">
                    Cliente
                 <?php$_REQUEST['w1'];?></option>
                <?php
                $statement= $conexion->prepare("SELECT cliente FROM clientes  order by cliente ");
                $statement->execute();
                $resultado = $statement->fetchAll(); 
                foreach ($resultado as $row) {  
                       ?>                
                      <option value="<?php echo $row[0] ?>" ><?php echo $row[0] ; ?></option>                 
                <?php                  
                   }
                ?>
            </select>
            </div> 
        </div> 
        </div>                     
                  
    <script>        
            var cliente=document.getElementById('buscarCliente');
            cliente.addEventListener('change', function(){
            var selectOption = this.options[cliente.selectedIndex].value;          
            window.location= "modalFactira.php ?w1=" + selectOption; 

          
           
        });       
    
    </script>
      
    </body>

