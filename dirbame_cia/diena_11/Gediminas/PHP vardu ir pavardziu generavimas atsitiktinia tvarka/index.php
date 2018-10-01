<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS vissade zemiau -->
        <link rel="stylesheet" href="css/style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

<?php
$names = array("Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren");

$lastNames = array("Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel");


//sugeneruoti 200 atsitiktiniu vardu ir pavardzu kombinaciju
//ir juos sudeti graziai i lentele
//eil nr vardas, pavarde, vardo eilnr, pavardeEilNR.
 ?>

 <?php
 $duomenys = array();
 for ($i = 0; $i < 200; $i++) {
     $rnP = rand(0, count($lastNames)-1) ; // generuoja atsitiktini skaiciu pavardei
     $rnV = rand(0, count($names)-1) ; // generuoja atsitiktini skaiciu vardui
     $duomenys[$i] = array("vardas" => $names[$rnV], "vardoEilNr" => $rnV, "pavarde" => $lastNames[$rnP], "pavardesEilNr" => $rnP+1);
 }
 ?>

 <table class="table table-sm  table-striped">
     <tr>
         <th>Eil.Nr.</th>
         <th>Vardas</th>
         <th>Vardo eiles nr.</th>
         <th>Pavarde</th>
         <th>Pavardes eiles nr.</th>
     </tr>

     <?php for ($i = 0; $i < 200; $i++) { ?>
     <tr>
         <td><?php echo $i+1; ?></td>
         <td><?php echo $duomenys[$i] ["vardas"]; ?></td>
         <td><?php echo $duomenys[$i] ["vardoEilNr"]; ?></td>
         <td><?php echo $duomenys[$i] ["pavarde"]; ?></td>
         <td><?php echo $duomenys[$i] ["pavardesEilNr"]; ?></td>
     </tr>
     <?php } ?>

 </table>











































































        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
