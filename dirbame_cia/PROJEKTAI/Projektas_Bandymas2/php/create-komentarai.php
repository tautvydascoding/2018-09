<?php

include("prisijungimasDBkomentarai.php");
$vardas = $_GET['Vardas'];
$komentaras = $_GET['Komentaras'];
createKomentarai($vardas, $komentaras);

?>
<h2>Ačiū už Jūsų nuomonę ;) </h2>
