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
        echo "<h1> mokomos matricas  </h1>";
        // UZDUOTIS 2 --------------
        // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
        // Antraste, img pavadinimas, kaina, prekes aprasymas

        // A. sukurti 3 masyvus preke1 preke2 preke3: Antraste, img pavadinimas, prekes aprasymas, kaina
        // B. i masyva visosPrekes, ideti "preke" masyva
        // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina


        $preke1 = ["apple", "apple.png", 800, "greitai genda"];
        $preke2 = ["nokia", "nokia.jpg", 5, "niekada negenda"];
        $preke3 = ["samsung", "samsung.jpg", 50000, "kartais sugenda"];
          print_r ($preke1);
            echo "<br />";
            echo "<br />";
            echo "<br />";
            $visosPrekes = [];
            $visosPrekes[0] = $preke1;
            $visosPrekes[1] = $preke2;
            $visosPrekes[2] = $preke3;
        for ($i=0; $i < 3; $i++) {
          echo "<h2>  ".$visosPrekes[$i][0]. "</h2>";
          echo "<p>".$visosPrekes[$i][3]. "</p>";
          echo "<button>".$visosPrekes[$i][2]. "</button>". "<br>";
          printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        }

          // ============matricos==============

          // $visiAutomobiliai = [];
          // $visiAutomobiliai[0] = $auto1;
          // $visiAutomobiliai[1] = $auto2;
          // $visiAutomobiliai[2] = $auto3;
          //
          // // print_r($visiAutomobiliai);
          // // maziname greiti -30
          // $visiAutomobiliai[0][1] -= 30;
          // $visiAutomobiliai[1][1] -= 30;
          // $visiAutomobiliai[2][1] -= 30;
          // // print_r($visiAutomobiliai);
          // echo "<br />";
          // echo "<br />";
          // // atspausdinam su for ciklu
          // for ($i=0; $i < 3; $i++) {
          //   echo "auto pavad: ".$visiAutomobiliai[$i][0]. "<br>";
          //   echo "max greitis: ".$visiAutomobiliai[$i][1]. "<br>";
          // }
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
          // $darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
          // $darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
          // $darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
          // // print_r($darbuotojas1);
          //
          // $visiDarbuotojai = [];
          // $visiDarbuotojai[0] = $darbuotojas1;
          // $visiDarbuotojai[1] = $darbuotojas2;
          // $visiDarbuotojai[2] = $darbuotojas3;
          // print_r($visiDarbuotojai);
          // echo "<br />";
          // echo "<br />";
          // for ($i=0; $i < count($visiDarbuotojai[0]); $i++) {
          //   echo "<h2>" . $visiDarbuotojai[0][$i] . "</h2>";
          // }
          // echo "<br />";
          // for ($i=0; $i < 3; $i++) {
          //   echo "drbuotoju vardai: ".$visiDarbuotojai[$i][0]. "<br>";
          // }
          // echo "<br />";
          // for ($i=0; $i < 4; $i++) {
          //   echo "1 darbuotojas: ".$visiDarbuotojai[0][$i]. "<br>";
          //   echo "2 darbuotojas: ".$visiDarbuotojai[1][$i]. "<br>";
          //   echo "3 darbuotojas: ".$visiDarbuotojai[2][$i]. "<br>";
          // }
          // echo "<br />";
          // for ($i=0; $i < count($visiDarbuotojai[0]); $i++) {
          //   for ($j=0; $j < count($visiDarbuotojai[0]); $j++) {
          //     echo "visi darbuotojai".$visiDarbuotojai[$j][$i]. "<br>";
          //   }
          // }

        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>