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

      <!-- // uzduotis2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4
// uzduotis3: atspausdinti visus gydytojus , kaip list item "ul li"
// uzduotis4: patobulinti 'uzduotis3',
    kad paspaudus ant gydytojo vardo/pavardes   atidarytu doctor.php faila
// uzduotis5: patobulinti uzduotis4,
    kad   doctor.php faile isvestu info apie - paspausta gydytoja

    HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir doctor.php faile su $_GET pasiimti kintamaji -->

        <h1> Ziureti i console (inspect element)  </h1>
        <!-- 4 tai yra ID -->
        <?php
        // UZDUOTIS 1.3:
// su kokiu nors ciklu atspausdinti VISUS gydytojus
// <h2 class='bg-info   m-1'> vardas pavarde</h2>

            //include_once  -- neleis antra kart ikelti include
          include ("db-funcion_destytojo.php"); //jau destytojo pasinaudojom funcija tik pasinaudojom nuoroda kad rasyti nereikia
          $gydytojas = getDoctor (10); //suranda gdytoja DB
          //print_r  ($gydytojas)
          //iskvietimas su for ciklu kad atspauzdintu
          for ($i=2; $i <6 ; $i++) {
            $gydytojas = getDoctor ( $i ); //is DB paima gydytoja
              // paima visus gydytojus is DB ir juos hrefe atspauzdina
              // X -- gaunamas is doctor.php failo jame aprasyta ka isvesti
            echo " <h2> <a href='doctor.php?x=$gydytojas[0]'>

                Gydytojo informacija, jei idomu paspausk ir sužinosi
              </a><br /></h2>";
              // $gydytojas[1] nedeti tarpeliu tarp $gydytojas ir [1]


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
