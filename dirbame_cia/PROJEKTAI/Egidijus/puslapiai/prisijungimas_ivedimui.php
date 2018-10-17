<?php

define("DB_PAVADINIMAS", "begimo_entuziastai");
define("DB_VARTOTOJAS", "root");
define("DB_SLAPTAZODIS", "root");
define("DB_HOST", "localhost");

$prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS );


if ($prisijungimas) {
  // echo "<h1>Prisijungta sekmingai!</h1>";
} else {
  if ($arRodytZinutes)
  echo "ERROR:: Prisijungti nepavyko " . mysqli_connect_error();
}

function getPrisijungimas(){
  global $prisijungimas;
  // $GLOBALS['$prisijungimas'] = 99;
  return $prisijungimas;
}
getPrisijungimas();





// Check connection
if($prisijungimas === false){
    die("KLAIDA: Nepavyko prisijungti. " . mysqli_connect_error());
}

// Escape user inputs for security
$Begimas = mysqli_real_escape_string($prisijungimas, $_REQUEST['Begimas']);
$Distancija = mysqli_real_escape_string($prisijungimas, $_REQUEST['Distancija']);
$Laikas = mysqli_real_escape_string($prisijungimas, $_REQUEST['Laikas']);

// Attempt insert query execution
$sql = "INSERT INTO vartotojai (Begimas, Distancija, Laikas) VALUES ('$Begimas', '$Distancija', '$Laikas')";
if(mysqli_query($prisijungimas, $sql)){
    echo "Bėgimas sėkmingai pridėtas.";
} else{
    echo "Klaida: Nepavyko pridėti $sql. " . mysqli_error($prisijungimas);
 }

// Close connection
mysqli_close($prisijungimas);
