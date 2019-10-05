<?php
//require 'views/nav-admin.php';
require 'funciones.php';

session_start();

$_SESSION['cliente'] ="";
$_SESSION['remi'] ="";


try {
    $conexion = new PDO('mysql:host=localhost;dbname=galeria', 'root', '');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$statement = $conexion->prepare('SELECT  * FROM numeroremision  ORDER BY cliente,fecha ');
$statement->execute();
$resultado = $statement->fetchAll();
foreach ($resultado as $row) {
?>
<table>
<th>

</th>

<tr>
<td class="celda" ><a href="pdfremision.php?cliente=<?php echo $row['cliente']?>&remision=<?php echo  $row['remision'];?>"><button type="button" class="btn btn-sm btn-success form-group "><i class="fas fa-file-alt"></i>..<i class="far fa-handshake"></i> <?php echo $row['cliente'],$row['remision']?></button></a></td>



<br>
</tr>
</table>
<?php
}