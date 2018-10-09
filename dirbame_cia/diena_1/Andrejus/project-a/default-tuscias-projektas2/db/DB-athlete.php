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
// getPrisijungimas();

// funcija jesko DB gydytojo pagal ID numeri 'id'
// $nr:ieskomo gyditojo numeris
// return aaray su visais rastojo gydytojo duomenemis
//mysqli_query(getPrisijungimas(), $manoSQL); arba vietoi kintamojo $manoSQL gale tiesiog veiksma deti kur yra SELECT....
function getAthlete($nr) {
$manoSQL = "SELECT * FROM athlete WHERE id = $nr"; //vietoi id skaiciaus panaudojam kintamaji $nr kad kur iskvestume tas ir butu gydytojas
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

function createAthlete($name, $lname, $age, $smdiscrp, $carrier, $smphoto, $photo) {
  $manoSQL = "INSERT INTO `athlete` VALUES(NULL, '$name', '$lname', '$age', '$smdiscrp', '$carrier', '$smphoto', '$photo')";
  mysqli_query(getPrisijungimas(), $manoSQL);
} //paprastas variantas NOTE!!!!!======================================

// createDoctor("Paulius", "Pauliukas");
// createDoctor("Smilte", "Petraite"); //kiek perkrausim localhost kur yra sis failas suveiks idejimas i DB

//ilgesnis variantas NOTE!!!!===================================
function createDoctorIlgesne($name, $lname, $age, $smdiscrp, $carrier, $smphoto, $photo) {
  //saugumas: uzkuodoja spec simbolius "" '' \n \t <>;
  $name = mysqli_real_escape_string(getPrisijungimas(), $name);
  $lname = mysqli_real_escape_string(getPrisijungimas(), $lname);
  $age = mysqli_real_escape_string(getPrisijungimas(), $age);
  $smdiscrp = mysqli_real_escape_string(getPrisijungimas(), $smdiscrp);
  $carrier = mysqli_real_escape_string(getPrisijungimas(), $carrier);
  $smphoto = mysqli_real_escape_string(getPrisijungimas(), $smphoto);
  $photo = mysqli_real_escape_string(getPrisijungimas(), $photo);
  $manoSQL = "INSERT INTO `athlete` VALUES(NULL, '$name', '$lname', '$age', '$smdiscrp', '$carrier', '$smphoto', '$photo')";

  $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($arPavyko == false && $arRodytiZinutes == true) { //(!$arPavyko && $arRodytiZinutes) jei parasai if su sauktuku tikrini atbuline reiksme.
    echo "ERROR: nepavyko sukurti gydytojo!!!! <br />".mysqli_error(getPrisijungimas()); // isvardina net kur klaida yra
  }
}
// createDoctorIlgesne("test", "test2");

// delete // NOTE:
//$nr - gydytojo id, kuris bus istrintas is DB
function deleteAthlete($nr) {
  $nr = mysqli_real_escape_string(getPrisijungimas(), $nr); // kad uzduodot $nr
  $manoSQL = "DELETE FROM `athlete` WHERE id = '$nr'";
  $arPavyko = mysqli_Query(getPrisijungimas(), $manoSQL);
  if ($arPavyko == false && $arRodytiZinutes == true) { //(!$arPavyko && $arRodytiZinutes) jei parasai if su sauktuku tikrini atbuline reiksme.
    echo "ERROR: nepavyko sukurti gydytojo!!!! <br/>".mysqli_error(getPrisijungimas()); // isvardina net kur klaida yra
  }
}
// deleteDoctor(17);
// deleteDoctor(18);
// deleteDoctor(14);
// deleteDoctor(15);

// NOTE: updateDoctor funkcija

//suranda gydytoja pagal $nr ( koregojamo gydytojo id), $vardas - naujas vardas, $pavarde(nauja pavarde);

function editDoctor($nr, $name, $lname, $age, $smdiscrp, $carrier, $smphoto, $photo) {
  $nr = mysqli_real_escape_string(getPrisijungimas(), $nr);
  $name = mysqli_real_escape_string(getPrisijungimas(), $name);
  $lname = mysqli_real_escape_string(getPrisijungimas(), $lname);
  $age = mysqli_real_escape_string(getPrisijungimas(), $age);
  $smdiscrp = mysqli_real_escape_string(getPrisijungimas(), $smdiscrp);
  $carrier = mysqli_real_escape_string(getPrisijungimas(), $carrier);
  $smphoto = mysqli_real_escape_string(getPrisijungimas(), $smphoto);
  $photo = mysqli_real_escape_string(getPrisijungimas(), $photo);
  $manoSQL = "UPDATE `athlete` SET Name = '$name', LName = '$lname', Age = '$age', SmDiscrp = '$smdiscrp', Carrier = '$carrier', SmPhoto = '$smphoto', Photo = '$photo' WHERE id = '$nr'";
  mysqli_query(getPrisijungimas(), $manoSQL);
}
// editDoctor(16, "Onute", "Onetiene");


// // NOTE: getDoctors iskvesti visus gydytojus

// grazina is duomenu bazes visus arba nurodyta skaiciu gydytoju
//kiekis - kiek paimti gydytoju (nebutinas kintamasis)(jei nenurodomas kiekis paimama visus daktarus)

function getAthletes($kiekis){
  $kiekis = mysqli_real_escape_string(getPrisijungimas(), $kiekis);
  $manoSQL = "Select * FROM athlete ORDER BY id DESC LIMIT $kiekis";
  $resultsOBJEKTAS = mysqli_query(getPrisijungimas(), $manoSQL);
  return $resultsOBJEKTAS; //Cia ne masyvas
}
// NOTE: PVZ:
// $visiGydytojaiNeMasyvas = getDoctors(5);// jei yra skaiciu tiek ir daktaru grazins.
// //// NOTE: mysqli_fetch_assoc - paima viena eilute DB ir pavercia i array
// $gydytojasArray = mysqli_fetch_assoc($visiGydytojaiNeMasyvas);
// while ($gydytojasArray) { // tikrina ar array pilnas
//   echo $gydytojasArray['name'].$gydytojasArray['lname']."<br />";
//   $gydytojasArray = mysqli_fetch_assoc($visiGydytojaiNeMasyvas);
// }
// assoc komanta paima stalciu pavdinimus kaip id name lname ir pan.
