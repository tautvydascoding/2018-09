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

       <form class="form" action="siusti-email.php" method="get">

        <label for="vardas">Jusu vardas</label>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Example input">
        </div>

        <label for="pastas">Jusu pastas</label>
            <div class="form-group">
            <input type="email" class="form-control" name="pastas"  placeholder="Example input">
        </div>

        <label for="klausti">Jusu klausimas</label>
            <div class="form-group">
            <textarea type="text" class="form-control" name="klausimas"  row="8" cols="80"></textarea>
        </div>

        <input type="text" class="form-control" name="id" value="4" hidden>

        <div class="form-group">
            <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">Klausti</button>
            </div>
        </div>
    </form>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
