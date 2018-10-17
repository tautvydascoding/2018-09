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
        //reikalavimas be ko neisgyventu paauglys
        //klase: zmogus
        // 2 kintamieji; ir dar papildomos funkcijos ka zmogus veikia
        interface paauglysBeGyvenimo
        {
          public function isgertMaisto();
          public function sutktiMeska();
          public function padarPertrauka();
        }

        class Zmogus implements paauglysBeGyvenimo{
          public $neflix = "Baki";
          public $miskas = "Begiojimas";

          function padarPertrauka(){
            //code
          }
          function nepasiklistMiske() {
            //code
          }
          function sutktiMeska() {
            //code
          }
          function isgertMaisto(){
            //code
          }
          function beSpecial();
          //code
        }


         ?>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
