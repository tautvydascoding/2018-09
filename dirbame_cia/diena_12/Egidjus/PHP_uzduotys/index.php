<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS vissade zemiau -->
        <link rel="stylesheet" href="css/style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <h1>Ziureti i console   </h1>
<?php
  echo "<h1>Mokomės matricas</h1>";
// sukurti du masyvus ir juose aprašyti automobilio charakteristikas
//sukurti masyva ir į jį įdėti  tuos du masyvus

$auto1 = ["Audi", 220, 5, "rida 250000"];
$auto2 = ["BMW", 250, 5, "rida 250000"];
$auto3 = ["Seat", 220, 5, "rida 250000"];
print_r($auto2);
var_dump($auto1);

//matrica
echo "<br />";
$visiAutomobiliai = [];
$visiAutomobiliai[0] = $auto1;
$visiAutomobiliai[1] = $auto2;
$visiAutomobiliai [2] = $auto3;
print_r($visiAutomobiliai);

echo "<br /><br />";

$visiAutomobiliai[0][1] -=30;
$visiAutomobiliai[1][1] -=30;
$visiAutomobiliai[2][1] -=30;

print_r($visiAutomobiliai[0]);
print_r($visiAutomobiliai[1]);
print_r($visiAutomobiliai[2]);
echo "<br /><br />";

for ($i=0; $i < 3 ; $i++) {
  echo "pavadinimas" ." " . $visiAutomobiliai[$i][0] . "<br />";
  echo "max. greitis" ." " . $visiAutomobiliai[$i][1] . "<br />";
}

echo "<br /><br />";

$darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
$darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
$darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];

$visiDarbuotojai = [];

$visiDarbuotojai[0] = $darbuotojas1;
$visiDarbuotojai[1] = $darbuotojas2;
$visiDarbuotojai[2] = $darbuotojas3;

print_r($visiDarbuotojai);
echo "<br /> <br />";
for ($i=0; $i < 3; $i++) {
  echo "darbuotoju vardai" . " " . $visiDarbuotojai[$i][0] . "<br />";
}

echo "<br /><br />";

for ($i=0; $i < count($visiDarbuotojai[0]) ; $i++) {
  echo " " . $visiDarbuotojai[0][$i];
}
//1.3 uzduotis
echo "<br /><br />";
  //for ($i=0; $i < 4 ; $i++) {
  //  echo "darbuotojas : " . " " . $visiDarbuotojai[$i][0] . " " . $visiDarbuotojai[$i][1] . //" " . $visiDarbuotojai[$i][2] . " " . $visiDarbuotojai[$i][3] . " " . "<br />";
  //}
//1.4 uzduotis(nebaigta)
//echo "<br /><br />";
//for ($i=0; $i < count($visiDarbuotojai[0]) ; $i++) {
  //  for ($y=0; $y < count($darbuotojas1[0]) ; $y++) {
    //  echo $darbuotojai = [$i][$y];

    //}
//}
echo "<br /><br />";
$preke1 = ["Kamuolys", "Kamuolys.png", 10, "trumpas aprašymas.."];
$preke2 = ["kompiuteris", "kompiuteris.jpg", 500, "trumpas aprašymas"];
$preke3 = ["krepšys", "krepsys.jpg", 25, "trumpas aprašymas"];

$visosPrekes = [];
$visosPrekes[0] = $preke1;
$visosPrekes[1] = $preke2;
$visosPrekes[2] = $preke3;

print_r($visosPrekes);

echo "<br /><br />";

for ($i=0; $i < count($visosPrekes) ; $i++) {
  echo "<h2>" . $visosPrekes[$i][0] . "</h2>" ;
  echo "<p>" . $visosPrekes[$i][3] . "</p>" ;
  echo "<button>" . $visosPrekes[$i][2] . "</button>" ;
  print_r ("<img src='C:/Users/egidi/Desktop/foto_laikina/' . $visosPrekes[$i][1] . alt='prekės paveikslėlis' />");
}


?>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
