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

        <!-- <h1> Ziureti i console (inspect element)  </h1> -->

<?php

$slaptazodis = "xxxc";
echo $slaptazodis . "<br />";
echo md5($slaptazodis) . "<br />"; //pasenusi funkcija
echo password_hash($slaptazodis, PASSWORD_DEFAULT) . "<br />"; // uzkoduoja ir padruskina, tinkama naudoti



$vartotojoTipas = "Moderatorius    "; //paprastas, rasytojas,moderatorius, administratorius

//kad ieskotu tipo mazosiom raidem ir panaikintu tarpus, tabuliacijas: //naudoti LogIn vardams
$sutvarkytasVartotojoTipas = strtolower($vartotojoTipas);
$sutvarkytasVartotojoTipas = trim($sutvarkytasVartotojoTipas);


// tikrina ar lygu
switch ($sutvarkytasVartotojoTipas) {
    case 'paprastas':
        echo "Jusu vartotojas yra $sutvarkytasVartotojoTipas.  <br/>";
        echo "Jis gali tik skaityti straipsnius.  <br/>";
        break; //po break nutraukia ir toliau nevykdo
    case 'rasytojas':
        echo "Jusu vartotojas yra $sutvarkytasVartotojoTipas.  <br/>";
        echo "Jis gali tik rasyti straipsnius.  <br/>";
        break;
    case 'moderatorius':
        echo "Jusu vartotojas yra $sutvarkytasVartotojoTipas.  <br/>";
        echo "Jis gali tik koreguoti straipsnius.  <br/>";
        break;
    
    case 'administratorius':
        echo "Jusu vartotojas yra $sutvarkytasVartotojoTipas.  <br/>";
        echo "Jis gali viska daryti.  <br/>";
        break;
    
    default:
        echo "Jusu vartotojo tipas nezinomas. Bandykite prisijungti is naujo.";
        break;
}






//printf moka graziai ideti kintamuosius i teksta

$vardas = "Tomas";
$pavarde = "Tomauskis";
$vietove = "uz 9 mariu";
$kiekis = 0.0036;

printf("Raudonkeputaite isejo ir sutiko %s . Kartu keliavo ir %s ir sutiko %s . Kartu suvalge %.3f duonos.", $vardas, $vietove, $pavarde, $kiekis);


?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
