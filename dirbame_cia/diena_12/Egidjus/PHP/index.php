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

        <h1 class="bg-success text-center"> Ziureti i console </h1>

<div class="container">
  <div class="row">
    <?php

    include("preke.php");

    ?>


    <?php
    for ($i=0; $i < 6 ; $i++) {
include("preke.php");

    }

     ?>
  </div>
</div>

<div class="">

<?php
$kaina = 15;
$antraste = "kazkokia preke";
$aprasymas = "truputis aprašymo";


 ?>






</div>


        <!-- Susikurti 2 failus:

preke.php
index.php

Faile index.php naudojant include('preke.php');    f-ja "iterpti" preke.php


// UZDUOTIS:
// 1: sukurti "preke.php" faila
// h2 (antraste)
// p (aprasymas)
// button (Kaina)

// 2) sukurti index.php (ideti container ir row su bootatrap)
// 2) index.php faile - paleisti FOR cikla 6 kartus include('preke.php');
// 3) index.php
// sukurti kintamuosius:
// $kaina = ...;
// $antraste = ...;
// $aprasymas = ...;
// 4) preke.php faile   isvesti kintamuosius $kaina, $antraste, $aprasymas
pvz -->
<!-- <h2> <?php echo $antraste;  ?> </h2> -->




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
