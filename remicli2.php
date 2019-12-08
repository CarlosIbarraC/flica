<center>
    <div class="col-12" mt-4>
        <form action="tabla_ingreso_rem.php" class="form-group" id="formulario1" method="get">
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
                <button class="btn btn-warning my-2" type="submit" id="btn">GUARDAR</button>
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