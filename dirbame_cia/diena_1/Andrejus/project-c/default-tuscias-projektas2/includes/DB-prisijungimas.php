<?php
$arRodytiZinutes = true; //$debugMode = 0-2 max3 gali buti
define("DB_PAVADINIMAS", "baigiamasis");
define("DB_VARTOTOJAS", "root"); //user_name
define("DB_SLAPTAZODIS", "root"); // password
define("DB_HOST", "localhost");

$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS); mysqli_set_charset($prisijungimas, "utf8");
if ($prisijungimas) {
  //echo "Prisijunge sekmingai prie DB <br />";
} else {
  //echo "Neprisijunge!!!!!!!!!!!".mysqli_connect_error();
  if ($arRodytiZinutes) {
    echo "Neprisijunge!!!!!!!!!!!".mysqli_connect_error(); //paaiskina kur yra klaida
  }
}
// return : grazinamas prisijungimas prie DB
//bendrai parodo ar pavyksta prisijungt prie duomenu bases
function getPrisijungimas() {
  global $prisijungimas;  // negalima daryti pakeitimus(jei nori tai daroma sekancioje eiluteje) abra
  // $GLOBALS['$prisijungimas'] = 99; // galimas ir toks budas kaip prieit prie globalios reiksmes
  return $prisijungimas;
}
