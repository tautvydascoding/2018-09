<!-- // UZDUOTIS
// google CRUD

// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr) -->

<?php
$arRodytiZinutes = true; //d$debugMode = 0-2 ---> paranojos mod'as, kuris rodo pazingsniui kas pavyko kas ivyko, kas padaryta.

// susikuriam kintamuosius, bet su konstanta kuriuos draudziama keisti, nes jie nekinta
    define("DB_PAVADINIMAS", "hospital19" );
    define("DB_VARTOTOJAS", "root" );
    define("DB_SLAPTAZODIS", "root" );
    define("DB_HOST", "localhost" );

$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS); //susikuriam kintamaji prisijungimui, kad lengviau butu naudoti;
if ($prisijungimas) {
// echo "Prisijungei sekmingai <br/>";
} else {
  // echo "ERROR: Prijungti nepavyko" . mysqli_connect_error();
};

function getPrisijungimas(){
  global $prisijungimas; ///kintamasis paims is isores kintamaji su global. Bet po global negalime pakeisti reiksmiu is karto po ispejimo jog imsim is isores kintamaji, taciau galima pakeisti sekancioj eilutej.
  return $prisijungimas;
} //iskvietus sita funkcija ji grazins mums reiksme $prisijungimas prisijungima prie DB;
getPrisijungimas(); //nepaims, nes is funkcijos vidaus nepaimsi kintamojo...




// function getDoctor($nr){
// $manoSQL = "SELECT * FROM doctors WHERE id = '$nr'";
// $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL); //mysqli_query ivykdo tai ka parasom sklaiusteliuose (turejo rast gydytoja)
//   //mysqli_fetch_row - is rastu duomenu paima viena ir pideda ji i masyva.
// $rezultataiArray = mysqli_fetch_row($rezultatai);
// return $rezultataiArray;
// }
// $gydytojas = getDoctor();
function createDoctor($vardas, $pavarde){
$manoSQL = "INSERT INTO `doctors` VALUES (NULL,'$vardas','$pavarde')"; //butinai kintamieji kabutese, taciau viengubos nes jau yra dvigubos;
$arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
// if(!$arPavyko && $arRodytiZinutes) trumpasis budas;
}


function getDoctors(){
  $manoSQL = "SELECT * FROM `doctors`
                       ORDER BY `id`"; //DESC rikiuos nuo naujausio;
  $resultsOBJEKTAS = mysqli_query(getPrisijungimas(), $manoSQL);
  return $resultsOBJEKTAS; //cia ne masyvas!!!!!!!!!!
  // $gydytojasArray = mysqli_fetch_row($resultsOBJEKTAS);
}
$VISIgydytojai = getDoctors(5);

$gydytojasArray = mysqli_fetch_assoc($VISIgydytojai);
//mysqli_fetch_assoc - paima viena eilute DB ir pavercia ARRAY, ir i [ ] rasyti stulpelio varda ['name'], tik ne skaicius!!
while ($gydytojasArray){
  echo $gydytojasArray['name'] .  $gydytojasArray['lname'] . "<br/>";
  $gydytojasArray = mysqli_fetch_assoc($VISIgydytojai); //tikrina ar array pilnas ir kai jau buna tuscias nustos veikes ciklas; ims duomenis kol baigsis.
}
