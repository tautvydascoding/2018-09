<?php
define("DB_PAVADINIMAS", "Igl" );
define("DB_VARTOTOJAS", "root" );
define("DB_SLAPTAZODIS", "root" );
define("DB_HOST", "localhost" );


$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS); mysqli_set_charset($prisijungimas, "utf8");//susikuriam kintamaji prisijungimui, kad lengviau butu naudoti;
if ($prisijungimas) {
     // echo "Prisijungei prie DB sekmingai <br />";
} else {
    if ($arRodytiZinutes) {
        // echo "ERROR: Prisijungti nepavyko!!! <br />" . mysqli_connect_error();
    }
  }
// prisijungima patikrinam

function getPrisijungimas(){
  global $prisijungimas;
  return $prisijungimas;
}
getPrisijungimas();


// susirandam straipsnius, funkcija duomenu bazeje iesko straipsnio pagal id.
function getStraipsniai($nr){
$manoSQL = "SELECT * FROM `straipsniai` WHERE `ID` = '$nr'";
$rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
// var_dump($rezultatai);
$rezultataiArray = mysqli_fetch_row($rezultatai);
return $rezultataiArray;
}
// getStraipsniai(1);
// $straipsnis = getStraipsniai();
// echo $straipsnis[1] . $straipsnis[2] . $straipsnis[3]
 ?>
