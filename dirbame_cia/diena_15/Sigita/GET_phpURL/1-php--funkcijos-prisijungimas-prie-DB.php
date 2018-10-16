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
echo "Prisijungei sekmingai <br/>";
} else {
  echo "ERROR: Prijungti nepavyko" . mysqli_connect_error();
};
//po else dar galima irasyti echo "ERror:" . mysqli_connect_error(); tada mes klaida kodel nepavyko prisijungti;
//TAI FUNKCIJA KURI ... iskvietus sita funkcija ji grazins mums reiksme $prisijungimas prisijungima prie DB;
function getPrisijungimas(){
  global $prisijungimas; ///kintamasis paims is isores kintamaji su global. Bet po global negalime pakeisti reiksmiu is karto po ispejimo jog imsim is isores kintamaji, taciau galima pakeisti sekancioj eilutej.

// $GLOBALS['$Prisijungimas'] = 99; //galima is su situo zodeliu prieiti prie globaliu kintamuju. PHP su global, js su window.
  return $prisijungimas;
} //iskvietus sita funkcija ji grazins mums reiksme $prisijungimas prisijungima prie DB;
getPrisijungimas(); //nepaims, nes is funkcijos vidaus nepaimsi kintamojo...

//TAI FUNKCIJA KURI duomenu bazeje ieskos gydytojo pagal ID"
//return: array su visais ratsais gydytoju duomenimis;
function getDoctor($nr){
  $manoSQL = "SELECT * FROM doctors WHERE id = $nr";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL); //mysqli_query ivykdo tai ka parasom sklaiusteliuose (turejo rast gydytoja)
  var_dump($rezultatai); //atspausdina viska
  echo "<br></br/>";
  //mysqli_fetch_row - is rastu duomenu paima viena ir pideda ji i masyva.
  $rezultataiArray = mysqli_fetch_row($rezultatai);
  var_dump($rezultataiArray); //arba print_r($rezultataiArray)
  echo "<br></br/>";
  return $rezultataiArray;
}
$gydytojas = getDoctor(2);
echo $gydytojas[1] . $gydytojas[2];
