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

<?php $sveiki = "Hello world";
$rodyti_Mygtuka = true;
?>
<input type="text" name="" value="<?php echo $sveiki; ?>">

<?php
$rodyti_Mygtuka = false;
if ($rodyti_Mygtuka) {

}
?>
<div>
  <button type="button" name="button">Mygtukas</button>
</div>

<?php
for ($i = 0; $i<3; $i++){
?>
<div>
  <button type="button" name="button">Kiti mygtukai</button>
</div>
<input type="text" name="" value="<?php echo "hello world"; ?>">
<?php
}
?>
<?php
echo "Hello world <br>";
echo "Hello world <br>";
echo "Hello world <br>";
echo "Hello world <br>";
echo "Something went wrong, please help me, im in the computer and cant get out";
?>
<?php
$duomenys[0] = "Pirmas";
$duomenys[1] = "Andtras";
$duomenys[2] = "Trecias";

for ($i = 0; $i<3; $i++){

?>
<tr><td>
  <div>
    <?php echo $duomenys[$i]; ?>
  </div>
</td>
<td>
  <?php echo "kazkoks kitas kintamasis"; ?>
</td>
<td>
Ismesti
</td>
</tr>
<?php
}
?>
<?php
echo "<br> =========================================================="
?>

<?php $names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

$lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

?>

<!-- $kiekisElementu = count($names); -->
<!-- kiekis elemente -->

<?php
$kiekisElementu = count($names);
echo $kiekisElementu;
$kiekisDuElementu = count($lastNames);
echo $kiekisDuElementu;
// suformoti lentele su vardas, pavarde ir eiles nr.
?>
<table class = "table">
<?php
for ($i = 0; $i<$kiekisElementu; $i++) { ?>
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
    </tr>
  </thead>
  <thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i+1 ?></th>
      <td><?php echo $names[$i]; ?></td>
      <td><?php echo $lastNames[$i]; ?></td>
    </tr>
  </thead>
  </tbody>
<!-- <tr>
  <td> <?php echo $i+1 ?> </td>
  <td><?php echo $names[$i]; ?></td>
  <td><?php echo $lastNames[$i]; ?></td>
</tr> -->

<?php
}
?>
</table>


<?php echo "=============================================================" ?>

<!-- sugeneruoti 200 atsitiktiniu zmoniu vardu ir pavardziu kombinaciju ir jos sudeti graziai i lentele (eil.nr, vardas, pavarde, vardo eiles nr. pavardes eil nr.) -->
<!-- var zmogus = {names: "vardas", } -->
<?php  $duomenys = array ();
 for ($i = 0; $i<200; $i++){
   $rnV = rand(0,count($lastNames)-1);
   $rnP = rand(0,count($names)-1);
   // suveike rnV prie last name ir rnP prie names,kadangi du masyvai yra vienodi( rnV ir rnP yra masyvai)
   $duomenys[$i] = array ("vardas" => $names[$rnV], "vardoEilNr" => $rnV, "pavarde" => $lastNames[$rnP], "pavardesEilNR" => $rnP);
   ?>
   <table class="table table-striped table-dark">
     <!-- for ($i = 0 (galima cia keist jei norim nuo kito pradet numerio); $i<200; $i++) -->
     <thead>
       <tr>
         <th scope="col">No.</th>
         <th scope="col">Name</th>
         <th scope="col">Vardo Eil. No.</th>
         <th scope="col">Pavarde</th>
         <th scope="col">Pavardes eil. No.</th>
       </tr>
     </thead>
     <!-- cia ideti visa funkcija kad gautusi grazesne lentele -->
     <tbody>
       <tr>
         <th scope="row"><?php echo $i+1 ?></th>
         <td><?php echo $duomenys[$i] ['vardas']; ?></td>
         <td><?php echo $duomenys[$i] ['vardoEilNr']; ?></td>
         <td><?php echo $duomenys[$i] ['pavarde']; ?></td>
         <td><?php echo $duomenys[$i] ['pavardesEilNR']; ?></td>
       </tr>
     </tbody>
</table>
<!-- <table class="table">
  <tr>
    <td><?php echo $duomenys[$i] ['vardas']; ?></td>
    <td><?php echo $duomenys[$i] ['vardoEilNr']; ?></td>
    <td><?php echo $duomenys[$i] ['pavarde']; ?></td>
    <td><?php echo $duomenys[$i] ['pavardesEilNR']; ?></td>
  </tr>
</table> -->

<?php } ?>
<?php echo "================================================uzduotis=================================" ?>



























  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src=jquery/jquery.js> </script> <script type="text/javascript" src="main.js"> </script>

</body>

</html>
