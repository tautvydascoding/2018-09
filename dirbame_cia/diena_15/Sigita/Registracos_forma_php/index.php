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

        <h1> Registracijos forma su action ir method="get" </h1>
 <!-- butinai turi buti action="failas registracojos.php", method="get" ir submit  -->
        <form action="registruotis.php" mrthod="get">
          <div><input type="text" name="vardas" value="" placeholder="Jusu vardas"></div>
          <!-- <autocomplete = "on" autofocus>sitas uzbaigia zmogaus rasoma teksta jei buvo kas nors vesta jau -->
              <div><input type="text" name="pavarde" value="" placeholder="Jusu pavarde">  </div>
                <div><input type="tel" name="telefonas" value="" placeholder="Jusu telefono numeris"></div>
                <button  type="submit" name="button">registruotis</button>
        </form>
        <!--uzdeju required zodeli tas laukss butinas uzpildyti.

         1. sukurti form'a naudojant metoda (GET) ir  su ivedimo laukais:
         vardas, pavarde, telefonas, mygtukas 'registruotis'

        2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila (formoje action='registracija.php')

        3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti vartotojo ivestu duomenis
        pvz.:
        print_r( $_GET);

        // PASIBANDYTI PAPILDOMAI
        pvz.: print_r( $GLOBALS)



        // UZDUOTIS
        // pasisveikinti su katik uzsiregistravusius zmogumi ir
        // graziai atspausdinti uzsiregistravusio zmoguas duomenis -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
