<?php
include ('db-functions.php');
// $numeris = $_GET["nr"];
// $gyd = getDoctor($numeris);
// echo $gyd[1] . $gyd[2];




// $gydytojas = getDoctor($numeris);
//
// echo "  "  . $gydytojas[0];
// echo  "  " . $gydytojas[1];
// echo "  " . $gydytojas[2];
// echo  $gydytojas["name"];

// $numeris = $_GET["x"];
// $gydytojas = getDoctor($numeris);
// echo " ";


$numeris = $_GET["x"];
$gyd = getDoctor($numeris);
echo $gyd[1] . " " . $gyd[2];














 ?>
