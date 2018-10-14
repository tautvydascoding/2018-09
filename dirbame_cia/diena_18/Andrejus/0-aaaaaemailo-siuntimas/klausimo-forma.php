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

      <form class="" action="siusti-email.php" method="get">
        <input type="text" name="vardas" value="" placeholder="Jusu vardas"> <br>
        <input type="email" name="pastas" value="" placeholder="Jusu email"><br>
        <!-- <input type="text" name="id" value="4" hidden> slaptas laukas kuris rodo dar papildomai id -->
        <textarea name="klausimas" rows="8" cols="80" placeholder="Jusu klausimas"></textarea><br>
        <button type="submit" name="button">Submit</button><br>
      </form>
<!-- for ir parasyt ka norit kad klientas zinotu ka rasyt -->
<!-- pabandyt issaugot kad zinute eitu i dombaze dar!!!!!! -->
<!-- redirect pabandyt padaryt kad numestu i originalu puslapi po issiuntimo -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
