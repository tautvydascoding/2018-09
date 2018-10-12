
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


function createMarke($marke) {
    // SAUGUMAS:  uzkoduoja spec. simbolius "  ' \n \t < >
    $naudotojas = mysqli_real_escape_string( getPrisijungimas(), $marke);



    $manoSQL = "INSERT INTO tp_marke
                       VALUES (NULL, '$marke')
                ";
    $arPavyko = mysqli_query( getPrisijungimas(),   $manoSQL);
    // if ( !$arPavyko && $arRodytiZinutes) {
    if ($arPavyko == false && $arRodytiZinutes == true) {
        echo "ERROR: nepavyko sukurti gydytojo !!! <br />" . mysqli_error(getPrisijungimas());
    }
}
$marke = $_GET['marke'];

//
createMarke("$marke");

//----- insert close------------------------------------------------

?>
<h2><?php echo "Jūs sėkmingai ivedėte nauja TP markę.";  ?></h2>
<br>
<a href="tp_marke.php">
  <button type="button" class="btn btn-secondary">Atgal</button>
</a>
