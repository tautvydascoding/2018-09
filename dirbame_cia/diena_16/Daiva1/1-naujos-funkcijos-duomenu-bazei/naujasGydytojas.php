
  <?php

// include('db-functions.php');
// createDoctor("Juozas", "Juozaitis");

include('db-functions.php');
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);

   ?>
