<!DOCTYPE html>
<html lang="en">
<head>
    <title>Codigo de barras</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.grid.css">
    <script src="../js/JsBarcode.all.min.js"></script>
    
</head>
<body>
    <div class="container">
    <center>
        <h1 class="my-4">Codigos de Barras FLICA</h1>
    </center>
    <br><br>
        <div class="row">        
            <div class="col-sm-4">   
                <a href="../views_reporte.php" class="btn btn-danger">Volver Admin</a>         
             
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-11">
            <?php require_once "tabla.php"?>
            </div>
        </div>
    </div>
</body>
</html>