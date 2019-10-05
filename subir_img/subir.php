<?php echo '<pre>';
print_r($_FILES['archivo']);
echo '<pre>';
$temporal = $_FILES['archivo']['tmp_name'];
$nombre = $_FILES['archivo']['name'];

move_uploaded_file($temporal,'img/'.$nombre);

//abrir foto original
/* $original=imagencreatefromjpeg($temporal);
$ancho_original = imagesx($original);
$alto_original = imagesy($original);
$
$copia=imagecreatetruecolor(700,400);
//copiar original ->copia
//1-2 destino-original 
//3-4 eje X_Y pegado --> 0,0
//5-6 eje X-Y original-->0.0
//7-8 ancho-alto destino-->WIDHT -HEIGTH
//9-10 ancho-alto original -->WIDGHT - HEIGHT
imagecopyresampled($copia,$original,0,0,0,0,700,400,$ancho_original,$alto_original);

//exportar/guardar imagen
// 100 calidad de imagen (0 a 100)
imagejpeg($copia,"img/".$nombre,100); */ 



?>