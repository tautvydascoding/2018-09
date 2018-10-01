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

<?php echo "================================uzduotis==================================================" ?>


<?php include ("header.php");
include ("main.php");
include ("footer.php");
 ?>

<!-- index.php Faile naudojant f-ja include('kelias')     "iterpti" header, main ir footer failus, pvz:
index.php
    include('header.php');
    include('main.php');
    include('footer.php');

header.php   faile - turetu buti visas puslapio virsus:
 <html>
     <head>
         ...
     </head>
     <body>

main.php  faile - turetu buti:
<h1> Mano puslapis su PHP</h1>

footer.php faile - turetu buti visa puslapio apacia:
         MANO JS failas pats zemiausias
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html> -->


























  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src=jquery/jquery.js> </script> <script type="text/javascript" src="main.js"> </script>

</body>

</html>
