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

  1. sukurti form'a naudojant metoda (GET) ir su ivedimo laukais:
  vardas, pavarde, telefonas, mygtukas 'registruotis'
  <form  action="registruotis.php" method="get">
    <!-- naudotis post metoda jei nori kad butu uzkuodota,jei get bus atvazduota musu puslapi kur kas kame. post galima gerai naudotis slaptazodziui -->
    <input type="text" name="vardas" placeholder="Jusu vardas" autocomplete="on" autofocus > <br>
    <input type="text" name="pavarde" title="Pavarde privaloma" placeholder="Jusu pavarde" autocomplete="on" autofocus  > <br>
    <input type="number" name="tel" placeholder="Jusu telefonas" title="Per mazai ivestu skaiciu" autocomplete="on" ><br>
    <!-- title yra textas kuris ismetamas kai uzvedi peliuka ant laiko -->
    <!-- required turi buti kai butinai uzpildomas laikas turi but -->
    <!-- pattern=".{9,}" kiek butinai turi uzpildyti kieki nr pvz telefono kad registruotis -->
    <!-- galima ir input ir button kaip patogiau sukurti button -->
    <input type="submit" name="" value="Registruotis"> <br>
    <button type="submit" name="button">Registruotis</button> <br>
  </form>
  <!-- kad viskas butu gerai veiktu ivedimo fromas reikia viskas kas yra visuje -->
  2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila (formoje action='registracija.php')

  3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti vartotojo ivestu duomenis
  pvz.:
  print_r( $_GET);

  // PASIBANDYTI PAPILDOMAI
  pvz.: print_r( $GLOBALS)



  // UZDUOTIS
  // pasisveikinti su katik uzsiregistravusius zmogumi ir
  // graziai atspausdinti uzsiregistravusio zmoguas duomenis



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




  <script type="text/javascript" src="main.js"> </script>

</body>

</html>
