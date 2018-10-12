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
    <body class="loginb">
      <?php
      include_once("db/DB-prisijungimas.php");
      include("db/DB-aboutus.php");




       ?>
      <div class="loginbox">
        <img src="photo/login-red-icon.png" alt="avatar" class="avatar">
          <h1 class="heading">Login here</h1>
          <form class="loginf" action="includes/login.php" method="POST">
            <p>UserName</p>
            <input type="text" name="UserName" placeholder="Enter UserName" autocomplete="on" value="" title="Iveskit taisyklingai lauka" required>
            <p>Pasword</p>
            <input type="password" name="Password" placeholder="Enter Pasword" autocomplete="on" value="" title="Iveskit taisyklingai lauka" required>
            <input type="submit" name="submit" value="Login">
            <a href="#">Lost your pasword?</a> <br>
            <a href="#">Register</a>
          </form>
      </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
