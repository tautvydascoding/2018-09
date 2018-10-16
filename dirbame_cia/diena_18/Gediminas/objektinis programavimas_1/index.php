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

// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..."

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas

// UZDUOTIS 2.1
// Atspausdinti varda ir ugi
// paleisti f-ja 'einu()'

   class Zmogus {
   public $ugis = -1;
   public $vardas = 'Bevardis';

   public function einu () {
     echo "Einu einu...";
   }
}

$Moteris = new Zmogus ();
$Vyras1 = new Zmogus ();
$Vyras2 = new Zmogus ();

$Moteris->vardas = "Monika";
$Vyras1->vardas = "Tadas";
$Vyras2->vardas = "Kestas";
echo "Vardas yra: $Moteris->vardas <br />";
echo "Vardas yra: $Vyras1->vardas <br />";
echo "Vardas yra: $Vyras2->vardas <br />";

?>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
