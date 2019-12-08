<?php
require 'funciones.php'; 
require 'views/nav-admin.php';
?>


<div class="contenedor">

    <form action="" method="" id="formulario" onclick="saltar(event,'codigo')">
        <div class="row mx-0">
            <div class="col-8">
                <input type="text" id="fecha" placeholder="fecha:" class="form-control" maxlength="7" readonly>
                <input id="cli" class="p-0" readonly type="hidden">
            </div>
            <div class="col-4">
                <input type="number" id="remision" placeholder="n:" class="form-control test-right" readonly>
            </div>
        </div>
        <div class="selector-pais col-10 col-sm-5 ">
            <span>Elige Cliente</span>
            <select id="cliente" class="input-group py-2" onchange="saltar(event,'codigo')">
            </select>
        </div>

</div>
</form>
</div>
<center>
    <div class="col-12 col-sm-10">
        <table id="nombre" class="table-bordered my-4">
            <tr>
                <td id="pos1" class="px-3"></td>
                <td id="pos2" class="px-3"></td>
                <td id="pos3" class="px-3"></td>
            </tr>
            <tr>
                <td id="pos4" class="px-3"></td>
                <td id="pos5" class="px-3"></td>
                <td id="pos6" class="px-3"></td>
            </tr>
        </table>
    </div>
</center>
<div class="error_box mb-2" id="error_box">
</div>
<center>
    <div class="col-12" mt-4>
        <form action="" class="form-group" id="formulario1" >
            <input type="hidden" id="cliente1" name="cliente1">
            <input type="hidden" id="rem" name="rem">
            <input id="codigo" type="number" name="codigo" placeholder="codigo barras" class="p-2" required
                maxlength="10" minlength="10" onkeyup="saltar(event,'cantidad')">
            <div class="container">
                <input id="respro" class="form-control" name="respro" type="text" readonly placeholder="producto">
            </div>
            <input id="cantidad" type="number" name="cantidad" placeholder="cantidad" onkeyup="saltar(event,'precio')"
                class="mt-2 p-2" required>
            <input id="precio" name="precio" type="number" placeholder="precio" REQUIRE
                onkeyup="saltar(event,'subtotal')" class="mt-2 p-2" required>
            <input id="subtotal" name="subtotal" type="number" placeholder="subtotal" readonly class="mt-2 p-2"
                onfocus="multiplica();" onkeyup="document.getElementById('btn').focus()">
            <input type="hidden" id="totales" name="totales">
            <div class="row">
            <div class="col-12">
                <button class="btn btn-warning my-2" type="button" id="btn">GUARDAR</button>
            </div>
        </form>
    </div>
    <div>
        <div class="col-6" id="remis">
            <a href="pdfremision.php" target="_blank" id="arem"><button class="btn btn-info my-2"><i
                        class="fas fa-file-pdf "></i> pdf</button></a>
        </div>
    </div>
    </div>
</center>
</div>
<div id="cod4">
</div>
<center>
    <div id="pos8">
    </div>
    <div id="tablaM" class="col-10">
        <table id="tabla" class="table table-hover">
        </table>
    </div>
</center>
<center>
    <div>
        <a href="views_reporte.php" class="text-center"><button class="btn btn-success my-2">salir</button> </a>
    </div>
</center>
<div class="loader" id="loader">
</div>
<script src="js/cargar.js">
</script>
<script src="js/cargar4.js">
</script>
</script>
<script src="js/aritmeticas.js">
</script>
</body>

</html>