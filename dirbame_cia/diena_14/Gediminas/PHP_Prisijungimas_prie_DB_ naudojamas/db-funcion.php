
<?php

$arRodytiZinutes = true; //$debugMode


  //konstantos
  define("DB_PAVADINIMAS", "hospital9" );
  define("DB_VARTOTOJAS", "root" ); //prisijungimo vardas DB
  define("DB_SLAPTAZODIS", "root" ); //prisijungimo slaptazodis DB
  define("DB_HOST", "localhost" );
//Prisijungimas prie DB kelias
  $prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS );
  //kodas zemiau kaskas negerai klaida susirasti

//Pasako si salyga ar prisijungimas geras ir ismeta komentara
    if ($prisijungimas) {
            echo "<font color='green'> <h3>Prisijungimas prie DB sekmingas.</h3></font> <br />";
    } else {
    if ($arRodytiZinutes) {
            echo "<font color='red'> <h3>Blogas prisijungimas pasitikrink.</h3></font> <br />";
    }

  }

  //return: grazinamas prisijungimas prie DB
//---------------- PHP neiseina is buto jei bus return ir t.t....kaip minusas kad negalim iseit i isore ir reikia panaudoti global
  function getPrisijungimas () {
    // $globals ['$prisijungimas'] = 99;   --- cia yra kitas budas retai naudojamas
    global $prisijungimas; // bet su siuo zodeliu galiu paimti is globalaus skoupo isejes is vidaus ir paimti is isores
    return $prisijungimas;
  }
  getPrisijungimas();


/*
  f-ja - db- iesko ID pagal "ID"
  $nr: ieskomo gydytojo numeris
  return : array uzpildyta visais rastojo gydytojo duomenis
*/
function getDoctor($nr) {
  $manoSQL = "SELECT * FROM doctor WHERE id = 2 ";
  $resultai = mysqli_guery (getPrisijungimas(),   $manoSQL);
  //mysqli_fetch_row ---- is rastu duomenu paima viena ir ideda i masyva

  $resultataiArray = mysqli_fetch_row($resultai);
    //var_dump($resultai);
  //  echo "<br /> <br />";
    //  var_dump($resultataiArray);
      return $resultataiArray;
}

$gydytojas = getDoctor ( 2 );
echo $gydytojas [1] . $gydytojas [2];
