<?php

include("prisijungimasDBnuolaiduRezervacija.php");
$vardas = $_GET['Vardas'];
$pavarde = $_GET['Pavarde'];
$telNr = $_GET['TelNr'];
createRezervacija($vardas, $pavarde, $telNr );

?>
<h2>Rezervacija sėkminga, laukiam Jūsų! ;) </h2>
<!-- redirect'as atgal i puslapi -->
<meta http-equiv="refresh" content="3; url=index.php">
<!-- function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
} -->
