function Quitar() {
    var ultimo = document.getElementById("tabla");
    document.body.removeChild(ultimo);
}
function saltar(e, id) {
    e.preventDefault();
    var k = e.keyCode;
    console.log(k);
    if (k === 13) {
        if (id == "submit") {
            document.forms[0].submit();
        } else {
            document.getElementById(id).focus();
        }
    }
}
function multiplica() {
    var n1 = document.getElementById("cantidad").value;
    var n2 = document.getElementById("precio").value;
    var suma = n1 * n2;
    document.getElementById("subtotal").value = suma;
}