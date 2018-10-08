<?php
        
        // deleteDoctor() paleidimas per narsykle
        // // 2.1. sukurti PHP faila  trintiGydytoja.php
        // // 2.2. faile paleisti:
         include('db-functions.php');
    
    function deleteDoctor($nr) {
    $nr = mysqli_real_escape_string(getPrisijungimas(), $nr);

    $query = "DELETE FROM `doctors` WHERE `id` = $nr;";
    $arPavyko = mysqli_query( getPrisijungimas(), $query);

    if ($arPavyko ==false && $arRodytiZinutes == true) {
        //if (!$arPavyko && $arRodytiZinutes) {
            echo "ERROR: nepavyko istrinti gydytojo $nr !!! <br />" . mysqli_errno(getPrisijungimas());

    }
}
    deleteDoctor(4);
    
        // // 2.3. Narsykleje nueiti:
        //     localhost/ ... /trintiGydytoja.php

    

