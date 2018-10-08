<?php
include('DB-functions.php');
$vard = $_GET['vardas'];
$pavr = $_GET['pavarde'];
createDoctor($vard, $pavr);
?>
<p>Registracija ivygdyta!!!!!!</p>
