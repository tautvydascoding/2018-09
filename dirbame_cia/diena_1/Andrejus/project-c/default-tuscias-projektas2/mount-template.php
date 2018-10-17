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
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js">
        </script>
    </head>
    <body>

      <!-- Navigation!! -->

      <?php
      include("nav.php");
      include_once("db/DB-prisijungimas.php");
      include("db/DB-mtbike.php");
      ?>
      <div class="container-fluid padding mount">
        <div class="row text-center padding mount">

      <?php

      $numeris = $_GET['ID'];
      $mountain = getmtBike($numeris);

      ?>

          <div class="col-xs-12 col-sm-6 col-md-4 ">
            <h1><?php echo $mountain[2] ?></h1>
            <img src="photo/<?php echo $mountain[1]; ?>" alt="mountain" class="mtbikes">
            <p><?php echo $mountain[3] ?></p>
            <p><?php echo $mountain[4] ?></p>
            <p><?php echo $mountain[5] ?></p>
            <p><?php echo $mountain[6] ?></p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-5 ">
      <h1>Pirkimo komplektacija</h1>
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Equipment</th>
      <th>Quantity</th>
      <th>Quality(1-100)</th>
      <th>Unit price</th>
      <th>Selections</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Bike</td>
      <td>10</td>
      <td>60</td>
      <td>800 EU</td>
      <td><button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
  <li class="mdl-menu__item">Pirkimas</li>
  <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Rezervavimas</li>
  <li class="mdl-menu__item">Komplektacijos keitimas</li>
  <li disabled class="mdl-menu__item">Uzsakymo anuliavimas</li>
</ul></td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Helmet</td>
      <td>50</td>
      <td>75</td>
      <td>50 EU</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Gloves</td>
      <td>35</td>
      <td>50</td>
      <td>15 EU</td>
    </tr>
  </tbody>
</table>


          </div>
        </div>
        <hr class="my-4">
      </div>

      <!-- conecting social media -->

      <?php
      include("socialmd.php")

       ?>


      <!-- footer -->
      <?php
      include("footer.php")



      ?>
             <!-- Optional JavaScript -->
             <!-- jQuery first, then Popper.js, then Bootstrap JS -->
             <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
             <script src=jquery/jquery.js> </script> <script type="text/javascript" src="main.js"> </script>
             <script type="text/javascript"  src="js/mainjs.js">      </script>
             <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
             <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
             <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
         </body>
      </html>
