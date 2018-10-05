<?php
include ("db-functions.php");
$numeris=$_GET['x'];
$gydytojas=getDoctor($numeris);

  echo $gydytojas[0] . $gydytojas[1] . $gydytojas[2];
// [ skaicius yra stalciaus numeris doctors lenteleje ]

 ?>
