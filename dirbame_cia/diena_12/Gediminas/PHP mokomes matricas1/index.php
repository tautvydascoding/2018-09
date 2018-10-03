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

        <h1> Mokomes matricos  </h1>


        <?php
        //sukurti 2 masyvus ir juose aprasyti automobilio charakteristikas
        //sukurti masyva "visiAutomobiliai" ir ji ideti ituos 2 masyvus
        $auto1 = ["Audi", 220, 5, "rdida 25000"];
        $auto2 = ["BMW", 240, 4, "rdida 26000"];
        $auto3 = ["Opel", 150, 6, "rdida 300000"];
         print_r ($auto3); // Sitas budas geriausias testavimui
         var_dump($auto3); // Testavimui bet isveda parametru pavadinimus ir ji geresne

         //matrica kai masyve masyvas
         $visiAutomobiliai =[];
         $visiAutomobiliai [0] = $auto1;
         $visiAutomobiliai [1] = $auto2;
         $visiAutomobiliai [2] = $auto3;
         echo "<br /  >";

         print_r($visiAutomobiliai);

         //pakeisti visu automobiliu greiti per 30 sumazinti
         // trys pavizdziai kaip galima pakeisti zemiau
         $visiAutomobiliai[0][1] =190;  // is bedos variantas kaip keisti
         $visiAutomobiliai[1][1] = $visiAutomobiliai[1][1] - 30;  //kitas variantas ilgesnis
         $visiAutomobiliai[2][1] -=30; // geresnis variantas kaip pakeisti
         echo "<br /  >";

         print_r($visiAutomobiliai);

         echo "<br /  ><br /  >";
         //atspauzdinsime su for ciklu
         for ($i=0; $i < 3 ; $i++) {
           // code...
           echo "Pavadinimas".$visiAutomobiliai [$i][0] . "<br>";
            echo "max.greitis".$visiAutomobiliai [$i][1]."<br>";
         }
         ?>
         <?php
         // UZDUOTIS 1.0
             // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
             $darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
             // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
             $darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
             // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
             $darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
             // D. sukurti masyva 'visiDarbuotojai'
             $visiDarbuotojai = [];
             // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
             // UZDUOTIS 1.1
             $visiDarbuotojai [0] = $darbuotojas1;
             $visiDarbuotojai [1] = $darbuotojas2;
             $visiDarbuotojai [2] = $darbuotojas3;
             // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
             for ($i=0; $i <count ($visiDarbuotojai[0]) ; $i++) {
               // code...
               echo "Darbuotojas".$visiDarbuotojai [0][$i] . "<br>";
             }
             // UZDUOTIS 1.2
             // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
             for ($i=0; $i <3 ; $i++) {
               // code...
               echo "Vardai".$visiDarbuotojai [$i][0] . "<br><br>";
             }
             // UZDUOTIS 1.3
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
             for ($i=0; $i <count ($visiDarbuotojai) ; $i++) {
               // code...
               echo "Dar".$visiDarbuotojai [$i][0]. "<br>";
               echo "Dar".$visiDarbuotojai [$i][1]. "<br>";
               echo "Dar".$visiDarbuotojai [$i][2]. "<br>";
               echo "Dar".$visiDarbuotojai [$i][3]. "<br><br>";

             }
             // UZDUOTIS 1.4
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
             for ($i = 0 ; $i <count ($visiDarbuotojai) ; $i++){
               for ($j = 0 ; $j <count ($visiDarbuotojai[$i]) ; $j++){
                  echo   $visiDarbuotojai [$i][$j];
               }
             }

       ?>

       <?php
       // UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // 3 masyvys  Antraste, img pavadinimas, kaina, prekes aprasymas
      $preke1 = ["Vaisius", "1.jpg", 25, "Labai skanus vaisius "];
      $preke2 = ["Duona", "2.jpg", 10, "Labai gardi duona, kepta namuose "];
      $preke3 = ["Gerimas", "3.jpg", 32, "Gazuotas gaivinantis gerimas "];
    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
      $visosPrekes = [];
    // B. i masyva visosPrekes, ideti "preke" masyva
      $visosPrekes [0] = $preke1;
      $visosPrekes [1] = $preke2;
      $visosPrekes [2] = $preke3;


    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina
    for ($i=0; $i <count ($visosPrekes) ; $i++) {
      // code...
      echo "<h2>". $visosPrekes[$i][0] . "</h2>";
      echo "<p>". $visosPrekes[$i][3] . "</p>";
      printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
      echo "<button type= value='Reset'>" .$visosPrekes[$i][2]."</button>";

    }
       // 3 budai nuotraukoms
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

        ?>

  





















        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
