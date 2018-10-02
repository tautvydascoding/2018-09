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

        <h1> Ziureti i console (inspect element)  </h1>

<?php
echo "<h1> Mokomes matricas</h1>";

// / UZDUOTIS 1.0
// A. sukurti masyvus ir juose aprasyti automobilio charakteristikas
// sukurti masyva "visiAutomobiliai" ir ji ideti tuos 2 masyvus

$auto1 = ["Audi", 220, 5, "rida 25000"];
$auto2 = ["Opel", 200, 4, "rida 20000"];
$auto3 = ["Subaru", 240, 5, "rida 55000"];

 print_r($auto2);
var_dump($auto2);

// matrica
$visiAutomobiliai = [];
$visiAutomobiliai[0] = $auto1;
$visiAutomobiliai[1] = $auto2;
$visiAutomobiliai[2] = $auto3;

echo "<br />  <br />";

print_r($visiAutomobiliai);

// pekeisti visu automobiliu greiti per 30 sumazinti
// test isvesti "visiAutomobiliai"

$visiAutomobiliai[0][1] -= 30;
$visiAutomobiliai[1][1] -= 30;
$visiAutomobiliai[2][1] -= 30;

// arba kitas variantas
// $visiAutomobiliai[0][1] = $visiAutomobiliai[0][1] - 30;
// $visiAutomobiliai[1][1] = $visiAutomobiliai[1][1] - 30;
// $visiAutomobiliai[2][1] = $visiAutomobiliai[2][1] -30;

print_r($visiAutomobiliai);
echo " <br/> </br/>";
// atspausdinti su for ciklu
for ($i=0; $i < 3; $i++) {
  echo  " pavadinimas " . $visiAutomobiliai[$i][0] . "<br />";
  echo " max. greitis " . $visiAutomobiliai[$i][1] . "<br />";
}

// / UZDUOTIS 1.0
// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
// D. sukurti masyva 'visiDarbuotojai'
// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
$darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
$darbuotojas2 = [" Ona", "Onute", 1980, "sekretore"];
$darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
$visiDarbuotojai = [];
$visiDarbuotojai [0] = $darbuotojas1;
$visiDarbuotojai [1] = $darbuotojas2;
$visiDarbuotojai [2] = $darbuotojas3;

print_r($visiDarbuotojai);
// 1.1
for ($i=0; $i < count($visiDarbuotojai[0]); $i++) {
  echo " <h2>" . $visiDarbuotojai[0][1] . "</h2> ";
}
// 1.2
for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
  echo " vardai : " . $visiDarbuotojai[$i][0]. "<br /><br />";
}
// 1.3
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo " darb." . $visiDarbuotojai[$i][0] . "<br />";
  echo " darb." . $visiDarbuotojai[$i][1] . "<br />";
  echo " darb." . $visiDarbuotojai[$i][2] . "<br />";
  echo " darb." . $visiDarbuotojai[$i][3] . "<br /><br />";
}
// 1.4
for ($i=0; $i < count($visiDarbuotojai); $i++) {

for ($j=0; $j < count($visiDarbuotojai[$i]); $j++) {
  echo $visiDarbuotojai[$i][$j] . "<br />";
}
}

// / UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

// A. sukurti 3 masyvus: preke1, preke2, preke3. masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina
// printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
// printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

$preke1 = ["Dviratis", "1.jpg", "Dviratis, sportui namie..", 699];
$preke2 = ["Gele", "2.jpg", "Kambarine gele", 25];
$preke3 = ["Sokoladas", "3.jpg", "Sokoladas su apelsinais ", 3];

$visosPrekes = [];
$visosPrekes[0] = $preke1;
$visosPrekes[1] = $preke2;
$visosPrekes[2] = $preke3;

print_r($visosPrekes);
for ($i=0; $i < count($visosPrekes); $i++) {
  echo  " <h2>" . $visosPrekes[$i][0] . "</h2> ";
  printf("<img src='./foto/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
  echo "<p> " . $visosPrekes[$i][2] . "</p> ";
  echo "<button type='button'>" . $visosPrekes[$i][3] ."</button>";

}





?>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
