<?php
include("db-functions.php");
$numeris = 6;
$gydytojas = getDoctor($numeris);
echo $gydytojas[1] . $gydytojas[2];.
// echo $gydytojas["name"];
