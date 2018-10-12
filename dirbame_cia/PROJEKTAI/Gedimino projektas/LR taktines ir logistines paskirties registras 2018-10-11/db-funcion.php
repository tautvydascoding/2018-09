
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





// duomenu ivedimas i DB trumpesnis bet geriau nenaudoti ----------
function createDoctor($vardas, $pavarde, $pareigos, $el_pastas) {
    $manoSQL = "INSERT INTO user
                       VALUES (NULL, '$vardas', '$pavarde', '$pareigos', '$el_pastas')
                ";
    mysqli_query( getPrisijungimas(),   $manoSQL);
}

//createDoctor("Paulius", "Pauliukaitis", "Specialistas", "paulius.paulauskas@gmail.com");

//---------------------------------------------------pabaiga trumpesnio

//--------------------------------------------------------------------------



// naudoti sita duomenu ivedimui i DB-----------------------
function createUSER($vardas, $pavarde) {
    // SAUGUMAS:  uzkoduoja spec. simbolius "  ' \n \t < >
    $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
    $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);

    $manoSQL = "INSERT INTO user
                       VALUES (NULL, '$vardas', '$pavarde')
                ";
    $arPavyko = mysqli_query( getPrisijungimas(),   $manoSQL);
    //if ( !$arPavyko && $arRodytiZinutes) {
  //if ($arPavyko == false && $arRodytiZinutes == true) {
        echo "ERROR: nepavyko sukurti gydytojo !!! <br />" . mysqli_error(getPrisijungimas());
    }
//}
//createUSER("Panda", "Pauliukaitis");



// ilgesnio pabaiga ----------------------------------------------





//trinimo funkcija ----------------------------------
// $nr - gydytojo id, kuris bus istrintas is DB
   function  deleteDoctor( $nr) {
       $nr = mysqli_real_escape_string( getPrisijungimas(), $nr);

       $manoSQL = "DELETE FROM doctor
                          WHERE id = '$nr';
                  ";
       $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);

       if ($arPavyko == false && $arRodytiZinutes == true) {
           echo "ERROR: nepavyko istrinti gydytojo $nr !!! <br />" . mysqli_error(getPrisijungimas());
       }
   }
   //deleteDoctor(15);
   //deleteDoctor(16);




//-------------- redagavimas DB----------------------------------
/*
       suranda gydytoja pagal id ir pakoreguoja jo varda, pavarde
       $nr -koreguojamo gydytojo id is DB
       $vardas - naujas vardas
       $pavarde - nauja pavarde
   */
   function editeDoctor($nr, $vardas, $pavarde) {
       $nr = mysqli_real_escape_string( getPrisijungimas(), $nr);
       $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
       $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);

       $manoSQL = "UPDATE doctor SET
                                   name = '$vardas',
                                   lname = '$pavarde'
                                   WHERE id = '$nr'
                   ";
       mysqli_query(getPrisijungimas(), $manoSQL);
   }
  //editeDoctor(17, "Mindaugas", "Kaklauskas");

  //--------------------------------------------Redagavimas pabaiga-------


  // -------- visu gydytoju paemimas-----------------------------------------
    //Is DB paima visus (arba nurodyta skaiciu) gydytoju
    //$kiekis - kiek paimti gydytoju (jei nenurodomas kiekis tai paima visus)

    function getDoctors ($kiekis = 10) {
      $kiekis = mysqli_real_escape_string( getPrisijungimas(), $kiekis);
      $manoSQL = "SELECT * FROM user
                           ORDER BY id
                           LIMIT $kiekis";
      $resultsOBJEKTAS = mysqli_query(getPrisijungimas(), $manoSQL);
      return $resultsOBJEKTAS; //!!cia Ne masyvas
    }
    $visiGydytojaiNeMasyvas = getDoctors (3);
    //$Ggydytojas - tai masyvas
    //!!! mysqli_flech_assoc -- paima VIENA eilute is DB  ir pavercia i ARRAY (masyva)
    $gydytojas = mysqli_fetch_assoc ($visiGydytojaiNeMasyvas);
    while ($gydytojas) { //tikrina ar array pilnas
      //echo $gydytojas["vardas"] . $gydytojas["pavarde"] . $gydytojas["adresas"] . "<br />";
          // code...
      $gydytojas = mysqli_fetch_assoc ($visiGydytojaiNeMasyvas); // pakartojus uzbaigia isvedima pagal kieki jei ne tai suksis be galo ratu ir ves ta pati is naujo...

    }



    //---------visu gyditoju pabaiga----------------------------
