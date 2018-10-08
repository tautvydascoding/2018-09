<?php
        // createDoctor() paleidimas per narsykle
        // 1.1 sukurti PHP faila  naujasGydytojas.php
        // 1.2. faile paleisti:
        
    include('db-functions.php');

        
    // function createDoctor($vardas, $pavarde) {

    //     $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
    //     $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);

    //     $manoSQL = "INSERT INTO `doctors`(`id`, `name`, `lname`) VALUE (NULL,'$vardas','$pavarde')";
    //     $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    //         if ($arPavyko ==false && $arRodytiZinutes == true) {
    //             echo "ERROR: nepavyko sukurti gydytojo!!! <br />" . mysqli_errno(getPrisijungimas());
    //         }
    //     }

    //     createDoctor("Juozas", "Juozaitis");

        // // 1.3. Narsykleje nueiti:
        //     localhost/ ... /naujasGydytojas.php



//uzduotys-3.1-php-doctor-register.php


// createDoctor() paleidimas per narsykle per su mygtuku

// 1.1 sukurti PHP faila  naujasGydytojas.php
// 1.2. faile paleisti:
include('db-functions.php');

$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);


// // 1.3. Narsykleje nueiti (pamatysite klaida):
//     localhost/ ... /naujasGydytojas.php

// // 1.4. Narsykleje nueiti:
//     localhost/ ... /naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS

// // 1.5 faile index.php
// // susikurti mygtuka "Naujas gydytojas" su "a" linku.
// // "a" linkas turi rodyti i :   naujasGydytojas.php?vard=TOMAS&parv=TOMAUSKIS
// // pvz:
// <a href='naujasGydytojas.php?vard=TOMAS&parv=TOMAUSKIS'> Kurti Nauja</a>
// // ta pati padaryti su DELETE