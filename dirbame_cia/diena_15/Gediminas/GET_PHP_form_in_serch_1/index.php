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
        1. sukurti form'a naudojant metoda (GET) ir  su ivedimo laukais:
 vardas, pavarde, telefonas, mygtukas 'registruotis'
        -->


        <!-- tureti action kur nuves faila  pavadinima method ir name vardus butini laukai kitaip neveiks  //autocomplete="on" autofocus - pasiguglinti//  // type="tel" pattern=".{9,}" nurodo kiek skaiciu butinai turi buti laukelyje pvz numerio tel //  // title="Jusu vardas" uzvedus ant formos parodo kas turi buti tiksliau jusu komentaras //  // get parodo adreso lauke visa info o su post - neparodo adresu juostoi info taip saugiau manytina//-->
        <form  action="registruotis.php" method="get">
          <input type="text" name="vardas" placeholder="Jusu vardas" autocomplete="on" autofocus title="Jusu vardas"> <br />
          <input type="text" name="pavarde" placeholder="Jusu pavarde">  <br />
          <input type="tel" pattern=".{9,}" name="tel" placeholder="Jusu telefonas">  <br />
            <!-- galimi mygtuku du variantai zemiau abu geri bet renkames viena -->
            <input type="submit" name="" value="Registruotis">  <br />
            <button type="submit" name="button">Registruotis</button>  <br />

        </form>








        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
