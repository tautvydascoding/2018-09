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
        class zmogus {
          public $ugis;
          public $vardas;

        public function __construct($vardas, $ugis) { //function tarpas ir du underscorai (__)
          $this->vardas = $vardas;
          $this->ugis = $ugis;
        }

        public function eiti() {
          echo $this->vardas." ". "eina!!!!!";
        }

        }
$monika = new zmogus ("Monika", 177);
$tadas = new zmogus("Tadas", 195);
$kestas = new zmogus("Kestas", 180);

echo " ".$monika->vardas." ". $monika->ugis." ".$monika->eiti();
echo "<br />";
echo $tadas->vardas." ".$tadas->ugis;
echo "<br />";
echo $kestas->vardas." ".$kestas->ugis;
        // UZDUOTIS 2:
        // susikurti  objektus: Monika, Tadas, Kestas

        // UZDUOTIS 2.1
        // Atspausdinti varda ir ugi
        // paleisti f-ja 'einu()'




        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
