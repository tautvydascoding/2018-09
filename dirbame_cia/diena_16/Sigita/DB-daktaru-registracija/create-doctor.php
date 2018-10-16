<?php
// $vardas = $_GET["name"];
// $pavarde = $_GET["lname"]; galima susikurti kintamuosius ir i skliausteliuose rasyti vietoj $_GET['name'] situs kintamuosiu;

include("1-php--funkcijos-prisijungimas-prie-DB.php");
createDoctor($_GET['name'], $_GET['lname']);
// $gyd = getDoctors($numeris);
?>
<h2>Sveikinu pavyko</h2>
