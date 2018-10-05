 <?php
    $arRodytiZinutes = true;  // $debugMode = 0-2

    // konstantos
    define("DB_PAVADINIMAS", "hospital9" );
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

    //
