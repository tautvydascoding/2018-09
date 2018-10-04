<?php
$arRodytiZinutes = true; //$debugMode = 0-2 max3 gali buti
define("DB_PAVADINIMAS", "hospital9");
define("DB_VARTOTOJAS", "root"); //user_name
define("DB_SLAPTAZODIS", "root"); // password
define("DB_HOST", "localhost");

$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);
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
// getPrisijungimas();

// funcija jesko DB gydytojo pagal ID numeri 'id'
// $nr:ieskomo gyditojo numeris
// return aaray su visais rastojo gydytojo duomenemis
//mysqli_query(getPrisijungimas(), $manoSQL); arba vietoi kintamojo $manoSQL gale tiesiog veiksma deti kur yra SELECT....
function getDoctor($nr) {
$manoSQL = "SELECT * FROM doctors WHERE id = $nr"; //vietoi id skaiciaus panaudojam kintamaji $nr kad kur iskvestume tas ir butu gydytojas
$resultai = mysqli_query(getPrisijungimas(), $manoSQL);
// mysqli_fetch_row is rastu duomenu paima viena ir ideda ji i masyva
$resultaiArray = mysqli_fetch_row($resultai);
// var_dump($resultai);
// echo "<br />";
// print_r($resultaiArray);
// var_dump($resultaiArray);
//eilutes testavimui
return $resultaiArray;
}
// $gydytojas = getDoctor(4);
// echo "Mano seimos gydytojas yra ". $gydytojas[1]. " " . $gydytojas[2]; //funcija veikia!!!!! uzkomentojam kad netrugdytu musu paciu darbui
