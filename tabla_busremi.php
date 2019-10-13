<?php
require "funciones.php";
require "views/nav-admin.php";


           ?>
<center>
    <div class="contenedor mb-5">
        <div class="col-12">
            <h1>BUSQUEDA DE REMISION POR CLIENTE</h1>
        </div>
    </div>
</center>

<div class="contenedor">
<form action="" method="" id="formulario" >  
				<div class="row mx-0">
				<div class="selector-pais col-4 text-center">
				<span> CLIENTE</span>
				<select id="cliente"  >				
				</select>	
				</div>
    </form>
</div>
<center>
<div  id="titulo">
</div>
</center>
<div class="container">
    <table id="tabla">    
    </table>
</div>
<div class="container">
    <table id="tablar">  
       
    </table>
</div>
<center>
    <div>
    			<a href="views_reporte.php" class="text-center"><button class="btn btn-success my-2">salir</button>   </a>
    		</div>
</center>
<script >

function ocultar(){
        document.getElementById('busqueda_remision').style.display = 'none';
        }
     function mostrar(){
            document.getElementById('busqueda_remision').style.display = 'block';
            }
$(document).ready(function() { 
   
//$('#tabla').remove();
   
$.ajax({
        type: "POST",
        url: "insertar_prueba.php",
        success: function(response) 
        {
            $('.selector-pais select').html(response).fadeIn();
           
        }
});    

});
$('#formulario').change(function(){  
    $("#tabla").empty();
    $("#tablar").empty();
   
       var postData ={
           cliente: $('#cliente').val()                  
           
       }       
      
                  //---------------- gmuestra datos de remisiones ----------------//
       var fecha; 
    
       $.post('tabla_remisioncliente.php',postData, function(response){
        $("#titulo").empty();
          for(var i= 0;i< response.length;i++){
              var elemento = document.createElement('tr'); 
              elemento.classList.add(response[i].remision);                 
           elemento.innerHTML += ("<td>"+response[i].cliente+"</td>");
           elemento.innerHTML += ("<td>"+response[i].remision+"</td>");           
           elemento.innerHTML += ("<td class='fecha'>"+response[i].fecha+"</td>");
           elemento.innerHTML += ("<td class='boton'><button class=' enviar btn btn-success px-2'>ver</button></td>");
                       
           document.getElementById('tabla').appendChild(elemento);        
          }        
          
       });           
      
    });	

    $(document).on('click','.enviar',function(){
        let element =$(this)[0].parentElement.parentElement;
        let id = $(element).attr('class');
        //let element3 =document.getElementsByClassName('fecha');
        
        //console.log(element3);
        //var dos = $(segundaColumna).attr('text')
         

        $("#tabla").empty();
        console.log(id);

        $.post('tabla_remfila.php',{id}, function(response){ 
             console.log(response);
             var remis= document.createElement('h4');
             remis.innerHTML += ("remision N:");
             remis.innerHTML += (id);
                         
             document.getElementById('titulo').appendChild(remis);
            
            for(var i= 0;i< response.length;i++){
                var elemento1 = document.createElement('tr');
           elemento1.innerHTML += ("<td>"+response[i].producto+"</td>");
           elemento1.innerHTML += ("<td>"+response[i].cantidad+"</td>");           
           elemento1.innerHTML += ("<td>"+response[i].precio+"</td>");
           elemento1.innerHTML += ("<td>"+response[i].subtotal+"</td>");
           elemento1.innerHTML += ("<td>"+response[i].acumulado+"</td>");
           document.getElementById('tablar').appendChild(elemento1);
            
        }	

    });

    });
	 </script>
</body>
</html>