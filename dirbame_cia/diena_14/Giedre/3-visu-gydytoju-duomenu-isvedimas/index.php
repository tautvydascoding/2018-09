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

        <!-- <h1> Ziureti i console (inspect element)  </h1> -->

<?php
// UZDUOTIS 1.3:
// su kokiu nors ciklu atspausdinti VISUS gydytojus
// <h2 class='bg-info   m-1'> vardas pavarde</h2>


include_once("db-functions.php");



echo '<div class="row">';




//visu gydytoju is DB isvedimas
    for ($i=1; $i < 4; $i++) { 
        $gydytojas = getDoctor($i); //is DB paima nurodyta gydytoja

        // echo "<h2 class='bg-info' 'm-1'> $gydytojas[0] $gydytojas[1] $gydytojas[2]</h2>";
        include("template-item.php");


if ($i % 3 ==0) {
   echo '</div> <div class="row"> ';
}


    };

echo '</div>'; //uzdarome class row







?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>