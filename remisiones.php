<?php
require 'funciones.php'; 
require 'views/nav-admin.php';
require 'views/remision.view.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$cliente = $_POST['cliente'];
$statement = $conexion->prepare("SELECT * FROM clientes where cliente= '$cliente'");
$statement->execute();
$resultado = $statement->fetchAll(); 
 foreach ($resultado as $row) {
?>
         <hr>
         <div class="row mx-0 fondo_rem">
           <div class="col-4  mx-3 text-center py-3">
                <h5 id=>nombre:<?php echo $row['cliente'] ?></h5>
                <h5 id=>direccion:<?php echo $row['direccion'] ?></h5>         
                <h5 id=>telefono:<?php echo $row['telefono'] ?></h5>
                <h5 id=>ciudad:<?php echo $row['ciudad'] ?></h5>	
                <h5 id=>nit:<?php echo $row['nit'] ?></h5>
           </div>
                  
                        <?php
                           }                          
                           $statement = $conexion->prepare("INSERT INTO remision (cliente) VALUES ('$cliente')");
                           $statement->execute();
                          
                           $statement = $conexion->prepare("SELECT MAX(id_remision)AS id_remision FROM remision ");
                           $statement->execute();
                           $resultado = $statement->fetchAll();                            
                           foreach ($resultado as $row){
                          ?>
                          <div class="col-6  mx-3 text-right py-3">
                           <h4 >remision N:<?php echo $row['id_remision'] ?></h4>
                           </div>  
                           </div>  
                           <hr>
                           <?php
                           }                
                        } 
                        
               $_SESSION['cliente']= $cliente ;        
                      ?>	
                      
            <form action="tabla_remision.php" name="login" method="post">
           <div class="row mx-0">
           
                <div class="col-sm-3">
                <label for="">codigo</label>
                    <input type="text" placeholder= " codigo" name="codigo" id="codigo" onchange="submit()">
                        </div>
                        <div class="col-sm-3">
                        <label for="">cantidad</label>
                        <input type="text" placeholder= "cantidad" id="cantidad" required>   
                        </div>
                    
                        <div class="col-sm-3">
                        <label for="">Precio</label>
                        <input type="text" placeholder= " precio" id='cant'onchange="Sumar();"> 
                        </div> 
                        <div class="col-sm-3">
                        <label for="">total</label>
                        <input type="text"  id='canto'> 
                       <!--  <input type="button" class=" my-4 p-2 btn btn-danger ml-4" value="guardar" > -->
                        
                        </div>                   
                       
                  </div>
            </form> 
            <div id="productoG">
            <li id='producto'><?php echo $_SESSION['nombre'] ?></li>
            </div> 
     <script type="text/javascript">
        function Sumar() {
            var n1 = document.getElementById('cantidad').value;
            var n2 = document.getElementById('cant').value;
            var suma = parseInt(n1) * parseInt(n2);
            document.getElementById('canto').value=suma;
          
        }
    </script>
    <script>
        function requerido(){
          var nombre = new XMLHttpRequest();
          nombre.open('POST','tabla_remision.php', true);
          nombre.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
          nombre.onreadystatechange = function(){
            document.getElementById('producto').innerHTML = nombre.responseText;
          }
          var codigo = document.getElementById('codigo').value;
          nombre.send(codigo=codigo);

        }

        function actualizar(){
          
 var parametros={
  "ver": $("#codigo").val(),
 }
  $.ajax({
  data: parametros,
  url:"tabla_remision.php",
  type:"POST",
});
        }
    </script>  
    
           
       
