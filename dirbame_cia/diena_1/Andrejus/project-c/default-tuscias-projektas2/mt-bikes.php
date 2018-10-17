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
 <div class="container-fluid padding mount">
   <div class="row text-center padding mount">
<?php
include_once("db/DB-prisijungimas.php");
include_once("db/DB-mtbike.php");
for ($i=1; $i < 13; $i++) {
  $mountain = getmtBike($i);
 ?>
    <div class="col-xs-12 col-sm-6 col-md-4 border border-primary ">
      <a href="mount-template.php?ID=<?php echo $i;?>">
        <img src="photo/<?php echo $mountain[1]; ?>" alt="mountain" class="mtbikes">
        </a>
        <a href="mount-template.php?ID=<?php echo $i;?>" class="linkssh">
        <h3><?php echo $mountain[2] ?></h3>
        <p><?php echo $mountain[3] ?></p>
        <p><?php echo $mountain[6] ?></p>
        </a>
    </div>
    <?php
    }
     ?>
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

     </body>
 </html>
