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

        <!-- 
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


<!-- butini punktai formai: -->
<form action="registruotis.php" method="get">
    <input type="text" name = "vardas" placeholder="Jusu vardas" autocomplete="on" autofocus><br />
    <input type="text" name = "pavarde" placeholder="Jusu pavarde" title="Pavarde privaloma!"><br />
    <input type="text" name = "tel" placeholder="Jusu telefono nr." title="Pavarde privaloma!" pattern=".{9,}" ><br />
    <!-- required ideti -->
    <!-- //tas pats rezultatas:           -->
    <input type="submit" name="" value="registruotis"><br />
    <button type="submit" name="button">Registruotis</button><br />
</form>
<!-- patikrinimai langeliu http://html5pattern.com/Passwords -->




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
