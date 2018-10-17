<?php

$arRodytZinutes = true; //// $debugMode 2
///



//////////////////////////////////
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

function getStraipsnis($nr){
  $manoSQL = "SELECT * FROM `straipsniai` WHERE id = '$nr'";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
  //mysqli_fetch_row iš rastų duomenų paima viena ir ideda į masyvą

  $rezultataiArray = mysqli_fetch_row($rezultatai);
  // var_dump($rezultatai);
  // echo "<br /><br />";
  // var_dump($rezultataiArray);
  // echo "<br /><br />";
  // print_r($rezultataiArray);
  return $rezultataiArray;
}

//////////////////////////////////////////////////////////////////

function getPaveiksliukai($nr){
  $manoSQL = "SELECT * FROM `paveiksliukai` WHERE id = '$nr'";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
  //mysqli_fetch_row iš rastų duomenų paima viena ir ideda į masyvą

  $rezultataiArray = mysqli_fetch_row($rezultatai);
  // var_dump($rezultatai);
  // echo "<br /><br />";
  // var_dump($rezultataiArray);
  // echo "<br /><br />";
  // print_r($rezultataiArray);
  return $rezultataiArray;
}

//////////////////////////////////////////////////////////////////////////////////
function getPatarimai($nr){
  $manoSQL = "SELECT * FROM `patarimai` WHERE id = '$nr'";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
  //mysqli_fetch_row iš rastų duomenų paima viena ir ideda į masyvą

  $rezultataiArray = mysqli_fetch_row($rezultatai);
  // var_dump($rezultatai);
  // echo "<br /><br />";
  // var_dump($rezultataiArray);
  // echo "<br /><br />";
  // print_r($rezultataiArray);
  return $rezultataiArray;
}

//////////////////////////////////////////////////////////////////////////////

function getFoto($nr){
  $manoSQL = "SELECT * FROM `foto` WHERE id = '$nr'";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
  //mysqli_fetch_row iš rastų duomenų paima viena ir ideda į masyvą

  $rezultataiArray = mysqli_fetch_row($rezultatai);
  // var_dump($rezultatai);
  // echo "<br /><br />";
  // var_dump($rezultataiArray);
  // echo "<br /><br />";
  // print_r($rezultataiArray);
  return $rezultataiArray;
}
///////////////////////////////////////////////////////////////////////////////




?>
