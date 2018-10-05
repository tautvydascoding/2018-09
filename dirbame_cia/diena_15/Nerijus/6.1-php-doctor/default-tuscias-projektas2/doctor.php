<?php
include("db-functions.php");
$numeris = $_GET["nr"];
$gydytojas = getDoctor($numeris);
echo $gydytojas[1] . $gydytojas[2];
// echo $gydytojas["name"];
