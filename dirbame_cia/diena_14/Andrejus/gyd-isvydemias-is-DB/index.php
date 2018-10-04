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

  <!-- 1.1 atspauzdinti visas informacija apie 3(4) gydytoja -->
  <?php
        include ("DB-functions.php");
        $gydytojas = getDoctor(4); // suranda duomenu bazeje gydytoja
        // print_r($gydytojas); //testavimui
        echo $gydytojas[0] . " " . $gydytojas[1] . " " . $gydytojas[2] . "<br />"; //kad nesikirstu su for ciklu nes ten yra kitoks budas

        //arba
        // for ($i=0; $i < count($gydytojas) ; $i++) {
        //   echo $gydytojas[$i] . " ";
        // }
        // UZDUOTIS 1.2:
        // be foreach atspausdinti visa gydytojo info
        // <h2> <em>nr</em> vardas pavarde</h2>
         ?>
  <h2> <em><?= $gydytojas[0] ?></em>
           <?= $gydytojas[1]. " " . $gydytojas[2]  ?>
         </h2>
  <?php //<?= tokiu butugalima iskart kvest php plius echo

          ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




  <script type="text/javascript" src="main.js"> </script>

</body>

</html>
