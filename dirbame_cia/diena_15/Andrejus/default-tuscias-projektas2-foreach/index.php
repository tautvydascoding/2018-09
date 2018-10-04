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
        // $zmogus = new Array();
        // $zmogus ['vardas'] = 'Tomas';
        $zmogus = ['vardas' => 'Karolis', 'pavarde' => 'Karlos', 'AK' => 100000332, 'miestas' => 'Kaunas', 0 => 'vyras', 1 => 'baltasis'];
        echo "To zmogaus vardas ".$zmogus['vardas']."<br />";
        print_r($zmogus);
        // foreach ($variable as $vienoStalciausPavadinimas => $value) { //$variable; $kea = issigalvotas vienos stalciaus kintamasis (jo galima ir nenaudot); $value = stalciaus turinis;
        //   echo "Stalcius: ".$vienoStalciausPavadinimas;
        //   echo "Stalcius viduje: ".$vienoStalciausTurinys; svarbi spera!!!!
        //echo "<br />";
        // }
        foreach ($zmogus as $stPav => $stReiksme) {
          echo "Stalcius: ".$stPav." ;";
          echo "Stalciuas viduje: ".$stReiksme." ;";
          echo "<br />";
        }
        echo " ";
        foreach ($zmogus as $vienoStalciausViduje) {
          echo "Stalciaus viduje: ".$vienoStalciausViduje;
          echo "<br />";
        }
        echo "  ";
        echo "<br />";
        foreach ($zmogus as $vienoStalciausVid) {
          if($vienoStalciausVid == 100000332) {
            break;
          }
          echo "Stalciaus viduje: ".$vienoStalciausVid;
          echo "<br />";
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
