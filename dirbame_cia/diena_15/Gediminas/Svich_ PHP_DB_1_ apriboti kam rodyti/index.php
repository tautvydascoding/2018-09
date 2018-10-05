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
      // //apie slaptazodzius trumpap
      //   $slaptazodis = "xxxxc";
      //   echo "$slaptazodis . <br />"; //neuzkoduotas slaptazodis
      //   echo md5($slaptazodis) . "<br  />"; //maziau saugus uzkodavimas
      //   echo password_hash($slaptazodis, PASSWORD_DEFAULT ) . "<br  />"; // Saugus slaptazodis sunku iskoduoti
      //
      //     //apie slaptazodzius trumpai pabaiga



      //reikalinga tam kad pagal suteiktas teises
        $vartotojoTipas = "moderatorius";  //paprastas,rasytojas, moderatorius, adminas.
      //  $sutvarkytasTipas = strtolower($vartotojoTipas); //sutvarko didziasias raide pv jei moderatorius zodis bus Moderatorius sita reikia ikelti i switch (sita vieta $sutvarkytasTipas)
       //$vartotojoTipas = trim(sutvarkytasTipas); //Pasalina aplink tarpus kad neliktu ju sita reikia ikelti i switch (sita vieta $sutvarkytasTipas)
        switch ($vartotojoTipas) {
          case 'paprastas':
          echo "Jusu vartotojas yra $vartotojoTipas <br />";
          echo "Jis gali tik skaityti straipsnius <br />";
            // code...
            break;

            case 'rasytojas':
            echo "Jusu vartotojas yra $vartotojoTipas <br />";
            echo "Jis gali rasyti straipsnius <br />";
              // code...
              break;

              case 'moderatorius':
              echo "Jusu vartotojas yra $vartotojoTipas <br />";
              echo "Jis gali modifikuoti straipsnius <br />";
                // code...
                break;

                case 'adminas':
                echo "Jusu vartotojas yra $vartotojoTipas <br />";
                echo "Jis gali viska daryti <br />";
                  // code...
                  break;

          default:
            echo "Jusu vartotojo tipas nezinomas. Bandykite is naujo.";
            // code...
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
