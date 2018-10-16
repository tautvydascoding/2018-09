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
$zmogus = ["vardas" => "Tomas",
            "pavarde" => "Karlos",
            "AK" => 5000451,
            "Miestas" => "Kaunas",
            "tautybe" => "lietuvis"];
            print_r($zmogus);

            // foreach ($zmogus as $vienoStalciausKintamasis => $stalciausTurinys) {
            //   echo "Stalcius:" . $vienoStalciausKintamasis;
            //   echo "Stalciaus viduje:" . $stalciausTurinys;
            //   echo "<br/>";
            //
            // }
            //kitas trumpesnis variantas be $vienoStalciausKintamasis, kad nerpdyt visko ko nereikia.
            foreach ($zmogus as $stalciausTurinys) {
              if ($stalciausTurinys == 5000451){
                break;
              }
              echo "Stalciaus viduje:" . $stalciausTurinys;
              echo "<br/>";

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
