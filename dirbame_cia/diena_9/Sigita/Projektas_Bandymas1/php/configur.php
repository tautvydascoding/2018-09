
<?php
define("DB_PAVADINIMAS", "Igl" );
define("DB_VARTOTOJAS", "root" );
define("DB_SLAPTAZODIS", "root" );
define("DB_HOST", "localhost" );


$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS); mysqli_set_charset($prisijungimas, "utf8");//susikuriam kintamaji prisijungimui, kad lengviau butu naudoti; -->
?>
<!-- if ($prisijungimas) {
     // echo "Prisijungei prie DB sekmingai <br />";
} else {
    if ($arRodytiZinutes) {
        // echo "ERROR: Prisijungti nepavyko!!! <br />" . mysqli_connect_error();
    }
  }
  define('DB_SERVER', 'localhost:3036');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', 'rootpassword');
  define('DB_DATABASE', 'database');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); -->
