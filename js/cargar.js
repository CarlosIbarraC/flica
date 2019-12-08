var totales;
var precio;
var cantidad;
var cliente;
var subtotal;
var error_box = document.getElementById("error_box");
var tabla = document.getElementById("tabla");
var loader = document.getElementById("loader");


function ocultar() {
    document.getElementById("remis").style.display = "none";
}
function mostrar() {
    document.getElementById("remis").style.display = "block";
}
$(document).ready(function () {
    ocultar();
    $.ajax({
        type: "POST",
        url: "insertar_prueba.php",
        success: function (response) {
            $(".selector-pais select").html(response).fadeIn();
        }
    });
});
$("#formulario").change(function (e) {
    var postData = {
        cliemte: $("#cliente").val()
    };
    totales = 0;
    $.post("tabla_cliente.php", postData, function (response) {
        var respuesta1 = ("ID:" + response[0].id_clientes + " ");
        var respuesta2 = ("Nombre:" + response[0].cliente + " ");
        var respuesta3 = ("Direccion:" + response[0].direccion);
        var respuesta4 = ("Ciudad:" + response[0].ciudad + " ");
        var respuesta5 = ("Telefono:" + response[0].telefono + " ");
        var respuesta6 = ("Nit:" + response[0].nit);
        var respuesta7 = (response[0].cliente);
        document.getElementById("cli").value = respuesta7;
        document.getElementById("pos1").innerHTML = respuesta1;
        document.getElementById("pos2").innerHTML = respuesta2;
        document.getElementById("pos3").innerHTML = respuesta3;
        document.getElementById("pos4").innerHTML = respuesta4;
        document.getElementById("pos5").innerHTML = respuesta5;
        document.getElementById("pos6").innerHTML = respuesta6;
        var peticion = new XMLHttpRequest();
        peticion.open("POST", "tabla_numeroremision.php");
        cliente = (response[0].cliente);
        var parametros = "cliente=" + cliente;
        peticion.setRequestHeader("content-Type",
        "application/x-www-form-urlencoded");
        peticion.send(parametros);
        peticion.onload = function () {
            mostrarVariables();
        };
    });
});

function mostrarVariables() {
    $.ajax({
        type: "POST",
        url: "tabla_verremision.php",
        success: function (response) {
            var respuesta1 = (response[0].fecha);
            var respuesta2 = (response[0].remision);
            document.getElementById("fecha").value = respuesta1;
            document.getElementById("remision").value = respuesta2;
        }
    });
}
$("#codigo").change(function (e) {
    var codigo = $("#codigo").val();
    $.ajax({
        type: "POST",
        url: "tabla_codigo.php",
        data: {codigo},
        success: function (respuesta) {
            var respuesta10=(respuesta[0].id_producto +"-" + respuesta[0].nombre);
           
            document.getElementById("respro").value = respuesta10;
        }
    });
    $("#codigo").trigger("reset");
});




function formatNumber(num) {
    if (!num || num == "NaN") {
        return "-";
    }
    if (num == "Infinity") {
        return "&#x221e;";
    }
    num = num.toString().replace(/\$|\, /g , "");
    if (isNaN(num)) {
        num = "0";
    }
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    cents = num % 100;
    num = Math.floor(num / 100).toString();
    if (cents < 10) {
        cents = "0" + cents;
    }
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++) {
        num = num.substring(0, num.length - (4 * i + 3)) +
            "." + num.substring(num.length - (4 * i + 3));
    }
    return (((sign) ? "" : "-") + num + "," + cents);
}

//----------------------------------------------------



