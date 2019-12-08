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
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	 <script src="js/jquery-3.2.1.min.js"></script>
	 <script src="js/jquery.min.js"></script>
	 <script src="js/alertify.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	 <script src="js/funciones.js"></script>
	 <script src="css/js/select2.js"></script>
   
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
       <h3 class="text-center text-light">
           Tabla Clientes Flica
           
       </h3>
   </div>
   <div>
       <span class="btn  bg-primary  btn-sm mr-2 mb-2"><a href="index.php" class="text-center text-light "> salir </a></span>
            <span class="btn btn-warning btn-sm mb-2"><a href="views_reporte.php" class="text-center  ">volver a admin   </a></span>
   </div>
  
  </div>
  <div class="card-body" id="tablaClientes">
 
  </div>
  
  <div class="card-footer text-muted text-center bg-active">
    <h5>
        suwebya.com <i class="material-icons"> public school </i> desarrollo web
</h5>
  </div>
</div>
       <div id="tablaClientes">

       </div>
    
 

 
      
                
 
<!-- Modal -->
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edicion de Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
      <form  id="frCliente" >
      <input type="text" hidden="" name="id_cliente" id="id_cliente"  >
      <label for="">Cliente</label>
        <input type="text" class="col-12 d-flex aligne-center  form-control-lg"name="cliente" id="cliente" readonly >
        <label for="">Direccion</label>
        <input type="text" class="col-12 d-flex aligne-center  form-control-lg" name="direccion"  id="direccion"   >
        <label for="">Telefono</label>
        <input type="text" class="col-12 d-flex aligne-center  form-control-lg" name="telefono"  id="telefono" >
        <label for="">Ciudad</label>
        <input type="text" class="col-12 d-flex aligne-center  form-control-lg" name="ciudad"  id="ciudad" >
        <label for="">Nit</label>       
        <input type="number"  class="col-12 d-flex aligne-center   form-control-lg" name="nit" id="nit"  > 
        <label for="">Vendedor</label>       
        <input type="text" class="col-12 d-flex aligne-center   form-control-lg" name="vendedor"id="vendedor" > 
          
      </div ><p class="text-center text-danger">
          <i class="material-icons">border_color</i> Los cambios que realice son permanentes
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="volverCli">Close</button>
        <button type="button" class="btn btn-primary" id="ediCliente">Save changes</button>
      </div>
    </div>
  </div>
</div>
        


   



  

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaClientes').load('views/vistaTablaClientes.php');
    });
</script>

<script type="text/javascript">
     function agregaFrmClientes(id_cliente){
      
       $.ajax({
         type:"POST",
         data:"id_cliente=" + id_cliente ,
         url:"obtenerCliente.php",
         success:function(r){
                     datos=JSON.parse(r);   

                        
               $('#id_cliente').val(datos['id_cliente']);
               $('#cliente').val(datos['cliente']);
               $('#direccion').val(datos['direccion']);
               $('#telefono').val(datos['telefono']);
               $('#ciudad').val(datos['ciudad']);
               $('#nit').val(datos['nit']);
               $('#vendedor').val(datos['vendedor']);

         }
        

       });

     }

</script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#ediCliente').click(function(){
          datas=$('#frCliente').serialize();
          console.log(datas);
          $.ajax({
         type:"POST",
         data: datas,
         url:"insertarEdiCliente.php",
         success:function(r){
              if(r==1){
                  $('#tablaClientes').load('views/vistaTablaClientes.php');
                alertify.success("Ingresado -con exito");              
                $("#volverCli").click(); 
                
              }else{
                alertify.error("fallo modificar cliente");
                 $("#frcliente")[0].reset();
                $("#volverCli").click(); 
              }
         }

       });
      }); 
     });
</script>

</body>