<?php

include("prisijungimasDBkomentarai.php");
$vardas = $_GET['Vardas'];
$komentaras = $_GET['Komentaras'];
createKomentarai($vardas, $komentaras);

?>
<h2>Ačiū už Jūsų nuomonę ;) </h2>

<!-- redirect'as atgal i puslapi -->
<meta http-equiv="refresh" content="3; url=apie.php">

<!--arba galima grizti issikvieciant funkcija  -->
<!-- // function redirect($url, $statusCode = 303)
// {
//    header('Location: ' . $url, true, $statusCode);
//    die();
// } -->
