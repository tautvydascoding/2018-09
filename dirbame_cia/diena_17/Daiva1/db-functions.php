<?php


   $arRodytiZinutes = true;  // $debugMode = 0-2

   // konstantos
   define("DB_PAVADINIMAS", "hostal19" );
   define("DB_VARTOTOJAS", "root" );  // root
   define("DB_SLAPTAZODIS", "root" );  // root
   define("DB_HOST", "localhost");

   $prisijungimas = mysqli_connect(  DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

   if ($prisijungimas) {
        echo "Prisijungei prie DB  <br />";
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

   ?>
