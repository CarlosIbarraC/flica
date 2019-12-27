function cargar_remision(e) { 
    e.preventDefault();
    codigov = document.getElementById("codigo").value;    
    console.log(codigov);
    if (!codigov || codigov === "NaN" || codigov === "undefined" ||
        codigov === "" || codigov < 7705555000  || codigov > 7705555500 ) {
        alert("numero de codigo no valido");
        console.log(codigov);        
        $("#codigo").val("");
        $("#cantidad").val("");
        $("#precio").val("");
        $("#subtotal").val("");
        $("#codigo").focus();

    } else {nombre = formulario.cli.value;
        rem = formulario.remision.value; 
        producto = formulario1.respro.value.trim();
        precio = formulario1.precio.value.trim();
        cantidad = formulario1.cantidad.value.trim();
        subtotal = formulario1.subtotal.value;
       console.log(rem);
       document.getElementById("cliente1").value = nombre;
       document.getElementById("rem").value=rem;
        if (formulario_valido()) {
            error_box.classList.remove("active");
            totales = totales + parseFloat(formulario1.subtotal.value);
            document.getElementById("totales").value=totales;          
          var formulario3 = document.getElementById('formulario1');
          var datos = new FormData(formulario3);
               console.log(datos.get('rem'));
               console.log(datos.get('cliente1'));
               console.log(datos.get('respro'));
               console.log(datos.get('precio'));
               console.log(datos.get('cantidad'));
               console.log(datos.get('subtotal'));
               console.log(datos.get('totales'));
              fetch('js/tablaingresorem.php',{
                  method:'POST',
                  body:datos,
                  dataType:'json'
              })
             
              .then(res =>res.json())
              .then(data=>{
                 
                  if(data==1){
                    cargar_datos();
                    mostrar(); 
                    loader.classList.remove("active");
                   
                formulario1.codigo.value = "";
                formulario1.respro.value = "";
                formulario1.cantidad.value = "";
                formulario1.precio.value = "";
                formulario1.subtotal.value = "";
                alert("ha sido ejecutada la accion")       
                      
                  }else{
                   
                respuesta.innerHTML =`
                <div class="alert alert-danger" role="alert">
                Error en la transmision de datos
              </div>
                `     
                  }
              })
             
                   
                }
                 
               
    }      
        
    }

var btn_cargar = document.getElementById("btn");
btn_cargar.addEventListener("click", function (e) {
    cargar_remision(e);
});
function formulario_valido() {
    if (formulario1.respro.value === "") {
        console.log(formulario1.respro.value);
        $("#codigo").val("");
        $("#cantidad").val("");
        $("#precio").val("");
        $("#subtotal").val("");
        $("#codigo").focus();
       
        return false;
    }
    return true;
}
function cargar_datos() {
    var titulo="<tr><th class='text-center'>Producto</th><th>Cantidad</th><th>Precio</th><th>Subtotal</th><th>Acumulado</th></tr>";
    tabla.innerHTML = titulo ;    
    remision = document.getElementById("remision").value;
    remis= "remision="+remision;
    loader.classList.add("active");
    $.ajax({
        type: "POST",
        url: "tabla_remision.php",
        data: remis,
        success: function (response1) {
            console.log(response1);
            for (var i = 0; i < response1.length; i++) {
                var elemento = document.createElement("tr");
                elemento.innerHTML += ("<td>" +
                    response1[i].producto + "</td>");
                elemento.innerHTML += ("<td>" +
                    response1[i].cantidad + "</td>");
                elemento.innerHTML += ("<td>" +
                    "$ " + response1[i].precio + "</td>");
                elemento.innerHTML += ("<td>" +
                    "$ " + formatNumber(response1[i].subtotal) + "</td>");
                elemento.innerHTML += ("<td>" +
                    "$ " + formatNumber(response1[i].acumulado) + "</td>");
                tabla.appendChild(elemento);
            }
        }
    });
}



//--------------------------------------
