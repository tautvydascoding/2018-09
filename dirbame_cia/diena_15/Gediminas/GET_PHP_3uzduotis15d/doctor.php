

<?php
include ("db-funcion_destytojo.php");
$numeris =$_GET["x"];
$gydytojas=getDoctor($numeris);
echo "<h1>" . $gydytojas[0] . " " .$gydytojas[1] . " " . $gydytojas[2] . "</h1>"; // 1 tai reiskia kuriame langelyje
//echo $gydytojas["name"];

 ?>
