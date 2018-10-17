
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
//---USER insert-------------- veikia----


function createUser($vardas, $pavarde, $pareigos, $el_pastas) {
    // SAUGUMAS:  uzkoduoja spec. simbolius "  ' \n \t < >
    $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
    $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);
    $pareigos = mysqli_real_escape_string( getPrisijungimas(), $pareigos);
    $el_pastas = mysqli_real_escape_string( getPrisijungimas(), $el_pastas);


    $manoSQL = "INSERT INTO user
                       VALUES (NULL, '$vardas', '$pavarde', '$pareigos', '$el_pastas')
                ";
    $arPavyko = mysqli_query( getPrisijungimas(),   $manoSQL);
    // if ( !$arPavyko && $arRodytiZinutes) {
    if ($arPavyko == false && $arRodytiZinutes == true) {
        echo "ERROR: nepavyko sukurti gydytojo !!! <br />" . mysqli_error(getPrisijungimas());
    }
}
$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
$pareigos = $_GET['pareigos'];
$el_pastas = $_GET['el_pastas'];

//
createUser("$vardas", "$pavarde", "$pareigos", "$el_pastas");

//----- insert close------------------------------------------------

?>
<h2><?php echo "Jūs sėkmingai ivedėte nauja naudotoja.";  ?></h2>
<br>
<a href="new_user.php">
  <button type="button" class="btn btn-secondary">Atgal</button>
</a>
