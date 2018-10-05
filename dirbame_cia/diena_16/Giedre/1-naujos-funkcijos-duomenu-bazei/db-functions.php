<?php


//erroru valdymas, atidavus klientui pakeisti i false // $debugMode = 0-2
$arRodytiZinutes = true;



//kintamieji=konstantos, kurie nesikeis, draudziama
define( "DB_PAVADINIMAS", "hospital9" );
define( "DB_VARTOTOJAS", "root" );
define( "DB_SLAPTAZODIS", "root" );
define("DB_HOST", "localhost");


$prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);


//logIn patikrinimas
if ($prisijungimas) {
     // echo "Prisijungei prie DB sekmingai <br />";
} else {
    if ($arRodytiZinutes) {
        echo "NEprisijungti nepavyko!!! <br />" . mysqli_connect_error();
    }
  }

/* 
return: grazinamas prisijungimas prie DB
*/
function getPrisijungimas() {
    global $prisijungimas;   // 1) liepia naudoti globalu kintamaji. php Scopes kitaip veikia
    // po global negalima pakeisti reiksmiu, tai daryti sekancioje eiluteje
//veikia tik funkcijose. jei nori iseiti i isore -su global


// $GLOBALS['$prisijungimas'] = 99; //tas pats. 2) kaip prieiti prie globalios reiksmes

    return $prisijungimas;
}
getPrisijungimas();


// funkcija, kuri ieskomo gydytojo pagal id
/* $nr:ieskomo gydytojo numeris
return: grazins masyva, uzpildyta ieskomo gydytojo duomenimis
*/

function getDoctor($nr) {
    $manoSQL = "SELECT * FROM `doctors` WHERE id = $nr";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL); //esam prisijunge ir ka tada daryti
    //mysqli_query(getPrisijungimas(), $"SELECT * FROM `doctors` WHERE id = $nr"); g.b ir taip

    $rezultataiArray = mysqli_fetch_row($rezultatai); //paemimas is duomenu B
    // mysqli_fetch_row is rastu duomenu paima viena ir ideda i masyva.

/*
var_dump($rezultatai);
echo "<br />";
//var_dump($rezultataiArray);// rodo su formatu
print_r($rezultataiArray); 
*/
//cia galima pasirasyti if, jeigu neradome------------------
return $rezultataiArray; //is DB grizes gydytojas
}

//$gydytojas = getDoctor( 3 );
//echo "Mano seimos gydytojas" . $gydytojas[1] . $gydytojas[2];



function createDoctor($vardas, $pavarde) {
    $manoSQL = "INSERT INTO `doctors`(`id`, `name`, `lname`) VALUES (NULL,'$vardas','$pavarde')";

mysqli_query( getPrisijungimas(), $manoSQL);
}

//createDoctor("Paulius", "Smilgaite");
//createDoctor("Birute", "PAuliukaitis");


//Gali buti ir taip: daugiau rasymo:
function createDoctorIlgesne($vardas, $pavarde) {
    
    $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
    $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);
    //del saugumo uzkoduojam, iveda teksta pagal kuri iesko Dbazeje
    
    
    
    $manoSQL = "INSERT INTO `doctors`(`id`, `name`, `lname`) VALUE (NULL,'$vardas','$pavarde')";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
        if ($arPavyko ==false && $arRodytiZinutes == true) {
        //if (!$arPavyko && $arRodytiZinutes) {
            echo "ERROR: nepavyko sukurti gydytojo!!! <br />" . mysqli_errno(getPrisijungimas());

            // . pranes kas blogai, paims klaida is myPhpAdmin
        }

}

//createDoctorIlgesne("test3", "test4"); //testavimui



//delete------------


//kitamasis numeris $nr bus gydytojo id is DB, bus istrintas
function deleteDoctor($nr) {
    $nr = mysqli_real_escape_string(getPrisijungimas(), $nr);

    $query = "DELETE FROM `doctors` WHERE `id` = $nr;";
    $arPavyko = mysqli_query( getPrisijungimas(), $query);

    if ($arPavyko ==false && $arRodytiZinutes == true) {
        //if (!$arPavyko && $arRodytiZinutes) {
            echo "ERROR: nepavyko istrinti gydytojo $nr !!! <br />" . mysqli_errno(getPrisijungimas());

    }
}

// deleteDoctor(11); //testavimui




//update------------

//suras gydytoja pagal id ir pakoreguoja jo varda pavarde
function editeDoctor($nr, $vardas, $pavarde) {
    //$nr = mysqli_real_escape_string(getPrisijungimas(), $nr);

    $manoSQL = "UPDATE doctors SET name='$vardas',lname='$pavarde' 
                               WHERE id = '$nr';";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);


    if ($arPavyko == false) {
        //if (!$arPavyko && $arRodytiZinutes) {
            echo "ERROR: nepavyko redaguoti gydytojo $nr !!! <br />" . mysqli_error(getPrisijungimas());

    }
}

//editeDoctor("10", "Ona", "Petrauskiene"); //testavimui


// 8. getDoctors($kiekGydytoju=99999) 
//is DB paima visus arba nurodyta skaiciu gydytoju
//$kiekis-kiek paimti gydytoju, (jeigu kiekis nenurodomas, paima visus)

function getDoctors($kiekis = 999) {
    $kiekis = mysqli_real_escape_string(getPrisijungimas(), $kiekis);   //eilute tik e-shopui
    $manoSQL = "SELECT * FROM doctors 
                         ORDER BY lname 
                         LIMIT $kiekis ";
    $resultsOBJEKTAS = mysqli_query(getPrisijungimas (), $manoSQL);
    return $resultsOBJEKTAS; //Cia NE masyvas!!!

}
//pvz

// $visiGydytojaiNeMasyvas = getDoctors(5); // $visiGydytojai = NE masyvas

// $gydytojasArray = mysqli_fetch_assoc($visiGydytojaiNeMasyvas ); //paima VIENA eilute is DB ir pavercia i masyva

// while ($gydytojasArray) { //tikrina ar Array pilnas
//     echo $gydytojasArray['name'] . " " . $gydytojasArray['lname'] . "<br/>";
//     $gydytojasArray = mysqli_fetch_assoc($visiGydytojaiNeMasyvas ); 
// }




