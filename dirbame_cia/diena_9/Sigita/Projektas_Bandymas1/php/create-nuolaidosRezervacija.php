<?php

include("prisijungimasDBnuolaiduRezervacija.php");
$vardas = $_GET['Vardas'];
$pavarde = $_GET['Pavarde'];
$telNr = $_GET['TelNr'];
createRezervacija($vardas, $pavarde, $telNr );

?>
<h2>Rezervacija sėkminga, laukiam Jūsų! ;) </h2>
