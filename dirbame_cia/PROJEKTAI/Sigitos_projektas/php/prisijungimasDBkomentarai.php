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

function createKomentarai($vardas, $komentaras){
$manoSQL = "INSERT INTO `komentarai` VALUES (NULL,'$vardas','$komentaras')"; //butinai kintamieji kabutese, taciau viengubose nes jau yra dvigubos;
$arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
// $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
// // if(!$arPavyko && $arRodytiZinutes) trumpasis budas;
// if($arPavyko == false && $arRodytiZinutes == true){
//   echo "ERROR: nepavyko prisijungti" . mysqli_error(getPrisijungimas()); //parodo nurodytu komandu errorus, parodytu kokio klaidos jei nepavyktu.
}
// susirandam straipsnius, funkcija duomenu bazeje iesko straipsnio pagal id.
function getKomentarai($nr){
$manoSQL = "SELECT * FROM `komentarai` WHERE `ID` = $nr";
$rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
$rezultataiArray = mysqli_fetch_row($rezultatai);
return $rezultataiArray;

}

function deletKomentara($nr){
  $manoSQL = "DELETE FROM `komentarai` WHERE 'ID' = '$nr'
             ";
  $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
}
  ?>
