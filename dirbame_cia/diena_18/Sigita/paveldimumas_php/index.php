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
      include("Liutas.php");
      $LiutoObjektas1 = new Liutas();
      $LiutoObjektas2 = new Liutas();
      $LiutoObjektas3 = new Liutas();

      $LiutoObjektas1->setSpalava("rgb(105, 75, 21)");
      echo $LiutoObjektas1->getSpalva();
      echo "<br />";
      $LiutoObjektas2->setSpalava("rgb(136, 18, 25)");
      echo $LiutoObjektas2->getSpalva();
      echo "<br />";
      $LiutoObjektas3->setSpalava("rgb(31, 37, 17)");
      echo $LiutoObjektas3->getSpalva();
      echo "<br />";



      // $vilkObjektas->setPusryciai("Monika");
      // echo $vilkObjektas->getPusryciai();
      // echo "<br />";

      ?>
       // =====================extends=====================

        // uzduotis: sukurti klases "Gyvunas", "Tipas" - kuri paveldi Gyvunas, "Liutas" - kuri paveldi Tipas
        // Gyvunas:
        //    public $alive = true;
        //    public $positionX;
        //    public $positionY;
        // Tipas:
        //    public $rusis = "kate";
        //    public $minta = "mesa";
        // Liutas:
        //    public $kailis = true;
        //    public $spalva = "#a34baa";
        //    private $amzius = 5;

        // uzduotis 0: susikurti 3 Obj. klasas Liutas
         // uzduotis 1: pakeisti visu triju liutu spalvas (ir pakeitimus atspausdinti)

          // uzduotis2: A) Liuto klasei susikurti PRIVATU kintamaji "name". ir uskurti 2 funkcijas jo reiksmei pakeisti ir paimti "setName($x)", "getName()".
          // B) Pakeisti vardus ir atspausdinti

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
