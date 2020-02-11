<?php
session_start();
require 'funciones.php'; 
require 'views/nav-admin.php';
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
    <div id="respuesta"></div>
</center>

<div class="contenedor d-flex justify-content-center form-group"> 
<label class="col-form-label" >Producto:</label>             
      <div id="buscadorC" >                         
       </div>                 
      <div class="form-group">
                  <label class="col-form-label" >C a n t i d a d:</label> <input type="text" class="form-group " id="cantidad"> 
              </div>
              <div class="form-group">
                  <label class="col-form-label ml-2" >P r e c i o:</label> <input type="text" class="form-group " id="precio">
              </div>      
      </div>
    <center>
    <caption>
      <button class="btn btn-info mb-3" id="guardarnuevo" >Agregar productos</button>
    </caption>
</center>
   <center>
    <div id="pos8">
    </div>
   <div id="tabla" class="container "></div>
</center>     

<!-- modal para edicion de datos -->


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
        $('#buscadorC').load('buscadorRemisiones.php');
       
	  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#buscadorP').select2();
  });
</script>
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
        producto=$('#buscadorvivo').val();        
        cantidad=$('#cantidad').val();        
        precio=$('#precio').val();       
        agregarRemision(remision,cliente,producto,cantidad,precio);
       // $('#tabla').load('tablaRemision.php');
        $('#producto').val(" "); 
        $('#precio').val(" ");
        $('#cantidad').val(" ");
        $('.selector-pais').addClass('remision');
    });        
    
});
</script>


</body>

</html>