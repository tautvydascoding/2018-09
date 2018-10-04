

<?php
include ("db-funcion_destytojo.php");
$numeris =$_GET["x"];
$gydytojas=getDoctor($numeris);
echo $gydytojas[1]; // 1 tai reiskia kuriame langelyje
//echo $gydytojas["name"];

 ?>
