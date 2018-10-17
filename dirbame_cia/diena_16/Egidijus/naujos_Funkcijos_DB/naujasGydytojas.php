<?php
include 'db-functions.php';
// createDoctorIlgesne("Juozas", "Juozaitis");
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctorIlgesne($vard, $parv);

 ?>
