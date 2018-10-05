<?php

include('db-functions.php');

$numeris = $_GET["nr"]; //narsykles adresu juostoje ivesti ?nr=2
$gydytojas = getDoctor($numeris);

echo "$gydytojas[1]";
//echo "$gydytojas['name']"; 