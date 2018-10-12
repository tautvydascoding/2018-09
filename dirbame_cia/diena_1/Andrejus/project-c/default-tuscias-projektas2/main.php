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
include("nav.php")
 ?>
<!-- Carousel!!!!!! -->

<div id = "slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photo/photo-1530143584546-02191bc84eb5.jpg" alt="slide-pic">
      <div class="carousel-caption">
        <h1 class="display-2">LIKE BIKE</h1>
        <h3>For All Your Biking Needs</h3>
        <button type="button" class="btn btn-outline-light btn-lg" name="button">View Demo</button>
        <button type="button" class="btn btn-primary btn-lg" name="button">Some special demo </button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photo/photo-1499438075715-fc23ef376ab9.jpg" alt="slide-pic">
    </div>
    <div class="carousel-item">
      <img src="photo/1410x793-mountain-bike.jpg" alt="slide-pic">
    </div>
  </div>
</div>

<!-- Jumbotronas megstamas!!!! -->

<div class="container-fluid">
<div class="row-jumbotron">
  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
    <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
    <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg"> Biking for you </button></a>
  </div>
</div>
</div>

<!-- welcome welcome for you -->

<div class="container-fluid padding">
<div class="row welcome text-center">
  <div class="col-12">
    <h1 class="display-4">Pastatyk savo</h1>
  </div>
  <hr>
  <!-- kdl neveikia hr????? -->
  <div class="col-12">
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  </div>
</div>
</div>

<!-- triju kalonu trijule -->

<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4 ">
        <i class="fas fa-code"></i>
        <h3>HTML</h3>
        <p>lorem lorem lorem.....</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 ">
        <i class="fas fa-bold"></i>
        <h3>Special B</h3>
        <p>lorem lorem lorem.....</p>
    </div>
    <div class="col-sm-12 col-md-4 ">
        <i class="fab fa-css3"></i>
        <h3>Ow boy</h3>
        <p>lorem lorem lorem more lorem.....</p>
    </div>
  </div>
<hr class="my-4">
</div>

<!-- sekcija is dvieju kolonu -->

<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-md-12 col-lg-6">
      <h2>You will do it...</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <br>
      <a href="#" class="btn btn-primary">Read more...</a>
    </div>
    <div class="col-lg-6">
      <img src="photo/smallBike0.jpg" class="img-fluid" alt="">
    </div>
  </div>
</div>

<hr class="my-4">
<!-- fixxed background for some fun -->

<figure>
  <div class="fixed-wrap">
    <div id="fixed">

    </div>
  </div>
</figure>

<!-- section for fun -->

<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect fun"data-toggle="collapse" data-target="#emoji" type="button" name="button">
  Button
</button>
<div id="emoji" class="collapse">
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-sm-6 col-md-3">
        <img class="gif" src="photo/standing.gif" alt="">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class="gif" src="photo/offthehill.gif" alt="">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class="gif" src="photo/jumpy.gif" alt="">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class="gif" src="photo/ontheride.gif" alt="">
      </div>
    </div>
  </div>
</div>

<!-- susipazinkit su komanda -->

<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4"> Hello team</h1>
    </div>
  </div>
</div>

<!-- business korteles -->

<div class="container-fluid padding">
  <div class="row padding">
    <?php
    include_once("db/DB-prisijungimas.php");
    include("db/DB-athlete.php");
    for ($i=1; $i < 4; $i++) {
      $athlete = getAthlete($i);
     ?>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="photo/<?php echo $athlete[6]; ?>" alt="">
        <div class="card-body">
          <h4 class="card-title"><?php echo $athlete[1]. " ".$athlete[2] ; ?></h4>
          <p class="card-text"><?php echo $athlete[4]; ?></p>
          <a href="athlete-template.php?ID=<?php echo $i;?>" class="btn btn-outline-secondary">See the profile</a>
        </div>
      </div>
    </div>

    <?php
    }
     ?>
  </div>

</div>

<!-- dvi colonu sekcija -->


<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-md-12 col-lg-6">
      <h2>What we do</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <br>
    </div>
    <div class="col-lg-6">
      <img src="photo/smallogo.png" class="img-fluid whatl" alt="">
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
