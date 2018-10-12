

<?php
include ("db-funcion_destytojo.php");
$numeris =18;
$gydytojas=getDoctor($numeris);
echo $gydytojas[0];
echo $gydytojas["name"];

 ?>
