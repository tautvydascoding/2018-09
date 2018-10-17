<?php
   $arRodytiZinutes = true;  // $debugMode = 0-2

   // konstantos
   define("DB_PAVADINIMAS", "hospital19" );
   define("DB_VARTOTOJAS", "root" );  // root
   define("DB_SLAPTAZODIS", "root" );  // root
   define("DB_HOST", "localhost");

   $prisijungimas = mysqli_connect(  DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

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

   /*
       f-ja - DB-je iesko gydytojo pagal 'id'
       $nr: ieskomo gydytojo numeris
       return: array uzpildyta rastojo gydytojo duomenimis
   */
   function getDoctor($nr) {
       $manoSQL = "SELECT * FROM doctors WHERE id = '$nr'  ";
       $resultai = mysqli_query(getPrisijungimas(),     $manoSQL);
       // mysqli_fetch_row - is rastu duomenu paima viena IR ideda ji i masyva
       $resultataiArray = mysqli_fetch_row($resultai);

       // var_dump($resultai);
       // echo "<br /> <br />";
       // print_r($resultataiArray);
       return  $resultataiArray;
   }
   // $gydytojas = getDoctor( 3 );
   // echo "mano seimos gydytojas:" . $gydytojas[1] . $gydytojas[2];

   function createDoctor($vardas, $pavarde) {
       $manoSQL = "INSERT INTO doctors
                          VALUES (NULL, '$vardas', '$pavarde')
                   ";
       mysqli_query( getPrisijungimas(),   $manoSQL);
   }

   // createDoctor("Paulius", "Pauliukaitis");
   // createDoctor("Birute", "Smilgaite");


   function createDoctorILGESNE($vardas, $pavarde) {
       // SAUGUMAS:  uzkoduoja spec. simbolius "  ' \n \t < >
       $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
       $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);

       $manoSQL = "INSERT INTO doctors
                          VALUES (NULL, '$vardas', '$pavarde')
                   ";
       $arPavyko = mysqli_query( getPrisijungimas(),   $manoSQL);
       // if ( !$arPavyko && $arRodytiZinutes) {
       if ($arPavyko == false && $arRodytiZinutes == true) {
           echo "ERROR: nepavyko sukurti gydytojo !!! <br />" . mysqli_error(getPrisijungimas());
       }
   }
   // createDoctorILGESNE("test3", "test4");

   // $nr - gydytojo id, kuris bus istrintas is DB
    function  deleteDoctor( $nr) {
       $nr = mysqli_real_escape_string( getPrisijungimas(), $nr);
   
       $manoSQL = "DELETE FROM doctors
                          WHERE id = '$nr';
                  ";
       $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);

       if ($arPavyko == false && $arRodytiZinutes == true) {
           echo "ERROR: nepavyko istrinti gydytojo $nr !!! <br />" . mysqli_error(getPrisijungimas());
       }
   }
   //  deleteDoctor(6);
   //

   /*
       suranda gydytoja pagal id ir pakoreguoja jo varda, pavarde
       $nr -koreguojamo gydytojo id is DB
       $vardas - naujas vardas
       $pavarde - nauja pavarde
   */
   // function editeDoctor($nr, $vardas, $pavarde) {
   //     $nr = mysqli_real_escape_string( getPrisijungimas(), $nr);
   //     $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
   //     $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);
   //
   //     $manoSQL = "UPDATE doctors SET
   //                                 name = '$vardas',
   //                                 1name = '$pavarde'
   //                                 WHERE id = '$nr'
   //                 ";
   //     mysqli_query(getPrisijungimas(), $manoSQL);
   // }
   //editeDoctor(3, "Ona", "Petrauskiene");

// sukuriame du naujus gydytojus

// function createDoctor($vardas, $pavarde) {
//     $manoSQL = "INSERT INTO doctors
//                        VALUES (NULL, '$vardas', '$pavarde')
//                 ";
//     mysqli_query( getPrisijungimas(),   $manoSQL);
// }

 // createDoctor("Paulius", "Pauliukaitis");
 // createDoctor("Birute", "Smilgaite");

// ta pati funkcija turi buti kitu pavadinimu

/*

is db paima visus(arba nurodyta skaiciu) gydytoju
$kiekis - kiek paimti gydytoju, (jeigu kiekis nenurodytas paima visus)

*/

function getDoctors($kiekis = 100){
  $kiekis = mysqli_real_escape_string( getPrisijungimas(), $kiekis);
  $manoSQL = "SELECT * FROM doctors
  ORDER BY id DESC
  LIMIT $kiekis";
$resultsOBJEKTAS = mysqli_query(getPrisijungimas(), $manoSQL);
return $resultsOBJEKTAS; //  !! cia ne masyvas
}
 $visiGydytojaiNeMasyvas = getDoctors(5);
// pasirenkame 5 gydtojus iskviesti
//  !! mysqli_fetch_assoc - paima Viena eilute DB ir pavercia i Array
$gydytojas = mysqli_fetch_assoc($visiGydytojaiNeMasyvas);

while ($gydytojas){ // tikrina ar array pilnas
  echo $gydytojas['name'] . $gydytojas['1name'] . "<br/>";
  $gydytojas = mysqli_fetch_assoc($visiGydytojaiNeMasyvas);

}


// =========================



// 3.0 uzdavunys
