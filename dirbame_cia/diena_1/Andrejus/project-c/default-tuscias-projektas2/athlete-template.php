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
 <?php
 include_once("db/DB-prisijungimas.php");
 include("db/DB-athlete.php");
 $numeris = $_GET['ID'];
 $athlete = getAthlete($numeris);

 ?>

 <div class="container-fluid padding">
   <div class="row padding">
     <div class="col-sm-12 col-md-12 col-lg-5">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title">Carrier</h5>
           <p class="card-text"><?php echo $athlete[5]; ?></p>
         </div>
       </div>
     </div>
     <div class="col-sm-12 col-md-12 col-lg-6">
       <div class="card">
         <img class="card-img-top-temp" src="photo/<?php echo $athlete[7]; ?>" alt="">
         <div class="card-body">
           <h4 class="card-title"><?php echo $athlete[1]. " ".$athlete[2] ; ?></h4>
           <p class="card-text"><?php echo "Age: ". $athlete[3]; ?></p>
         </div>
       </div>
     </div>

   </div>
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

     </body>
 </html>
