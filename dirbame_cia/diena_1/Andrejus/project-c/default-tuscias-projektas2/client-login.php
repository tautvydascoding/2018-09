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
if ($some = $con->prepare('SELECT id, password FROM newacc WHERE username = "Andron"')) {
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
