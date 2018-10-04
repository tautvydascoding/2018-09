<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h1>PHP</h1>

<?php
$names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

$lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
?>
<!-- //sugeneruoti 200 stsitiktiniu zmoniu vardu ir pavardziu kombinaciju ir juos sudeti graziai i lentele.
//eil nr., vardas, pavarde, vardoEilNr, pavardesEilNr, -->
  <table class="table">
<?php
$duomenys = array();
for ($i = 0; $i < 200; $i++) {
  $rnP = rand(0, count($lastNames)-1);
  $rnV = rand(0, count($names)-1);

  $duomenys[$i] = array("Vardas" => $names[$rnV], "pavarde" => $lastNames[$rnP], "eilNr" => $rnP, "pavarEilNr" => $rnV );
?>


    <tr>
      <td> <?php echo $i+1 ?></td>
      <td> <?php echo $duomenys[$i]['Vardas'] ?></td>
      <td> <?php echo $duomenys[$i]['pavarde'] ?></td>
      <td> <?php echo $duomenys[$i]['eilNr'] ?></td>
      <td> <?php echo $duomenys[$i]['pavarEilNr'] ?></td>
    </tr>

  <?php } ?>
  </table>








  <!-- js puslapio apacioje -->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- !!! mano js failas - VISADA pats zemiausias -->
  <script type="text/javascript" src="main.js">   </script>
  <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    </body>
</html>
