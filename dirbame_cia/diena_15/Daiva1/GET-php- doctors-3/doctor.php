<?php
include ("db-functions.php");
$numeris= 5;
$gydytojas= getDoctor($numeris);

echo $gydytojas[3];
// echo $gydytojas["name"];



 ?>
