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

        <?php

        include_once("DB-functions.php");

        // UZDUOTIS 1.3:
        // su kokiu nors ciklu atspausdinti VISUS gydytojus
        // <h2 class='bg-info   m-1'> vardas pavarde</h2>
        //visu gyd isvedimas is DB
        for ($i=1; $i < 9; $i++) {
          $gydytojas = getDoctor($i); // is db paima nurodyta gyd.
          // echo "<h2 class='bg-info  m-1'> $gydytojas[1] $gydytojas[2] </h2>";
          include ("template-item.php");
        }
        // UZDUOTIS 1.3.2
        // A) sukurti nauja nauja faila, pvz:  template-item.php
        // B)  perkelti dizaina is index failo ciklo (1.3) (visa h2 eilute):
        //     <h2 class='bg-info   m-1'> vardas pavarde</h2>
        //       i   faila  template-item.php
        // C)    index failo cikle (1.3) ideti:
        //       include  (' template-item.php');
        //  papildomai)  template-item.php   faile uzdeti klases 'col-md-4  m-1'
        //           virs ciklo uzdeti klase 'row' ir po ciklu uzdaryti
         ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
