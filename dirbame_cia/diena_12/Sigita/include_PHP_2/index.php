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

        <h1> Masyvas masyve  </h1>

<?php
echo "<h1> Mokomes matricas</h1>";
//uzduotis 2 masyvus ir juose aprasyt automobilio charakteristikas;
//sukurti masyva "visiAutomobiliai" ir i ji ideti tuos 2 masyvus;
$auto1 = ["Audi", 220, 5, "rida 250000"];
$auto2 = ["Opel", 250, 4, "rida 300000"];
$auto3 = ["BMW", 260, 4, "rida 150000"];
print_r($auto1); //testavimui
var_dump($auto1);
echo ("<br/>");
//testavimo komanda, geresne, nes isveda parametru tipus;
//matrica=========>
$visiAutomobiliai = [];
$visiAutomobiliai[0] = $auto1;
$visiAutomobiliai[1] = $auto2;
$visiAutomobiliai[2] = $auto3;
print_r($visiAutomobiliai);
echo ("<br/>");
$visiAutomobiliai[0][1] = $auto1[1] - 30; //arba rankiniu budu keisti 220 sumazinti 30 ir irasyti ta mazesni skaiciu. arba $visiAutomobiliai[0][2] -= 30;
$visiAutomobiliai[1][1] = $auto2[1] - 30;
$visiAutomobiliai[2][1] = $auto3[1] - 30;
print_r($visiAutomobiliai);
echo ("<br/>");
echo ("<br/>");
///atspausdinsim su for ciklu
for ($i=0; $i < count($visiAutomobiliai); $i++) {
echo "pavadinimas " . $visiAutomobiliai[$i][0] . "<br/>"; ///TASKA sujungia
echo "max.greitis" . $visiAutomobiliai[$i][1] . "<br/>";
}
 ?>
 <!-- // =================svarbus patarimai===================:
 // ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
 // FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
 // matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
 // matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
 // matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
 // matricos ilgis daznai skiriasi nuo plocio.
 //  pvz.:
  // for ( i < eiluciuSkaicius)
  //    for ( k < stulpeliuSkaicius)
  // =================// =================// ======== -->



      <!-- // UZDUOTIS 1.0
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

  -->

        <!-- // 3 budai nuotraukoms
         // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
         // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); -->
<?php
$darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
$darbuotojas2 =["Ona", "Onute", 1980, "sekretore"];
$darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
$visiDarbuotojai = [$darbuotojas1, $darbuotojas2, $darbuotojas3];
print_r($visiDarbuotojai);
echo "<br/";
echo "===============================================================";
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
for ($i=0; $i < count($visiDarbuotojai[0]) ; $i++) {
  echo "pirmas darbuotojas" . $visiDarbuotojai[0][$i] . "<br/";
  // echo . "darbuotoju vardai" . $visiDarbuotojai[$i][0] . "<br/";
}
echo "==================================================================";
print_r($visiDarbuotojai);
echo "==================================================================";
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo "visi vardai" . $visiDarbuotojai[$i][0];
}

echo "<br/";
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo "pirmas darbuotojas" . $visiDarbuotojai[0][$i] . "<br/";
  echo "antras darbuotojas" . $visiDarbuotojai[1][$i] . "<br/";
  echo "trecias darbuotojas" . $visiDarbuotojai[2][$i] . "<br/";
}
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  for ($j=0; $j < count($visiDarbuotojai[$i]); $j++) {
  echo $visiDarbuotojai[$i][$j];
  }
}
?>

<!-- // UZDUOTIS 2
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

// A. sukurti 3 masyvus preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina -->
<?php
$preke1 = ["Knyga", "gallery/nuotrauka1.jpg", "Aprasymas1 labai labai ilgas", 999 ];
$preke2 = ["Puodelis", "gallery/nuotrauka2.jpg", "Aprasymas2 labai labai ilgas", 899];
$preke3 = ["Saukstelis", "gallery/nuotrauka3.jpg", "Aprasymas3 labai labai ilgas", 799];
$visoPprekes = [$preke1, $preke2, $preke3];

  for ($i=0; $i < count($visoPprekes); $i++) {
?>
<h2> <?php echo $visoPprekes[$i][0] ?>  </h2>
<img src="<?php echo $visoPprekes[$i][1] ?>" alt="nuotraukos" style="width:250px; border: solid 5px blue;">
<p> <?php echo $visoPprekes[$i][2] ?></p>
<button type="button" name="button"> <?php echo $visoPprekes[$i][3] ?></button>
<?php
}
 ?>
 <!-- // 3 budai nuotraukoms
  // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
  // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); -->


<!-- Optional JavaScript
jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
