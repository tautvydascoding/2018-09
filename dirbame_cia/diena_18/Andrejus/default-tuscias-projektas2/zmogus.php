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


      <?php
      require("class.php");

      $Petras = new Zmogus ();
      $Petras->setUgis(210);
      $Petras->setUgis(205);
      $Petras->setUgis(195);
      echo $Petras->getUgis();

    echo $Petras->manoVardas()." ". $Petras->manoUgis();
    $Angele = new Zmogus(178, "Angele");
    echo $Angele->getUgis();



    // UZDUOTIS 1:
    // sukurti  klase: 'zmogus'

    // zmogus turi:
    // private ugis,
    // private vardas
    // public f-ja 'getManoUgis()'
    // public f-ja 'getManoVardas()'21
    // public f-ja 'setManoUgis($x)'
    // public f-ja 'setManoVardas($x)'
    // kintamojo paemimas f-je:    $this->vardas


    // UZDUOTIS 2.1
    // susikurti  objektus: Petras

    // UZDUOTIS 2.2
    // Atspasudinti varda ir ugi naudojant
    // f-ja 'manoUgis()'
    // f-ja 'manoVardas()'


    // UZDUOTIS 3:
    // susikurti konstruktoriu

    // UZDUOTIS 3.1:
    // susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)

      ?>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
