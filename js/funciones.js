
function agregardatos(titulo,referencia,caracteristicas){

   /*  if($_post['titulo']=" "){
        location.href ="../subir.php/#form_uno"; 
    } */
    
    cadena="titulo="+ titulo + "&referencia=" + referencia + "&caracteristicas=" + caracteristicas;

    $.ajax({
           type:"POST",
           url:"agregarDatos.php",
           data:cadena,
           success:function(r){
               if(r==1){
                $('#tabla').load('views/tabla.php');
                $('#tabla1').load('views/tabla.eli.php');
             
             alertify.success("agregado con exito ");  
                header('Location: subir.php');   
              
           } else{
            alertify.error("Ingresa formulario Inicial ");
           }
        }
        });
}
function agregaform(datos){
  d=datos.split('||');
  $('#id').val(d['0']);
  $('#referenciae').val(d['1']);
  $('#caracteristicase').val(d['2']);
}
function agregaform1(datos){
    d=datos.split('||');
    $('#id').val(d['0']);
    $('#referenciae').val(d['2']);
    $('#caracteristicase').val(d['3']);
  }
function actualizadatos(){
    id=$('#id').val();
    referencia=$('#referenciae').val();
    caracteristicas=$('#caracteristicase').val();

    cadena1="id=" + id + "&referencia=" + referencia + "&caracteristicas=" + caracteristicas;
   
    
    $.ajax({
        type:"POST",
        url:"actualizadatos.php",
        data:cadena1,
        success:function(r){
            if(r==1){
               
             $('#tabla').load('views/tabla.php');
             $('#tabla1').load('views/tabla.eli.php');
             alertify.success("actualizado ");               
           
        } else{
         alertify.error("fallo el servidor 2 ");
        }
     }
     });
}

function preguntaSiNo(id){
    alertify.confirm('Eliminar Datos', 'Esta seguro en eliminar el registro?',function(){ eliminarDatos(id) }
    , function(){ alertify.error('Cancelar')});
}
function eliminarDatos(id){
    cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"eliminarDatos.php",
        data:cadena,
        success:function(r){
            if(r==1){
               
                $.ajax({
                    type:"POST",
                    url:"eliminarCodigos.php",
                    data:cadena,
                    success:function(r){
                        if(r==1){                           
            
                                          
                        }else{
                            alertify.error("fallo el servidor ");
                           }       
                    }
                });
                $('#tabla').load('views/tabla.php'); 
                $('#tabla1').load('views/tabla.eli.php'); 

                alertify.success('Eliminado con Exito');                
            }else{
                alertify.error("fallo el servidor ");
               }       
        }
    });
    
}
function eliminarCodigos(id){
    cadena="id=" + id;
    $.ajax({
        type:"POST",
        url:"eliminarCodigos.php",
        data:cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('views/tabla.php'); 
                $('#tabla1').load('views/tabla.eli.php'); 

                alertify.success('Eliminado con Exito');                
            }else{
                alertify.error("fallo el servidor ");
               }       
        }
    });
    
}
function buscadores(id){

    /*  if($_post['titulo']=" "){
         location.href ="../subir.php/#form_uno"; 
         
     } */
 
     cadena="id="+ id ;
 
     $.ajax({
            type:"POST",
            url:"buscador.php",
            data:cadena,
            success:function(r){
                if(r==1){
                 $('#foto').load('foto.php');
                  
                 header('Location:index.php');   
               
            } else{
             alertify.error("Ingresa formulario Inicial ");
            }
         }
         });
 }
 function Sumar() {
    var n1 = document.getElementById('cantidad').value;
    var n2 = document.getElementById('cant').value;
    var suma = parseInt(n1) * parseInt(n2);
    document.getElementById('canto').value=suma;
  
}
 /* $(document).ready(function(){
    // Global Settings
   // let edit = false;
  
    // Testing Jquery
    //console.log('jquery is working!');
   // fetchTasks();
   // $('#task-result').hide();
  
  
    // search key type event
    $('#codigo').keyup(function() {
      if($('#codigo').val()) {
        let codigo = $('#codigo').val();
        $.ajax({
          url: 'tabla_remision.php',
          data: {codigo},
          type: 'POST',
          success: function (response) {
            if(!response.error) {
              let tasks = JSON.parse(response);
              let template = '';
              tasks.forEach(task => {
                template += `
                       <li><a href="#" class="task-item">${task.name}</a></li>
                      ` 
              });
              $('#task-result').show();
              $('#container').html(template);
            }
          } 
        })
      }

    })
}); */
/* $(document).ready(function(){

console.log('prueba de ajax');
$('#codigo').keyup(function(e){

    let  codigo = $('#codigo').val();
    $.ajax({
       url:'tabla_remision.php',
       type:'POST',       
       data:{codigo},
       success: function(response){  
           let tarea =  JSON.parse(response)       
           console.log(tarea.nombre);           
       }
    })
})




}); */