
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

    } else {nombre = $("#cli").val();
        rem = $("#remision").val();
        $("#cliente1").val(nombre);
        var prue = $("#cliente1").val();
        console.log(prue);
        $("#rem").val(rem);
        var remi = $("#rem").val();
        console.log(remi);
        mostrar();         
       
        producto = formulario1.respro.value.trim();
        precio = formulario1.precio.value.trim();
        cantidad = formulario1.cantidad.value.trim();
        subtotal = formulario1.subtotal.value;
        console.log(producto);
       
        if (formulario_valido()) {
            error_box.classList.remove("active");
            totales = totales + parseFloat(formulario1.subtotal.value);
            $("#totales").val(totales); 
            var tot= $("#totales").val();
           
           console.log(tot);

           datos ="rem="+remi+"&cliente1="+prue+"&respro="+producto+"&precio="+precio+"&cantidad="+cantidad+"&subtotal="+subtotal+"&totales="+totales;
             
         $.ajax({
             type:"POST",
             url:"tabla_ingreso_rem.php",
             //async:true,
             //data:$("#formulario1").serialize(),
             data:datos,
             success:function(r){
             if (r==1){
            console.log(r);
                    cargar_datos();
                    
                    loader.classList.remove("active");
                   
                formulario1.codigo.value = "";
                formulario1.respro.value = "";
                formulario1.cantidad.value = "";
                formulario1.precio.value = "";
                formulario1.subtotal.value = "";
            }
                else{
                    error_box.classList.add("active");
                    error_box.innerHTML = "por favor completa el formulario"; 
                } 
            }
         
        }) ;  
               
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
