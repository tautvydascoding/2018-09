<?php

// createDoctor() paleidimas per narsykle per su mygtuku

// 1.1 sukurti PHP faila  naujasGydytojas.php
// 1.2. faile paleisti:
include('db_functions.php');
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);
// 1.3. Narsykleje nueiti:
//     localhost/ ... /naujasGydytojas.php
// 1.4. Narsykleje nueiti:
//     localhost/ ... /naujasGydytojas.php?vard=TOMAS&parv=TOMAUSKIS

// 1.5 faile index.php
// susikurti mygtuka"Naujas gydytojas" su "a" linku.
// "a" linkas turi rodyti i :
// naujasGydytojas.php?vard=TOMAS&parv=TOMAUSKIS



// ta pati padaryti su DELETE
