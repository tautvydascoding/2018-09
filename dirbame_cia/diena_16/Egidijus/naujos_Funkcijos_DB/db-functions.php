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
        $manoSQL = "SELECT * FROM doctors WHERE id = $nr";
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




    //

function createDoctorIlgesne($vardas, $pavarde) {
  $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
  $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);

  $manoSQL = "INSERT INTO `doctors` VALUES (NULL, '$vardas', '$pavarde')";
$arPavyko =  mysqli_query(getPrisijungimas(), $manoSQL);
if ($arPavyko == false && $arRodytiZinutes == true) {
  echo "ERROR: nepavyko sukurti gydytojo <br />" . mysqli_errno(getPrisijungimas());
}

}
// createDoctorIlgesne("test5", "test6");
// createDoctor("Paulius", "Pauliukaitis");
// createDoctor("Birute","Smilgaite");
//$nr - gydytojo id kuris bus ištrintas iš DB







////////////////
function deleteDoctor($nr) {
  $nr = mysqli_real_escape_string(getPrisijungimas(), $nr);
  // $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);

  $manoSQL = "DELETE FROM `doctors` WHERE id = $nr;";
$arPavyko =  mysqli_query(getPrisijungimas(), $manoSQL);
if ($arPavyko == false && $arRodytiZinutes == true) {
  echo "ERROR: ištrinti gydytojo $nr <br />" . mysqli_errno(getPrisijungimas());
}

}
// deleteDoctor(13);
// deleteDoctor(14);

function editDoctor($nr, $vardas, $pavarde) {
  $nr = mysqli_real_escape_string(getPrisijungimas(), $nr);
  $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
  $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);

  $manoSQL = "UPDATE `doctors` SET name = '$vardas', lname = '$pavarde' WHERE id = '$nr'";
$arPavyko =  mysqli_query(getPrisijungimas(), $manoSQL);
if ($arPavyko == false && $arRodytiZinutes == true) {
  echo "ERROR: nepavyko redaguoti gydytojo <br />" . mysqli_errno(getPrisijungimas());
}

}
// editDoctor(2, "Ona", "Petrauskiene");


//neveikia

// function getDoctors($nr, $vardas, $pavarde) {
//   $nr = mysqli_real_escape_string(getPrisijungimas(), $nr);
//   $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
//   $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);
//
//   $manoSQL = "SELECT * FROM `doctors` WHERE id > 6";
// $arPavyko =  mysqli_query(getPrisijungimas(), $manoSQL);
// if ($arPavyko == false && $arRodytiZinutes == true) {
//   echo "ERROR: nepavyko redaguoti gydytojo <br />" . mysqli_errno(getPrisijungimas());
// }
//
// }
// getDoctors();

/* is DB paima visus (arba nurodyta skaičių) gydytojus,
$kiekis - kiek paimti gydytoju ( jeigu kiekis nenurodomas paima visus)
*/

function getDoctors($kiekis = 999999){
$kiekis = mysqli_real_escape_string(getPrisijungimas(), $kiekis);
$manoSQL = "SELECT * FROM doctors
            ORDER BY id DESC
            LIMIT $kiekis";
          $resultsOBJEKTAS = mysqli_query(getPrisijungimas(), $manoSQL);
  // echo "$kiekis"; //9999999
  return $resultsOBJEKTAS;
}

$visiGydytojaiNeMasyvas = getDoctors(5);

//mysqli_fetch_assoc paima VIENA eilute iš DB ir paverčia į ARRAY
$gydytojas = mysqli_fetch_assoc($visiGydytojaiNeMasyvas);
while ($gydytojas) {
  // echo $gydytojas['name'] . $gydytojas['lname'] . "<br />" ;
  $gydytojas = mysqli_fetch_assoc($visiGydytojaiNeMasyvas);
}

// print_r($gydytojas);
