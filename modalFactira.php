
<?php
session_start(); 
$parametro=$_REQUEST['w1']; 
require 'funciones.php';
require 'views\nav-admin.php';

$_SESSION['parametro']=$parametro;


?>

      <div class="row mx-auto" >
    <div class="col-sm-10 mx-auto">
    <h2 class="h4">Tabla Para pagos de factura <h3 class="h5"><?php echo $parametro?></h3> </h2> 
       <div id="tabla2">

       </div>
     </div>
  </div>    
      
                
<!-- Modal -->
        
<div class="modal fade modal-sm mx-auto " id="modalpago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresar Pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" id="frpago" >
      <input type="text" hidden="" name="id_factura" id="id_factura"  >
      <label for="">Cliente</label>
        <input type="text" class="col-12 d-flex aligne-center  form-control-lg"name="cliente" id="cliente"  readonly>
        <label for="">Factura</label>
        <input type="text" class="col-12 d-flex aligne-center  form-control-lg" name="facturas"  id="facturas"  readonly >
        <label for="">Fecha</label>
        <input type="date" class="col-12 d-flex aligne-center  form-control-lg" name="fecha"  id="fecha" readonly>
        <label for="">Monto</label>
        <input type="number" class="col-12 d-flex aligne-center  form-control-lg" name="monto"  id="monto" readonly>
        <label for="">Cobro</label>       
        <input type="number" name="pago" id="pago" class="col-12 d-flex aligne-center   form-control-lg"   > 
        <label for="">Observaciones</label>       
        <textarea name="observaciones"id="observaciones" class="col-12 d-flex aligne-center   form-control-lg" class="col-10" style=" HEIGHT: 50px" > </textarea>    
        <input type="text" hidden="" name="fechaP" id="fechaP" value="<?php echo date("Y-m-d");?>" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="volver"  data-dismiss="modal" >Volver</button>
        <button type="button" class="btn btn-success"id="btnguardar">Guardar</button>
      </div>
    </div>
  </div>
</div>



<center>
    <div>
        <span class="btn btn-success "><a href="index.php" class="text-center text-white"> salir </a></span>
        <span class="btn btn-info "><a href="cobros_ventas.php" class="text-center  text-white">volver a clientes   </a></span>
    </div>
</center>  
<script type="text/javascript">
      $(document).ready(function(){
				$('#tabla2').load('views/tablaPagoFactura.php');				
	  });
</script>
<script type="text/javascript">
     function agregaFrmActualizar(id_factura){
      $('#monto').val('0');
       $.ajax({
         type:"POST",
         data: "id_factura="+id_factura,
         url:"obtendatos.php",
         success:function(r){
        console.log(r);
              datos=JSON.parse(r);   
                        
               $('#id_factura').val(datos['id']);
               $('#cliente').val(datos['cliente']);
               $('#facturas').val(datos['facturas']);
               $('#fecha').val(datos['fecha']);
               $('#monto').val(datos['monto']);
               $('#observaciones').val(datos['observaciones']);

         }
        

       });

     }
</script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#btnguardar').click(function(){
          datos=$('#frpago').serialize();
          console.log(datos);
          $.ajax({
         type:"POST",
         data: datos,
         url:"insertarPago.php",
         success:function(r){
              if(r==1){
                alertify.success("Ingresado -con exito");
                $("#frpago")[0].reset();
                $("#volver").click();
                
                
              }else{
                alertify.error("fallo agregar pago");
                $("#frpago")[0].reset();
                $("#volver").click();
              }
         }

       });
      }); 
     });
</script> 
<script type="text/javascript">
 $(document).ready(function(){
  $('#volver').click(function(event){
    console.log("volver");
    $("#frpago")[0].reset();
   });
  });
</script>

</body>