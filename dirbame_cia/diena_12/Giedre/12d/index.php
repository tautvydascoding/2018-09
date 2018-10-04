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
    echo "<h1> mokomes matricas</h1>";
    // uzd
    // sukurti 2 masyvus ir juose aprasyti automobilio charakteristikas
    //sukurti masyva "visiAutomobiliai" ir i ji ideti tuos du masyvus

$auto1 = ["audi", 220, 5, "rida 25000"];
$auto2 = ["opel", 230, 4.5, "rida 10000"];
$auto3 = ["subaru", 210, 3, "rida 3000000"];
print_r($auto2); //aisku tik programuotojui, testavimui
echo "<br>";
var_dump($auto2); //sita geresne, isveda parametru tipus


// matricos = masyvas 
$visiAutomobiliai = [];
$visiAutomobiliai[0] = $auto1; //= $auto1[]; be sklaiusteliu [] !!!!
$visiAutomobiliai[1] = $auto2; //= $auto1[]; be sklaiusteliu [] !!!!
$visiAutomobiliai[2] = $auto3; //= $auto1[]; be sklaiusteliu [] !!!!
echo "<br /> <br />";
print_r($visiAutomobiliai);

//pakeisti visu automobiliu greiti -30

$visiAutomobiliai[0][1] -= 30;
$visiAutomobiliai[1][1] -= 30;
$visiAutomobiliai[2][1] -= 30;
echo "<br /> <br />";
print_r($visiAutomobiliai);
echo "<br /> <br />";


// spausdinti su for ciklu

for ($i=0; $i < count($visiAutomobiliai); $i++) { 
    echo "pavadinimas " . $visiAutomobiliai[$i][0] . "<br />";
    echo "max.greitis " . $visiAutomobiliai[$i][1] . "<br /> <br />";
}



// UZDUOTIS 1.0
$visiDarduotojai = [];
$darbuotojas1 = [];
$darbuotojas2 = [];
$darbuotojas3 = [];


$darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
$visiDarduotojai[0] = $darbuotojas1;

$darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
$visiDarduotojai[1] = $darbuotojas2;

$darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
$visiDarduotojai[2] = $darbuotojas3;

print_r($visiDarduotojai); //test visada rekomenduojama

// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)

for ($i=0; $i < count($visiDarduotojai[0]); $i++) { 
    echo $visiDarduotojai[0][$i] . "<br />";
}

// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
echo "<br />" . "UZDUOTIS 1.2" . "<br />";
for ($i=0; $i < count($visiDarduotojai); $i++) { 
    echo $visiDarduotojai[$i][0] . "<br />";
}

// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
echo "<br />" . "UZDUOTIS 1.3" . "<br />";
for ($i=0; $i < count($visiDarduotojai); $i++) { 
    // print_r($visiDarduotojai[$i]) . "<br />";
    echo $visiDarduotojai[$i][0] . " ";
    echo $visiDarduotojai[$i][1] . " ";
    echo $visiDarduotojai[$i][2] . " ";
    echo $visiDarduotojai[$i][3] . " ";
    echo "<br />";
}

// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus
echo "<br />" . "UZDUOTIS 1.4" . "<br />";
for ($i=0; $i < count($visiDarduotojai); $i++) { 
    for ($j=0; $j < count($visiDarduotojai[$i]); $j++) { 
       echo $visiDarduotojai[$i][$j] . " ";
    }
    echo "<br />";
}

// UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // B. i masyva visosPrekes, ideti "preke" masyva
    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina

       // 3 budai nuotraukoms
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
    echo "<br />" . "UZDUOTIS 2" . "<br />";

    $preke1 = ["pomidoras", "logo1.jpg", "raudonas_pomidoras", 10];
    $preke2 = ["agurkas", "logo1.jpg", "zalias_agurkas", 20];
    $preke3 = ["obuolys", "logo1.jpg", "geltonas_obuolys", 30];
    $visosPrekes = [$preke1, $preke2, $preke3];

    echo '<div class="container"> <div class="row">';
         
for ($i=0; $i < count($visosPrekes); $i++) { 

    echo '<div class="col-md-4"><h2>' . $visosPrekes[$i][0] . '</h2>' ;
    printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />"); 
    echo '<p>' . $visosPrekes[$i][2] . '</p>' . '<h2>' . $visosPrekes[$i][3] . '</h2>
    </div>';
}
echo " </div></div> ";

echo "<br />";





?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
