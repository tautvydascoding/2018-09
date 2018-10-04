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
        $slaptazodis = "xxxc";
        echo $slaptazodis. "<br />";
        echo md5($slaptazodis). "<br />"; //uzkodavimas slaptazodzio md5
        echo password_hash($slaptazodis, PASSWORD_DEFAULT). "<br />"; //uzkuodoja geriau slaptazodi







        // SWITCH yra panasus kaip if (condition) {
          // code...
        // }
        $vartotojoTipas = "adminas"; //paprastas, moderatorius, adminas, rasytojas;
        $sutvarkytasTipas = strtolower($vartotojoTipas); // kad veiktu ir jei parasai is didziuju raidziu
        $sutvarkytasTipas = trim($sutvarkytasTipas); //pasalyna tarpus is abouju pusiu parasyto pvz admin;
        switch ($sutvarkytasTipas) {
          case 'paprastas':
          echo "Jusu vartotojas yra $vartotojoTipas <br />";
          echo "Jis gali tik skaityti straipsnius";
            break;
            case 'moderatorius':
            echo "Jusu vartotojas yra $vartotojoTipas <br />";
            echo "Jis gali daryti pakeitymus puslapyje";
              break;
              case 'adminas':
              echo "Jusu vartotojas yra $vartotojoTipas <br />";
              echo "Jis gali tik rasyti ir redaguoti savo straipsnius";
                break;
                case 'rasytojas':
                echo "Jusu vartotojas yra $vartotojoTipas <br />";
                echo "Jis pilna teise visame puslapyje";
                  break;
          default:     // jo gali ir nebuti, nes nera kito varianto, bet jei vieno vartotojo nerado,sureagotu toki ar anu budu
            echo "Jusu vartotojo tipas nezinomas. bandykit per nauja";
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
