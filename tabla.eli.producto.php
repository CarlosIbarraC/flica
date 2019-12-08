<?php
require 'funciones.php';
require 'views/nav-admin.php';

/* session_start(); */
error_reporting(E_ALL ^ E_NOTICE);

?>
<div id="buscador">

</div>
 <div id="tabla1">
</div> 



<!-- Modal -->
<div class="modal fade col-19" id="modalEdicion1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
      </div>
      <div class="modal-body">
	  <label for="">Referencia:</label>
	    <input type="text" hidden="" id="id">
		<input type="text" name="" id="referenciae"class=" input-sm">
		<label for="">Caracteristicas:</label>
		<input type="text" name="" id="caracteristicase"class=" input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" Id="actualizadatos" data-dismiss="modal">Actualizar</button>
       
      </div>
    </div>
  </div>
</div>
</div>
<a href="#" id="js_up" class="boton-subir">
 
 <i class="fas fa-arrow-circle-up" aria-hidden="true"></i>
 <!-- <i class="fas fa-arrow-circle-up"></i> -->

</a>

<script>

$(window).scroll(function(){
 if($(this).scrollTop() > 250){ 
   $("#js_up").slideDown(250);
 }else{ // si no
   $("#js_up").slideUp(250); 
 }
});


$("#js_up i").on('click', function (e) {   
 e.preventDefault(); 
 $("body,html").animate({
   scrollTop: 0 
 },900);
 return false; //rompe el bucle
});
</script>
<script type="text/javascript">
     $(document).ready(function(){
       $('#buscador').load('buscador.php');
   });
</script>		  

<script type="text/javascript">
      $(document).ready(function(){
				$('#tabla1').load('views/tabla.eli.php');
				
	  });
</script>
<script type="text/javascript">
      $(document).ready(function(){
        $('#guardarnuevo').click(function(){
			titulo = $('#titulo').val();
			referencia = $('#referencia').val();
			caracteristicas = $('#caracteristicas').val();
			agregardatos(titulo,referencia,caracteristicas);
			
		});
		
        $('#actualizadatos').click(function(){
			actualizadatos();
        });
        
	  });
</script>
