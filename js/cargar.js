     //------------------variables globales ------------------------//
    
     var btn_cargar = document.getElementById("btn");
     var error_box =  document.getElementById("error_box");
     var tabla =  document.getElementById("tabla");
     var loader =  document.getElementById("loader");
     var respro = document.getElementById('respro'); 
     var totales=0; 


     var codigo,
     select,
     precio,
     cantidad,
     cliente,
     nombre_cliente,  
     subtotal; 
     
    //--------------------------mostrar y ocultar btn pdf -------------------
     function ocultar(){
        document.getElementById('remis').style.display = 'none';
        }
     function mostrar(){
            document.getElementById('remis').style.display = 'block';
            }

     //------------------------ entrada a documemento -----------------------------//

$(document).ready(function() { 
    ocultar();       
    $.ajax({
            type: "POST",
            url: "insertar_prueba.php",
            success: function(response) 
            {
                $('.selector-pais select').html(response).fadeIn();               
            }
    });      
 });
                         
    // --------------------------------- seleccion de cliente---------------------//
$('#formulario').change(function(e){  
       
     const postData ={
         cliemte: $('#cliente').val()         
         
     }
     totales=0;
     
      
     
                //---------------- guarda numero de remision y fecha ----------------//
      
  
     $.post('tabla_cliente.php',postData, function(response){
         var respuesta1 =('ID:'+response[0].id_clientes+' ');
         var respuesta2 =('Nombre:'+response[0].cliente+' ');
         var respuesta3 =('Direccion:'+response[0].direccion);
         var respuesta4 =('Ciudad:'+response[0].ciudad+' ');
         var respuesta5 =('Telefono:'+response[0].telefono+' ');
         var respuesta6 =('Nit:'+response[0].nit);
         var respuesta7 =(response[0].cliente);
         document.getElementById("cli").value = respuesta7;
         document.getElementById("pos1").innerHTML = respuesta1;
         document.getElementById("pos2").innerHTML = respuesta2;
         document.getElementById("pos3").innerHTML = respuesta3;
         document.getElementById("pos4").innerHTML = respuesta4;
         document.getElementById("pos5").innerHTML = respuesta5;
         document.getElementById("pos6").innerHTML = respuesta6;         
         
         //---------------------ingreso cliente a tabla numeroremision ------------------------
       

        var peticion = new XMLHttpRequest();
        peticion.open("POST","tabla_numeroremision.php");
        cliente = (response[0].cliente);
        var parametros = "cliente="+cliente;
        peticion.setRequestHeader("content-Type","application/x-www-form-urlencoded");
        peticion.send(parametros);
        peticion.onload = function(){           
        mostrarVariables();
          
        }     
         
     });     

    
    
  });	

  //-------------------------------- mostrar variables--------------------------------
function mostrarVariables(){


  $.ajax({
    type: "POST",
    url: "tabla_verremision.php",
    success: function(response)
    {
        var respuesta1 =(response[0].fecha);
        var respuesta2 =(response[0].remision);
        document.getElementById('fecha').value = respuesta1;
        document.getElementById('remision').value = respuesta2; 
                   
       
    }
  });    

  }
//---------------------------------lee codigo de barras ---------------------------------------//

$('#codigo').change(function(e) {
let codigo =  $('#codigo').val();


    $.ajax({
            type: "POST",
            url: "tabla_codigo.php",
            data:{codigo},
            success: function(respuesta)
            {                
                var respuesta10 =(+respuesta[0].id_producto+'-'+respuesta[0].nombre); 
                            
              document.getElementById("respro").value = respuesta10;             
             }
    });

    $('#codigo').trigger('reset');
   
 });

   //-----------------------multiplica precio y cantidad ----------------------------------------//
                
 function multiplica() {
    var n1 = document.getElementById('cantidad').value;
    var n2 = document.getElementById('precio').value;   
    var suma = n1*n2;       
        //var total=formatNumber(suma);     
    document.getElementById('subtotal').value= suma;
  
}

//----------------------------- salta a proximo campo --------------------------------------//

function saltar(e,id)
{
	e.preventDefault();
	var k = e.keyCode;
   console.log(k);	
	if(k===13)
	{		
		 if(id=="submit")
		{
			document.forms[0].submit();
		}else{ 
			
			document.getElementById(id).focus();
 }	 
	}
}

//-------------------------- formatea campo a miles ---------------------------------------------//
function formatNumber(num) {
    if (!num || num == 'NaN') return '-';
    if (num == 'Infinity') return '&#x221e;';
    num = num.toString().replace(/\$|\,/g, '');
    if (isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    cents = num % 100;
    num = Math.floor(num / 100).toString();
    if (cents < 10)
        cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
    return (((sign) ? '' : '-') + num + ',' + cents);
}
//-----------------------------------cargar datos remision a tabla sqli remision -------------------------------------------------------//
       

 function cargar_remision(e){
         
         e.preventDefault(); 
         mostrar();
      
         codigov = document.getElementById("codigo").value;
         console.log(codigov);
         if(!codigov || codigov == 'NaN' || codigov == 'undefined' || codigov == "" || codigov< 7705555000){
        alert("Coloque el codigo de Barras");
         console.log(codigov);
         formulario1.subtotal.value=0;
         }
         totales = totales+parseFloat(formulario1.subtotal.value);
         console.log(totales);
         var peticion = new XMLHttpRequest();
         peticion.open("POST","tabla_ingreso_rem.php");
         select = formulario1.respro.value.trim();
         precio = formulario1.precio.value.trim();
         cantidad = formulario1.cantidad.value.trim();
         subtotal = formulario1.subtotal.value;
         nombre_cliente = document.getElementById("cli").value;
         remision = document.getElementById("remision").value;
         
         console.log(totales);
         console.log(nombre_cliente);                                   
         if(formulario_valido()){
             
         error_box.classList.remove('active');
         var parametros = "remision="+remision+"&nombre="+nombre_cliente+ "&producto="+select+"&precio="+precio+"&cantidad="+cantidad+"&subtotal="+subtotal+"&totales="+totales;
         peticion.setRequestHeader("content-Type","application/x-www-form-urlencoded");  
         loader.classList.add('active');
                          //------------ borra campos visuales  ------------------------//
         peticion.onload = function(){
            cargar_datos();
            loader.classList.remove('active');
            formulario1.codigo.value = '';
            formulario1.respro.value = '';
			formulario1.cantidad.value = '';
			formulario1.precio.value = '';
            formulario1.subtotal.value = '';               
            
         }
         peticion.send(parametros);         

        }else{
            error_box.classList.add('active');
            error_box.innerHTML = "por favor completa el formulario";
        }

     }

             // ------------- ejecuta cargar remision ----------------------------//

     btn.addEventListener('click', function(e){
          cargar_remision(e);  
           

     });
           // ------------------- funcion de validar datos remision ----------------//

     function formulario_valido(){
        if(codigo == ''){
            return false;
        } else if(precio == ''){
            return false;          
        }else if(precio == 0){
            return false; 
        }   
         else if(cantidad == ''){
            return false;
        }else if(cantidad == 0){
            return false; 
        }  
         else if(subtotal == ''){
            return false;
        }
    
        return true;
    }

    //----------------------------------- funcion que carga datos en la pagina HTML ---------------//

function cargar_datos(){
        tabla.innerHTML = '<tr><th class="text-center">Producto</th><th>Cantidad</th><th>Precio</th><th>Subtotal</th><th>Acumulado</th></tr>';


        //------------------------------------ enviar parametro a base de datos ---------------------------------------

       remision = document.getElementById('remision').value;
       loader.classList.add('active');
       

        $.ajax({
            type: "POST",
            url: "tabla_remision.php",
            data:{remision},
            success: function(response1){
                console.log(response1);
                for(var i=0; i< response1.length;i++){                    
                    
                    var elemento = document.createElement('tr');
                    elemento.innerHTML += ("<td>"+ response1[i].producto +"</td>" );
                    elemento.innerHTML += ("<td>"+ response1[i].cantidad +"</td>" );
                    elemento.innerHTML += ("<td>"+"$ "+ response1[i].precio +"</td>" );
                    elemento.innerHTML += ("<td>"+"$ "+ formatNumber(response1[i].subtotal) +"</td>" );
                    elemento.innerHTML += ("<td>"+"$ "+ formatNumber(response1[i].acumulado) +"</td>" );
                    tabla.appendChild(elemento);                   
                   
                }                 
            }           
          });    
      
    
     }

     function Quitar() {
        var ultimo = document.getElementById('tabla');
        document.body.removeChild(ultimo);
     }
       
     //----------------------------------fin------------------------
    