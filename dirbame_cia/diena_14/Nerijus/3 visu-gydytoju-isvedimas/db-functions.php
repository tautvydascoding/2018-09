<?php
$arRodytiZinutes = true;  // $debugMode = 1;

// konstantas
define("DB_PAVADINIMAS", "hospital9");
define("DB_VARTOTOJAS", "root");
define("DB_SLAPTAZODIS", "root");
define("DB_HOST", "localhost");

$prisijungimas = mysqli_connect (DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);
// prisijungimas
if ($prisijungimas) {
  // echo "prisijungei prie db sekmingai <br />";
} else {
  if ($arRodytiZinutes) {
    echo "prisijungti nepavyko <br />" . mysqli_connect_error();
  }
}

function getPrisijungimas() {
  global $prisijungimas;
  return $prisijungimas;
}
getPrisijungimas();

// duomenu grazinimas
/*
f-ja iesko db gydytojo pagal id
$nr: ieskomo gydytojo numeris
return: array uzpildyta rastojo gydytojo duomenis
*/
function getDoctor($nr) {
  $manoSQL = "SELECT * FROM doctors WHERE id = $nr";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  // mysqli_fetch_row is rastu duomenu paima viena ir ideda i masyva(array)
  $resultataiArray = mysqli_fetch_row($result);

  // var_dump($result);
  // echo "<br /> <br />";
  // var_dump($resultataiArray);
  // print_r($resultataiArray);
  return $resultataiArray;
}
// $gydytojas = getDoctor(9);
// echo "mano seimos gyd: " . $gydytojas[1] . $gydytojas[2];
