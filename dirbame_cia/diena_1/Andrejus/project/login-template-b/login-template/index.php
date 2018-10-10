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
      <div class="loginbox">
        <img src="photo/login-red-icon.png" alt="avatar" class="avatar">
          <h1 class="heading">Login here</h1>
          <form class="loginf" action="index.html" method="post">
            <p>UserName</p>
            <input type="text" name="username" placeholder="Enter UserName" autocomplete="on" value="" title="Iveskit taisyklingai lauka" required>
            <p>Pasword</p>
            <input type="password" name="password" placeholder="Enter Pasword" autocomplete="on" value="" title="Iveskit taisyklingai lauka" required>
            <input type="submit" name="login" value="Login">
            <a href="#">Lost your pasword?</a> <br>
            <a href="#">Register</a>
          </form>
      </div>

      <?php
      $arRodytiZinutes = true; //$debugMode = 0-2 max3 gali buti
      define("DB_PAVADINIMAS", "baigiamasis");
      define("DB_VARTOTOJAS", "root"); //user_name
      define("DB_SLAPTAZODIS", "root"); // password
      define("DB_HOST", "localhost");

      $prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS); mysqli_set_charset($prisijungimas, "utf8");
      if ($prisijungimas) {
        //echo "Prisijunge sekmingai prie DB <br />";
      } else {
        //echo "Neprisijunge!!!!!!!!!!!".mysqli_connect_error();
        if ($arRodytiZinutes) {
          echo "Neprisijunge!!!!!!!!!!!".mysqli_connect_error(); //paaiskina kur yra klaida
        }
      }
      // Now we check if the data was submitted, isset will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Username and/or password does not exist!');
}

// Prepare our SQL
if ($some = $con->prepare('SELECT id, password FROM newacc WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$some->bind_param('s', $_POST['username']);
	$some->execute();
	$some->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($some->num_rows > 0) {
		$some->bind_result($id, $password);
		$some->fetch();
		// Account exists, now we verify the password.
		if (password_verify($_POST['password'], $password)) {
			// Verification success! User has loggedin!
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			echo 'Welcome ' . $_SESSION['name'] . '!';
		} else {
			echo 'Incorrect username and/or password!';
		}
	} else {
		echo 'Incorrect username and/or password!';
	}
	$some->close();
} else {
	echo 'Could not prepare statement!';
}


?>
       ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
