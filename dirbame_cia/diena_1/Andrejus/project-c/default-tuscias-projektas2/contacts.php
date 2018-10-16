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
 ?>
 <div class="container-fluid padding marginus">
   <div class="row padding">
     <div class="col-md-12 col-lg-3">
       <h2>Where you can find us?</h2>
       <div class="mapouter"><div class="gmap_canvas"><iframe width="310px" height="310px" id="gmap_canvas" src="https://maps.google.com/maps?q=Kaunas%20coding%20school&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{text-align:right;height:320px;width:320%;}.gmap_canvas {overflow:hidden;background:none!important;height:319px;width:320px;}</style></div>
       <hr class="my-4">
      </div>
      <div class="col-md-12 col-lg-4">
       <h5>Contact us!</h5>
       <p>State of city, 000000</p>
       <p>State of city, 000000</p>
       <p>State of city, 000000</p>
       <p>State of city, 000000</p>
       <hr class="my-4">
       <h5>Working hours</h5>
       <p>Monday - Friday: 8:00-18:00</p>
       <p>Saturday: 9:00 - 16:00</p>
       <p>Sunday: Closed</p>
       <hr class="my-4">
       <h5>Our Address</h5>
       <p>555-555-555</p>
       <p>email@email.com</p>
       <p>69 street name</p>
       <p>State of city, 000000</p>
      </div>
     <div class="col-sm-12 col-md-12 col-lg-4">
       <h2>Laukiam Jusu klausimu!!!</h2>
       <form class="" action="siusti-email.php" method="get">
         <!-- <input class="tarpelis" type="text" name="vardas" value="" placeholder="Jusu vardas"> <br> -->
         <input class="tarpelis" type="text" name="vardas" value="" placeholder="Jusu vardas"> <br>
         <input class="tarpelis" type="email" name="pastas" value="" placeholder="Jusu email"><br>
         <!-- <input type="text" name="id" value="4" hidden> slaptas laukas kuris rodo dar papildomai id -->
         <textarea class="tarpelis" name="klausimas" rows="4" cols="30" placeholder="Jusu klausimas"></textarea><br>
         <button class="submiting" type="submit" name="button">Submit</button><br>
       </form>
     </div>
   </div>
   <hr class="my-4">
 </div>





 <!-- conecting social media -->

 <?php
 include("socialmd.php");

  ?>

 <!-- footer -->
 <?php
 include("footer.php");



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
