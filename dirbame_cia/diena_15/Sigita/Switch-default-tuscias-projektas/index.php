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
// $slaptazodis = "xxxc";
// echo($slaptazodis) . "<br />";
// echo md5($slaptazodis) . "<br />"; //sitas uzkoduoja slaptazodi, bet geriau sito nenaudoti o naudoti kitas
// echo password_hash($slaptazodis, PASSWORD_DEFAULT) . "<br />"; //DAR DAUGIAU UZKODUOJA, prideda dar "druskinimu", elementu ir panasiaia. jis gaunasi milziniskai ilgas uzkoduotas.

$vartotojoTipas ="paPrastas"; //  paprastas vartotojas, rasytojas, $modeartorius, adminas,
$sutvarkytasTipas = strtolower($vartotojoTipas); //sutvarko kad galima butu ivesti ir didziosiom ir mazosios raidem paieska.
//dar yra $sutvarkytasTipas = trim($sutvarkytasTipas), kuris dar daugiau sutvarko.

switch ($sutvarkytasTipas) {
  case 'paprastas':
    echo "Jusu vartotojas yra $vartotojoTipas <br />";
    echo "Jis gali tik skaityti strapsnius <br />";
    break;

    case 'rasytojas':
      echo "Jusu vartotojas yra $vartotojoTipas <br />";
      echo "Jis gali ir skaityti  ir rasyti strapsnius <br />";
      break;

      case 'moderatorius':
        echo "Jusu vartotojas yra $vartotojoTipas <br />";
        echo "Jis gali daug daugiau <br />";
        break;

        case 'adminas':
          echo "Jusu vartotojas yra $vartotojoTipas <br />";
          echo "Jis gali viska <br />";
          break;

  default:
    echo "Jusu vartotojo tipas nezinomas. Bandykite is naujo";
    break;
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
