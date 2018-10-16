<?php


require ("zmogus.php");

$Petras = new Zmogus();
$Petras->setUgis( 210);
$Petras->setUgis( 205);
$Petras->setUgis( 195);

echo $Petras->getUgis();


$Petras->setVardas("Petras");

echo $Petras->getVardas();



$Angele = new Zmogus(178, "Angele");

echo $Angele->getUgis();


