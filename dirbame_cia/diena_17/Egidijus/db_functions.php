<!-- <?php echo "Viskas veikia!" ?> -->
<!-- <?php
$vardas = "Tomas";
echo "<h1>Mokomės DB su PHP</h1>";

 ?>
<h2>Straipsnio autorius <?php echo $vardas; ?></h2> -->

<?php

$arRodytZinutes = true; //// $debugMode 2
//

define("DB_PAVADINIMAS", "hospital19");
define("DB_VARTOTOJAS", "root");
define("DB_SLAPTAZODIS", "root");
define("DB_HOST", "localhost");

$prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS );


if ($prisijungimas) {
  echo "<h1>Prisijungta sekmingai!</h1>";
} else {
  if ($arRodytZinutes)
  echo "ERROR:: Prisijungti nepavyko " . mysqli_connect_error();
}

/*
f-ja DB ieško gydytojo pagal 'id'
return : grazinimas prisijungimas prie DB
*/

function getPrisijungimas(){
  global $prisijungimas;
  // $GLOBALS['$prisijungimas'] = 99;
  return $prisijungimas;
}
getPrisijungimas();

/*
  $nr: ieskomo gydytojo numeris
  return: array su visais rastojo gydytojo duomenimis

*/
function getDoctor($nr){
  $manoSQL = "SELECT * FROM `doctors` WHERE id = 5";
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

//$gydytojas = getDoctor(5);
//echo "mano šeimos gydytojas: " . $gydytojas[1] . " " . $gydytojas[2] ;



 ?>
