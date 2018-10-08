<?php

include('db-functions.php');

$numeris = 3;
$gydytojas = getDoctor($numeris);
echo "$gydytojas[1]";
//echo "$gydytojas['name']";