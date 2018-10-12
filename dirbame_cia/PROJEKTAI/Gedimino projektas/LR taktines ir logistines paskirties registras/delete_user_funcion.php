<?php



$arRodytiZinutes = true; //$debugMode


  //konstantos
  define("DB_PAVADINIMAS", "registras" );
  define("DB_VARTOTOJAS", "root" ); //prisijungimo vardas DB
  define("DB_SLAPTAZODIS", "root" ); //prisijungimo slaptazodis DB
  define("DB_HOST", "localhost" );
//Prisijungimas prie DB kelias
  $prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS );

  if ($prisijungimas) {
      //echo "Prisijungei prie DB  <br />";
  } else {
      if ($arRodytiZinutes) {
          echo "ERROR: Prisijungti nepavyko!!! " . mysqli_connect_error();
      }
  }
  /*
      return: grazinamas prisijungimas prie DB
  */
  function getPrisijungimas() {
      global $prisijungimas;  //   arba  $GLOBALS['$prisijungimas'] = 99;

      return $prisijungimas;
  }
  getPrisijungimas();

//------------------------------------------------------------------------






//trinimo funkcija ----------------------------------
// $nr - gydytojo id, kuris bus istrintas is DB
   function  deleteUser( $nr) {
       $nr = mysqli_real_escape_string( getPrisijungimas(), $nr);

       $manoSQL = "DELETE FROM user
                          WHERE id = '$nr';
                  ";
       $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);

       if ($arPavyko == false && $arRodytiZinutes == true) {
           echo "ERROR: nepavyko istrinti Naudotojo $nr !!! <br />" . mysqli_error(getPrisijungimas());
       }
   }
   $id = $_GET['id'];
   deleteUser("$id");


 ?>
 <h2><?php echo "Jūs sėkmingai ištrynėte naudotoją.";  ?></h2>
 <br>
 <a href="user_print.php">
   <button type="button" class="btn btn-secondary">Atgal</button>
 </a>
