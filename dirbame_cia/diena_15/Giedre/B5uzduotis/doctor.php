<?php

include('db-functions.php');

$numeris = $_GET["nr"]; //narsykles adresu juostoje ivesti ?nr=2
$gyd = getDoctor($numeris);

echo "$gyd[2]";
//echo "$gydytojas['name']"; 