<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS vissade zemiau -->
        <!--link rel="stylesheet" href="css/style.css"-->

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!-- <h1> Ziureti i console (inspect element)  </h1> -->
 <!-- <div >

   <?php for($i=0; $i<3; $i++){
  echo "<button>Mygtukas</button>";
}?>
</div>  -->
<?php
$names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

$lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
?>
<!-- eiles nr; vardas, pavarde -->
<?php $kiekisElementu = count($lastNames);
      echo $kiekisElementu;
      echo count($names);
?>
 <!-- <table class="table table-striped"> -->

  <!-- <tr>
    <th>Nr</th>
    <th>Vardas</th>
    <th>Pavarde</th>
  </tr>

  <?php /*for ($i=0; $i < $kiekisElementu; $i++) { ?>
    <tr>
      <td><?php echo $i+1; ?></td>
      <td><?php echo $names[$i]; ?></td>
      <td><?php echo $lastNames[$i]; ?></td>
    </tr>
  <?php };*/ ?>

</table> -->


// =============================

  <table class= "table ">

    <tr>
      <th>Nr</th>
      <th>Vardas</th>
      <th>Pavarde</th>
      <th>Vardo Eil.Nr.</th>
      <th>Pavardes Eil.Nr.</th>
    </tr>
<?php

$duomenys = array();
for ($i=0; $i <200 ; $i++) {
  $randomVardas = rand (0,count($names)-1 );
  $randomPavarde = rand (0,count($lastNames)-1 );
  $duomenys1[$i]= array("vardas" => $names[$randomVardas], "vardo Eil.Nr"  => $randomVardas,"pavarde" => $lastNames[$randomPavarde], "pavardes Eil.Nr"  => $randomPavarde);
?>
  <tr>
    <td><?php echo $i+1; ?></td>
    <td><?php echo $duomenys1[$i]["vardas"]; ?></td>
    <td><?php echo $duomenys1[$i]["pavarde"] ?></td>
    <td><?php echo $duomenys1[$i]["vardo Eil.Nr"] ?></td>
    <td><?php echo $duomenys1[$i]["pavardes Eil.Nr"] ?></td>
  </tr>

<?php } ?>

</table>








        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <!--script type="text/javascript"  src="main.js">      </script-->

    </body>
</html>
