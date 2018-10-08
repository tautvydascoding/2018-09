
<?php

$arRodytiZinutes = true; //$debugMode


  //konstantos
  define("DB_PAVADINIMAS", "hospital9" );
  define("DB_VARTOTOJAS", "root" ); //prisijungimo vardas DB
  define("DB_SLAPTAZODIS", "root" ); //prisijungimo slaptazodis DB
  define("DB_HOST", "localhost" );
//Prisijungimas prie DB kelias
  $prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS );

  if ($prisijungimas) {
      // echo "Prisijungei prie DB  <br />";
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

  /*
      f-ja - DB-je iesko gydytojo pagal 'id'
      $nr: ieskomo gydytojo numeris
      return: array uzpildyta rastojo gydytojo duomenimis
  */
  function getDoctor($nr) {
      $manoSQL = "SELECT * FROM doctor WHERE id = $nr";
      $resultai = mysqli_query(getPrisijungimas(),     $manoSQL);
      // mysqli_fetch_row - is rastu duomenu paima viena IR ideda ji i masyva
      $resultataiArray = mysqli_fetch_row($resultai);

      // var_dump($resultai);
      // echo "<br /> <br />";
      // print_r($resultataiArray);
      return  $resultataiArray;
  }
  //$gydytojas = getDoctor( 2 );
//  echo "mano seimos gydytojas:" . $gydytojas[1] . $gydytojas[2];
