var btn = document.getElementById("select_cliente");
var loader = document.getElementById("loader");
var usuario_nombre;

function ingresar() {
	var peticion = new XMLHttpRequest();
	peticion.open("GET", "tabla_cliente.php");
	loader.classList.add("active");

	peticion.onload = function () {
		var datos = JSON.parse(peticion.responseText);
		for (var i = 0; i < datos.length; i++) {
			var elemento = document.createElement("tr");
			elemento.innerHTML +=
				"<td class='px-4'>" + datos[i].id_clientes + "</td>";
			elemento.innerHTML += "<td class='px-4'>" + datos[i].cliente + "</td>";
			elemento.innerHTML += "<td class='px-4'>" + datos[i].direccion + "</td>";
			elemento.innerHTML += "<td class='px-4'>" + datos[i].telefono + "</td>";
			elemento.innerHTML += "<td class='px-4'>" + datos[i].ciudad + "</td>";
			elemento.innerHTML += "<td class='px-4'>" + datos[i].nit + "</td>";
			document.getElementById("tabla").appendChild(elemento);
		}
	};
	peticion.onreadystatechange = function () {
		if (peticion.readyState == 4 && peticion.status == 200) {
			loader.classList.remove("active");
		}
	};
	peticion.send();
}
btn.addEventListener("click", function () {
	ingresar();
});

btn.addEventListener("submit", function (e) {
	agregarUsuarios(e);
});

//------------------------------------------------------------------------------------
function agregarUsuarios(e) {
	e.preventDefault();

	var peticion = new XMLHttpRequest();
	peticion.open("POST", "tabla_cliente.php");

	usuario_nombre = "carlos";
	console.log(usuario_nombre);

	if (formulario_valido()) {
		//error_box.classList.remove('active');
		var parametros = "nombre=" + usuario_nombre;

		peticion.setRequestHeader(
			"Content-Type",
			"application/x-www-form-urlencoded"
		);

		loader.classList.add("active");

		peticion.onload = function () {
			ingresar();
			formulario.nombre.value = "";
		};

		peticion.onreadystatechange = function () {
			if (peticion.readyState == 4 && peticion.status == 200) {
				loader.classList.remove("active");
			}
		};

		peticion.send(parametros);
	} else {
		error_box.classList.add("active");
		error_box.innerHTML = "Por favor completa el formulario correctamente";
	}
}

function formulario_valido() {
	if (usuario_nombre == "") {
		return false;
	}

	return true;
}