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

        include("DB-functions.php");

        $numeris = 2;
        $gydytojas = getDoctor($numeris);
        echo $gydytojas[1];
        // // echo $gydytojas["name"];
        //===========================================================
        // // 1. sukurti tuscia porjekta (default)
        // // 1.1 viduje susikurti doctor.php faila
        //
        // // 2. doctor.php faile parasyti PHP koda:
        //     $numeris = 2;
        //     $gydytojas = getDoctors( $numeris);
        //     echo $gydytojas[1];
        //     echo $gydytojas["name"];
        //
        // // 3. pasileisti Narsykleje si puslapi (doctor.php ne index.php, Narsykles adreso ivedimo lange (paciam gale) prirasyti : doctor.php)
        // // 3.1 istaisyti klaida: function 'getDoctors' nor found
        // // 3.1.1 isideti i projekta faila: db_functions.php
        // // 3.1.1 isideti i  faila: doctor.php:
        // include('db_functions.php');
        //
        // // 4. faile  pakeisti $numeris = 3;
        // // 4. faile  pakeisti $numeris = 4;
        // // ir paziureti kas bus
        //==================================================
         ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
