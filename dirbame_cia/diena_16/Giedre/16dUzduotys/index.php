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

<?php     
// ---- -PASIKARTOJIMAS PROGRAMAVIMO PAGRINDU TESTUI-----
// 1) sukurti masyva : 1981, 1980, 1975, 1995, 1999
$Masyvas = [1981, 1980, 1975, 1995, 1999];

// 1.1) atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla

// for ($i=0; $i < count($Masyvas); $i++) { 
//    print_r($Masyvas[$i] . " ");
// };

//--------------------------------------------------------

$a = 0;
while ($a <= count($Masyvas)) {
    $a++;
    print_r($Masyvas[$a]);
    echo " ";
};



// 1.4 Atspausdinti kas antra data



// 1.4 Atspausdinti kas trecia data



// 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia)














?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
