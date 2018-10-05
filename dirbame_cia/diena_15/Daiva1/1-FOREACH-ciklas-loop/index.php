<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <!-- !!idedame CSS faila, nes kitaip neveiks -->
        <link rel="stylesheet" href="./css/main.css">
        <!-- NOTE: jeigu neveikia:
            1) ar failo pavadinimas geras
            2) ar kelias geras?   (ar "/" teisingi; direktorija ar gere )
            3) ar   rel="stylesheet"
            4) ar link uzdalete ">"
         -->
    </head>
    <body>

        <h1>Isijunk konsole</h1>
        <?php
                  //$zmogus = new array();
                  //$zmogus ["vardas"] = 'Tomas'
                  $zmogus = ["vardas" => "Karolis",
                  "pavarde" => "Karlos",
                  "AK" => 355558884666,
                  "miestas" => "Kaunas",
                  1 => "Vyras",
                  2 => "Baltasis",
                    ];

                  print_r($zmogus); // testinis print

                  // foreach ($zmogus as $vienoStalciausKintamasis => $vienoStalciausTurinys) {
                  //   echo "Stalcius:" . $vienoStalciausKintamasis ;
                  //   echo "Stalciaus viduje" . $vienoStalciausTurinys ;
                  //   echo "<br  />";
                  // }
                  //trumpesnis  variantas
                  foreach ($zmogus as $vienoStalciausTurinys) {
                     //salyga rasem kad ieskotu info iki AK
                     if ($vienoStalciausTurinys == 355558884666) {
                     break;
                     }
                    echo "Stalciaus viduje:" . $vienoStalciausTurinys ;
                    echo "<br  />";
                  }
                ?>

        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
