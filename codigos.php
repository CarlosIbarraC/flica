<?php
require 'funciones.php';
require 'views/views_codigos.php';
?>
<style>
.btnPdf{
  display:none;
}
</style>
<center>
<div>
<div id="buscadorC" class="my-4">
</div>
<div id="btnPdf" class="btnPdf">
				<a href="prueba.php" class="text-center" target="_blank">
          <button class="btn btn-warning my-2" id="ppdfbtn">
            imprimir PDF
          </button> 
        </a>
			</div>
			<div>
				<a href="views_reporte.php" class="text-center">
          <button class="btn btn-success my-2">
            Volver a admin
          </button> 
        </a>
			</div>
      </div>
	</center>
  <script>

$(window).scroll(function(){
  if($(this).scrollTop() > 300){ 
    $("#js_up").slideDown(300);
  }else{ // si no
    $("#js_up").slideUp(300); 
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
        $('#buscadorC').load('buscadorCodigo.php');
        /* $("#btnPdf").removeClass("btnPdf"); */
	  });
</script>