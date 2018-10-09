<?php
// UZDUOTIS: createDoctor() paleidimas per narsykle

// 1.1 sukurti PHP faila  naujasGydytojas.php
// 1.2. faile paleisti:
include('db_functions.php');
createDoctor("Juozas", "Juozaitis");
echo "Gydytojas sukurtas sekmingai! <br />";


// 1.3. Narsykleje nueiti:
    localhost/ ... /naujasGydytojas.php


// UZDUOTIS: deleteDoctor() paleidimas per narsykle
// 2.1. sukurti PHP faila  trintiGydytoja.php
// 2.2. faile paleisti:
include('db_functions.php');
deleteDoctor(4);
echo "Gydytojas ISTRINTAS sekmingai! <br />";

// 2.3. Narsykleje nueiti:
    localhost/ ... /trintiGydytoja.php
