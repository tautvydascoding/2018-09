<?php


// 1. sukurti tuscia porjekta (default)
// 1.1 viduje susikurti doctor.php faila

// 2. doctor.php faile parasyti PHP koda:
    $numeris = 2;
    $gydytojas = getDoctors( $numeris);
    echo $gydytojas[1];
    echo $gydytojas["name"];

// 3. pasileisti Narsykleje si puslapi (doctor.php ne index.php, Narsykles adreso ivedimo lange (paciam gale) prirasyti : doctor.php)
// 3.1 istaisyti klaida: function 'getDoctors' nor found
// 3.1.1 isideti i projekta faila: db_functions.php
// 3.1.1 isideti i  faila: doctor.php:
include('db_functions.php');

// 4. faile  pakeisti $numeris = 3;
// 4. faile  pakeisti $numeris = 4;
// ir paziureti kas bus
