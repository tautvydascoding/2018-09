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

        <h1> Ziureti i console  </h1>

<!-- <?php

$zmogus = ["vardas" => "Tomas",
            "ak" => 35846684664,
            "Miestas" => "Kaunas",
            0 => "Vyras",
            1 => "baltasis"
];
print_r($zmogus);
var_dump($zmogus);


foreach ($zmogus as $vienoStalciausPavadinimas => $vienoStalciausTurinys) {

  if($vienoStalciausTurinys == 35846684664){
    break;
  }

  echo "Stalcius " . $vienoStalciausPavadinimas;
  echo " Stalciaus viduje: " . $vienoStalciausTurinys;
  echo "<br />";
}

?> -->



<?php
$slaptazodis = "xccdx";
echo "$slaptazodis" . "<br />";
echo md5($slaptazodis) . "<br />";
echo password_hash($slaptazodis, PASSWORD_DEFAULT) . "<br />";




//paprastas, rašytojas, moderatorius, adminas
$vartotojoTipas = "Adminas";
$sutvarkytasVartotojoTipas = strtolower($vartotojoTipas);
$vartotojoTipas = trim($sutvarkytasVartotojoTipas);

    switch ($vartotojoTipas) {
      case 'paprastas':
        echo "Jūsų vartotojo tipas yra $vartotojoTipas <br />";
        echo "jis gali tik skaityti straipsnius";
        break;
        case 'rasytojas':
          echo "Jūsų vartotojo tipas yra $vartotojoTipas <br />";
          echo "jis gali skaityti ir rašyti straipsnius";
          break;
          case 'moderatorius':
            echo "Jūsų vartotojo tipas yra $vartotojoTipas <br />";
            echo "jis gali skaityti rašyti ir redaguoti straipsnius";
            break;
            case 'adminas':
              echo "Jūsų vartotojo tipas yra $vartotojoTipas <br />";
              echo "jis turi viskas teises svetainėje";
              break;

      default:
        echo "Jūsų varotojo tipas nežinomas. Bandykit dar kartą";
        break;
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
