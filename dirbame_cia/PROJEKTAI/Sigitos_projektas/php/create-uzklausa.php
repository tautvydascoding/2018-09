<?php
// $vardas = $_GET["name"];
// $pavarde = $_GET["lname"]; galima susikurti kintamuosius ir i skliausteliuose rasyti vietoj $_GET['name'] situs kintamuosiu;
include("prisijungimasDBuzklausos.php");
$vardas = $_GET['Vardas'];
$telNr = $_GET['TelNr'];
$zinute = $_GET['Gautas_pranešimas'];


createUzklausa($vardas, $telNr, $zinute);

?>
<h2>Ačiū, susisieksime su Jumis! ;) </h2>
<!-- redirect'as atgal i puslapi -->
<meta http-equiv="refresh" content="3; url=kontaktai.php">

<!-- function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
} -->
