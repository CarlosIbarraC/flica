<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
   initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
	 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	 <link href="https://fonts.googleapis.com/css?family=Assistant:200|Kanit:100" rel="stylesheet">
	 
	 <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	 <link rel="stylesheet" href="css/estilos1.css">
	 <link rel="stylesheet" href="css/alertify.css">
	 <link rel="stylesheet" href="css/css/themes/default.css">
   <link rel="stylesheet" href="css/css/select2.css">
   <link rel="stylesheet" href="css/bootstrap.4.min.css">
   <link rel="stylesheet" href=" css/dataTables.bootstrap4.min.css">
  
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">      
	 <script src="js/jquery-3.2.1.min.js"></script>
     <script src="js/jquery.min.js"></script>         
	 <script src="js/alertify.js"></script>
     <script src="js/bootstrap.min.js"></script>     
	 <script src="js/funciones.js"></script>
     <script src="css/js/select2.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/jquery.dataTables.min.js"></script>
     <script src="js/dataTables.bootstrap4.min.js"></script>
     
</head>	
<?php
session_start(); 


?>

       <div class="contenedor"> 
		<div class="row mx-0">
			<div class="col-12 px-0">
            <img src="img/img-admin.jpg" alt="logo flica" width="100%" >
			</div>
		</div>		
      </div>
     
    <div class="col-sm-12 mx-auto px-5 my-3">
    
  <div class="card-header bg-success d-flex justify-content-between">
  <div>
                <span class="btn btn-warning btn-sm"><a href="views_reporte.php" class="text-center  ">volver a admin   </a></span>
            </div>
   <div>
       <h3 class="text-center text-light h4">
           Tabla Cobros Flica           
       </h3>
   </div>
   <div>
       <span class="btn  bg-primary  btn-sm mr-2"><a href="index.php" class="text-center text-light "> salir </a></span>
            
   </div>  
  </div>
  
      <table id="tablaCobros"></table>
   
  <div class="card-footer text-muted text-center bg-active">
    <h5> suwebya.com <i class="material-icons"> public school </i> desarrollo web</h5>
  </div>
</div> 
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade " id="guardarPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Refrendar Pago</h5><br>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
        </div>
        <div class="modal-body ml-4">
      
      <form action="" id="frPagos">
         <label >Cliente <input type="text "  name="cliente" id="cliente" size="35"></label>
         <label >Factura <input type="text"  name="factura" id="factura" size="20"></label>
         <label >valor <input type="text"  name="valor" id="valor" size="15"></label>
         <label >estado <input type="text"  name="estado" id="estado" size="20"></label>
         
         <label >Numero: <input type="text "  name="id_pago" id="id_pago" size="15"></label>
        
       
       
        <!-- <input type="text" hidden="" name="id_Cliente" id="id_cliente"  > -->
          <label >Si el pago es difiere ingrese cantidad <br><br>
          <input type="number" name="cobro" id="cobro" value="">
          </label>
         
           <br><br>
            <div>
              cancelada<input type="radio" name="pago" id="" value="cancelada">
              abono<input type="radio" name="pago" id="" value="abono">
              pendiente<input type="radio" name="pago" id="" value="pendiente"checked="checked">
            </div>
            
         
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="volver">Close</button>
        <button type="button" class="btn btn-primary" id="guardarPago1" onclick="insertarC()">Guarde cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>
 <!--  ------------------------------------------------------------------------- -->
<script type="text/javascript">
  $(document).ready(function(){
      $('#tablaCobros').load('views/viewTablaCobros.php');
  });
</script>

<!-- ----------------------------------------------- -->

<script type="text/javascript">
     function agregaPago(id_cliente){
      console.log(id_cliente);
       $.ajax({
         type:"POST",
         data: "id_cliente="+id_cliente,
         url:"guardarPago.php",
         success:function(r){
        console.log(r);
              datos=JSON.parse(r);  
              $('#id_pago').val(datos['id'])
              $('#cliente').val(datos['cliente']);
              $('#factura').val(datos['factura']);
              $('#valor').val(datos['monto']); 
              $('#cobro').val(datos['pago']);         
               $('#estado').val(datos['estado']);
               

         }
        

       });

     }
</script>

<!-- ---------------------------------------------------------------------------------- -->

<script type="text/javascript">
    
           function insertarC(){
          datos=$("form").serialize();
         console.log(datos);
          $.ajax({
         type:"POST",    
         data: datos,
         url:"insertarCobro.php",
         success:function(r){
          
              if(r==1){
                
                alertify.success("Ingresado con exito");    
                  $('#frPagos')[0].reset();
                
                location.reload();
               
                           
                
              }else{
                alertify.error("fallo agregar pago");
                $('#frPagos')[0].reset();
                
                $("#volver").click();  
               
              }
         }

       });
      }
   
     
</script> 





</body>

                
 

        


   


