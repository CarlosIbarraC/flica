<?php

$connection = mysqli_connect(
  'localhost', 'root', '', 'galeria'
);


if($connection) {
 echo 'database is connected';
}

?>
