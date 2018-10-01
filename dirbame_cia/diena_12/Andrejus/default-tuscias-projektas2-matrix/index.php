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

        <?php
echo "<h1>mokomes matricas</h1>";

// UZDUOTIS
// sukurti du masyvus ir juose aprasyti auto charakteristikas
// sukurti masyva "visiAuto" ir i ji idetituos 2 masyvus

$auto1 = ["Audi", 220, 5.52, "rida 250000"];
$auto2 = ["BMW", 250, 4, "rida 100000"];
$auto3 = ["Pegeout", 210, 6, "rida 200000"];

print_r($auto2);  // isveda kaip pilnai yra masyvas(nepats graziausias variantas) testavimui
echo "<br />";
var_dump($auto1);
echo "<br />";
// matrica

$visiAuto = [];
$visiAuto [0] = $auto1;
$visiAuto [1] = $auto2;
$visiAuto [2] = $auto3;

echo "<br />";

print_r($visiAuto); //testavimui

$visiAuto [0] [1] = $auto1[1] - 50;
$visiAuto [1] [1] = $auto2[1] - 90;
$visiAuto [2] [1] = $auto3[1] - 110;
// $visiAuto [2] [1] -= 50; atmti kiek riekia nuo esamo skaiciaus jo nejeskant

echo "<br />";
print_r($visiAuto);

echo "========================================================================= <br /><br /><br /><br />";
         ?>
<?php
// atspauzdinimas su FOR ciklus
for ($i=0; $i < count($visiAuto); $i++) {
  echo "Pavadinimas " . $visiAuto[$i][0] . "<br />";
  echo "max.greitis " . $visiAuto[$i][1] . "<br />";
}
// su tasku sujungiami sakyniai
echo "======================================================== <br /><br /><br />"

 ?>

<?php
// UZDUOTIS 1.0
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
$darbuotojas2 = ["Ona", "Onute", 1980, "Sekretore"];
$darbuotojas3 = ["Kestas", "Kerta", 2001, "Pavaduotojas"];
$visiDarbuotojai = [$darbuotojas1, $darbuotojas2, $darbuotojas3];

for ($i=0; $i < count($visiDarbuotojai[0]) ; $i++) {
    echo $visiDarbuotojai[0][$i] . " ";
}

echo  "<br />"."<br />"."<br />";

for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
  echo "Vardas" . $visiDarbuotojai[$i][0] . "<br />";
}

echo  "<br />"."<br />"."<br />";

for ($i=0; $i < 4; $i++) {
  echo " " . $visiDarbuotojai[0][$i] . "<br />" ." " . $visiDarbuotojai[1][$i] . "<br />" ." " . $visiDarbuotojai[2][$i] . "<br />" ;
}

echo "<br />";


for ($i=0; $i < count($visiDarbuotojai); $i++) {
    for ($j=0; $j <count($visiDarbuotojai[$i]) ; $j++) {
      echo $visiDarbuotojai[$i][$j];
    }
}
echo "<br />";
 ?>



 <?php
 echo "====================================2uzd==============================";
 // UZDUOTIS 2 --------------
 // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
 // Antraste, img pavadinimas, kaina, prekes aprasymas

 // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
 // B. i masyva visosPrekes, ideti "preke" masyva
 // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina

$preke1 = ["Bike mountain", "photo/mountain.jpg", "Lorem lorem", 1000];
$preke2 = ["Bike jump", "photo/jump.jpg", "LOrem fun", 1500];
$preke3 = ["Bike download", "photo/download.jpg", "ow lorem", 2000];

$visosPrekes = [$preke1, $preke2, $preke3];

for ($i=0; $i <count($visosPrekes) ; $i++) {
  ?>
  <h2><?php echo $visosPrekes[$i][0] ?></h2>
  <img src="<?php echo $visosPrekes[$i][1] ?>" alt="nuotrauka" style = "width: 300px">
  <p><?php echo $visosPrekes[$i][2]; ?></p>
  <button type="button" name="button"><?php echo $visosPrekes[$i][3]; ?></button>

  <?php
}

 // 3 budai nuotraukoms
  // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
  // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
  ?>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
