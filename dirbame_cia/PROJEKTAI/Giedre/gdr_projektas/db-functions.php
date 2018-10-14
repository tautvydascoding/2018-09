<?php

//erroru valdymas, atidavus klientui pakeisti i false // $debugMode = 0-2
$arRodytiZinutes = true;

//kintamieji=konstantos, kurie nesikeis, draudziama
define( "DB_PAVADINIMAS", "svaruna_db" );
define( "DB_VARTOTOJAS", "root" );
define( "DB_SLAPTAZODIS", "root" );
define("DB_HOST", "localhost");


$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);
mysqli_set_charset($prisijungimas, "utf8");

function getPrisijungimas() {
    global $prisijungimas;   // 1) liepia naudoti globalu kintamaji. php Scopes kitaip veikia
    // po global negalima pakeisti reiksmiu, tai daryti sekancioje eiluteje
//veikia tik funkcijose. jei nori iseiti i isore -su global

// $GLOBALS['$prisijungimas'] = 99; //tas pats. 2) kaip prieiti prie globalios reiksmes

//logIn patikrinimas
if ($prisijungimas) {
     // echo "Prisijungei prie DB sekmingai <br />";
} else {
    if ($arRodytiZinutes) {
        echo "ERROR: Prisijungti nepavyko!!! <br />" . mysqli_connect_error();
    }
  }
/* 
return: grazinamas prisijungimas prie DB
*/

    return $prisijungimas;
}
getPrisijungimas();

// funkcija, kuri iesko paslaugos pagal id
/* $nr:ieskomos paslaugos numeris
return: grazins masyva, uzpildyta ieskomos paslaugos duomenimis
*/

function getPaslaugos($nr) {
    $manoSQL = "SELECT * FROM `paslaugos` WHERE id = $nr";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL); //esam prisijunge ir ka tada daryti
    //mysqli_query(getPrisijungimas(), $"SELECT * FROM `paslaugos` WHERE id = $nr"); g.b ir taip

    $rezultataiArray = mysqli_fetch_row($rezultatai); //paemimas is duomenu B
    // mysqli_fetch_row is rastu duomenu paima viena ir ideda i masyva.

/*
var_dump($rezultatai);
echo "<br />";
//var_dump($rezultataiArray);// rodo su formatu
print_r($rezultataiArray); 
*/
//cia galima pasirasyti if, jeigu neradome------------------
return $rezultataiArray; //is DB grize paslaugos
}
//$paslauga = getPaslaugos( 3 );