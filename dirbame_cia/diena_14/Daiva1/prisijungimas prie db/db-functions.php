<?php

  $arRodytiZinute = true;  // $debugMode = 0-2
// KONSTANTOS

define("DB_PAVADINIMAS","hospital19");
define("DB_VARTOTOJAS", "root");
define("DB_SLAPTAZODIS", "root");
define("DB_HOST", "localhost");

$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

if ($prisijungimas){
  echo "Prisijungei prie DB sekmingai <br />";
} else {
  if($arRodytiZinute){
      echo "EROR: Prisijungti nepavyko!!!" . mysql_connect_error();
}
}
/*
return: grazinamas prisijungimas i DB
*/
function getPrisijungimas(){
  global $prisijungimas;
  return $prisijungimas;
}

getPrisijungimas();
/*
funkcija DB iesko gydytojo pagal 'id'
$nr: ieskomasgydytojo nr
returnas grazins masyva rastojo gydytojo duomenis
*/

function getDoctor($nr){
  $manoSQL = "SELECT * FROM doctors WHERE id = 2";
  $rezultatai = mysqli_query(getPrisijungimas(),   $manoSQL);
//mysqli_fetch_row is rastu duomenu paima viena gydytoja ir ideda ji i masyva

  $rezultataiArray = mysqli_fetch_row($resultatai);
  return $rezultataiArray;

}
//var_dump ($rezultatai);
//echo "<br /> <br/";
//print_r($rezultataiArray);

$gydytojas = getDoctor(2);
echo "mano seimos gydytoja: " . $gydytojas[1] . $gydytojas[2];
