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
    echo "<h1>mokomes matricas</h1>";

    // uzduotis
    // sukurti 2 masyvus ir juose aprasyti automobilio chrakteristikas
    // sukurti masyva "visiAutomobiliai" ir i ji ideti tuos 2 masyvus

    $auto1 = ["Audi", 220, 5, "rida 250000"];
    $auto2 = ["Opel", 200, 4.5, "rida 200000"];
    $auto3 = ["Subaru", 240, 5, "rida 550000"];

    print_r( $auto2  ); // testtavimui
    var_dump( $auto2 );  // test +

    //---matrica---
    $visiAutomobiliai = [];
    $visiAutomobiliai[0] = $auto1;  //
    $visiAutomobiliai[1] = $auto2;  //
    $visiAutomobiliai[2] = $auto3;  //
    echo "<br />  <br />";
    print_r( $visiAutomobiliai  ); // testtavimui

    // pakeisti visu automobiliu greiti per 30 sumazinti
    // test is vesti "visiAutomobiliai"
    $visiAutomobiliai[0][1] -= 30;
    $visiAutomobiliai[1][1] -= 30;
    $visiAutomobiliai[2][1] -= 30;
    // ARBA ilgesnis budas
    $visiAutomobiliai[0][1] = $visiAutomobiliai[0][1]  - 30;
    $visiAutomobiliai[1][1] = $visiAutomobiliai[1][1]  - 30;
    $visiAutomobiliai[2][1] = $visiAutomobiliai[2][1]  - 30;

    echo "<br /><br /><br />";
    // atspausdinimas su FOR ciklu
    for ($i=0; $i < 3; $i++) {
        echo "pavadinimas " . $visiAutomobiliai[$i][0]  . "<br>";
        echo "max. greitis " . $visiAutomobiliai[$i][1]  . "<br>";
    }


 ?>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
