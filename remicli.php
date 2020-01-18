<?php
session_start();
require 'funciones.php'; 
require 'views/nav-admin.php';
$conexion = conexion('galeria','root','');
$resultado=0;
    if(!$conexion){
      header('location: index.php');
    }
    $statement = $conexion->prepare("SELECT id,titulo,referencia FROM referencias ORDER BY titulo ");
    $statement->execute();
    $resultado = $statement->fetchAll();
?>
<div class="contenedor">
    <form action="" method="" id="formulario">
        <div class="row mx-0">
            <div class="col-8">
                <input type="text"  id="fecha" placeholder="fecha:Año/mes/dia" class="form-control bg-secondary "  readonly>
                <input id="cli" class="p-0" readonly type="hidden">
            </div>
            <div class="col-4">
                <input type="number" id="remision" placeholder="n:" class="form-control test-right bg-secondary"  onchange="foco('formulario1')"  readonly>
            </div>
        </div>
        <div class="selector-pais col-10 col-sm-5 ">
            <span>Elige Cliente</span>
            <select id="cliente" class="input-group py-2 ">
            </select>
        </div>
</div>
</form>
</div>
<center>
    <div class="col-12 col-sm-10">
        <table id="nombre" class="table-bordered table-dark bg-secondary my-4">
            <tr>
                <td id="pos1" class="px-3"></td>
                <td id="pos2" class="px-3"></td>
                <td id="pos3" class="px-3"></td>
            </tr>
            <tr>
                <td id="pos4" class="px-3"></td>
                <td id="pos5" class="px-3"></td>
                <td id="pos6" class="px-3"></td>
            </tr>
        </table>
    </div>
</center>
<div class="error_box mb-2" id="error_box">
</div>
<center>    
    <div>
        <div class="col-6" id="remis">
            <a href="pdfremision.php" target="_blank" id="arem"><button class="btn btn-secondary my-2"><i
                        class="fas fa-file-pdf "></i> pdf</button></a>
        </div>
    </div>
    </div>
</center>
</div>
<div id="cod4">
</div>
<center>
    <div id="pos8">
    </div>
   <div id="tabla" class="container "></div>
</center>
<center>
    <div id="respuesta"></div>
</center>


<!-- Modal registros nuevos-->
<div class="modal fade " id="modalRem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content  modal-md ">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">       
            <div class="form-group"> <!--  id="producto" -->
                <label class="col-form-label">P r o d u c t o:</label> <br>                
    <select  id="buscadorP" class="">
   
    <?php
    
          foreach ($resultado as $ver){          
    ?>         
     <option id="producto" value="<?php echo $ver[1]; ?>">
         
     <?php echo $ver[1] ." ".$ver[2] ." ".$ver[0] ?> </option>
    
    <?php
       }
     ?>            
    </select>                          
                                                
              
                <!-- <input type="text" class="form-group " id="producto">  -->           
            </div>
            <div class="form-group">
                <label class="col-form-label" >C a n t i d a d:</label> <input type="text" class="form-group " id="cantidad"> 
            </div>
            <div class="form-group">
                <label class="col-form-label" >P r e c i o:</label> <input type="text" class="form-group " id="precio">
            </div>       
          </div>        
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal" id="guardarnuevo">Guardar</button>
       
      </div>
    </div>
  </div>
</div>
<!-- modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-sm">
      <div class="modal-header bg-warning">
        <h5 class="modal-title " id="exampleModalLabel">Editar <span class="material-icons"> create</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                <label class="col-form-label">P r o d u c t o:</label> <input type="text" class="form-group " id="productoE">            
            </div>
            <div class="form-group">
                <label class="col-form-label" >P r e c i o:</label> <input type="nunber" class="form-group " id="precioE"> 
            </div>
            <div class="form-group">
                <label class="col-form-label" >C a n t i d a d:</label> <input type="number" class="form-group " id="cantidadE">
            </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">Actualizar</button>     
      </div>
    </div>
  </div>
</div>
<center>
    <caption>
            <button class="btn btn-info mb-3" id="agregarP" data-toggle="modal" data-target="#modalRem">Agregar productos</button>
            </caption>
</center>
<center>
    <div>
        <a href="views_reporte.php" class="text-center"><button class="btn btn-success my-2">salir</button> </a>
        <a href="remicli.php" class="text-center"><button class="btn btn-warning my-2">Nueva remision</button> </a>
    </div>
</center>

<div class="loader" id="loader">
</div>
<script src="js/cargar.js">
</script>
<script>
 $(document).ready(function(){
   if ($('#remision').val()=="") {
    $('#agregarP').addClass('remision');
   }
  
}); 
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#buscadorP').select2();
  });
</script>
<!-- <script src="js/cargar5.js">
</script> -->
<!-- <script src="js/cargar7.js">
</script> -->
<script src="js/funciones.js">
</script>
<script src="js/aritmeticas.js">
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#guardarnuevo').click(function () {
        remision=$('#remision').val();  
        console.log(remision);   
        cliente=$('#cliente').val();       
        producto=$('#producto').val();        
        cantidad=$('#cantidad').val();        
        precio=$('#precio').val();       
        agregarRemision(remision,cliente,producto,cantidad,precio);
        $('#tabla').load('tablaRemision.php');
        $('#producto').val(" "); 
        $('#precio').val(" ");
        $('#cantidad').val(" ");
        $('.selector-pais').addClass('remision');
    });        
    
});
</script>


</body>

</html>