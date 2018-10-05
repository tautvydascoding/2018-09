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
        <!-- atspausdinti info apie 1 daktara -->
        <?php
          include("db-functions.php");
          $gydytojas = getDoctor(8); // suranda db gydytoja
            // echo "gydytojas: " . $gydytojas[0] . "<br />" . $gydytojas[1] . "<br />" . $gydytojas[2] . "<br />";
            // arba
          // for ($i=0; $i < count($gydytojas); $i++) {
          //   echo $gydytojas[$i] . " ";
          //
          // }
          // echo "<h2>" . "<em>" . $gydytojas[0] . "</em>".  $gydytojas[1] . $gydytojas[2] . "</h2>";
         ?>
         <h2>
          <em><?= $gydytojas[0] ?> </em>
          <?= $gydytojas[1] . " " .  $gydytojas[2] ?>
         </h2>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
