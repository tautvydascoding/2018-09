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

        <!--
        // UZDUOTIS


// UZDUOTIS 1.1: susikurti nauja projekta ir issivesti daktara is DB naudojant foreach ir getDoctor($nr) f-ja -->
<?php
  include ("db-funcion_destytojo.php"); //jau destytojo pasinaudojom funcija tik pasinaudojom nuoroda kad rasyti nereikia
  $gydytojas = getDoctor (3); //suranda gdytoja DB
  //print_r  ($gydytojas)
  //iskvietimas su for ciklu kad atspauzdintu
  for ($i=0; $i <count ($gydytojas) ; $i++) {
    // code...
    echo $gydytojas [$i] . " ";


  }

//  echo $gydytojas [0], $gydytojas [1], $gydytojas [2] . "<br />"; // sis sunkiau jei daug reikia daug rasyti
?>


<!-- // UZDUOTIS 1.2:
// be foreach atspausdinti visa gydytojo info
// <h2> <em>nr</em> vardas pavarde</h2> -->

<h2>
<em><?php echo $gydytojas [0] ?></em> <?php  echo $gydytojas [1] . " " . $gydytojas [1] ?>

</h2>










        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
