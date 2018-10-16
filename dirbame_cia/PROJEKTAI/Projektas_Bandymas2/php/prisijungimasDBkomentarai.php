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
$manoSQL = "INSERT INTO `Komentarai` VALUES (NULL,'$vardas','$komentaras')"; //butinai kintamieji kabutese, taciau viengubose nes jau yra dvigubos;
$arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
// $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
// // if(!$arPavyko && $arRodytiZinutes) trumpasis budas;
// if($arPavyko == false && $arRodytiZinutes == true){
//   echo "ERROR: nepavyko prisijungti" . mysqli_error(getPrisijungimas()); //parodo nurodytu komandu errorus, parodytu kokio klaidos jei nepavyktu.
}
// susirandam straipsnius, funkcija duomenu bazeje iesko straipsnio pagal id.
function getKomentarai($nr){
$manoSQL = "SELECT * FROM `Komentarai` WHERE `ID` = $nr";
$rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
$rezultataiArray = mysqli_fetch_row($rezultatai);
return $rezultataiArray;
}

  ?>
<!-- // var_dump($rezultatai);
 // $rezultataiArray = mysqli_fetch_row($rezultatai);
 // return $rezultataiArray;
 // $rezultataiArray = mysqli_fetch_assoc($rezultatai);

// while ($rezultataiArray){
//   echo $rezultataiArray['Vardas'] . $rezultataiArray['Komentaras'] . "<br/>";
//   $rezultataiArray = mysqli_fetch_assoc($visiKometarai)};
// $visiKometarai = getKomentarai();
// $rezultataiArray = mysqli_fetch_assoc($visiKometarai); -->


    <!-- // $gydytojasArray = mysqli_fetch_row($resultsOBJEKTAS);
  }
  $VISIgydytojai = getDoctors(5);

  $gydytojasArray = mysqli_fetch_assoc($VISIgydytojai);
  //mysqli_fetch_assoc - paima viena eilute DB ir pavercia ARRAY, ir i [ ] rasyti stulpelio varda ['name'], tik ne skaicius!!
  while ($gydytojasArray){
    echo $gydytojasArray['name'] . $gydytojasArray['lname'] . "<br/>";
    $gydytojasArray = mysqli_fetch_assoc($VISIgydytojai); //tikrina ar array pilnas ir kai jau buna tuscias nustos veikes ciklas; ims duomenis kol baigsis.
  } -->
