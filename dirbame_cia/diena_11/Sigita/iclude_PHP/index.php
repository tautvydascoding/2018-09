Susikurti 2 failus:

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
pvz
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title></title>

  </head>
  <body>
    <?php $kaina = "500 Eur";
    $antraste = "Avalyne";
   $aprasymas = "Nauji geri batai, storu neperslampamu padu"; ?>
<div class="container">
  <main class="row">
    <div class="col-md-12 bg-warning">
    <?php for ($i = 0; $i < 7; $i++)
    include("preke.php")
    ?>
</div>


  </main>

</div>
  </body>
</html>
