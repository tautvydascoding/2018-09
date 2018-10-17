<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <title></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- Add icon library for feibuke icon-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- !!! mano CSS vissade zemiau -->
  <link rel="stylesheet" href="../css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<!-- Headeris ==================-->
<?php include('header.php') ?>

<body>
  <!--  nuoroda i nuolaidu langa ======-->
  <div class="container container2">
    <a href="antrasNuolaidu.php"><img class="nuotrauka3" src="../galerija/ian-dooley-298769-unsplash.jpg" alt="pagrindine"> <div class="centered"><strong style="color:black;"> PASIIMK SAVO NUOLAIDA ČIA!!!!!!!!!!!</strong></div></a>
  </div>
  </div>
  <!-- <!straipsniu dalies konteineris ======-->
  <div class="container">
    <?php include("straipsniai.php") ?>
  </div>

  <!-- Footeris ================= -->
  <?php include("footer.php") ?>
</body>

</html>
