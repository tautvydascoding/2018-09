<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Pamoka</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS vissade zemiau -->
        <link rel="stylesheet" href="css/style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="container">

        <h1 class="bg-success text-center"> Ziureti i console  </h1>
        <?php echo "PHP veikia"; ?>
        <?php  $sveiki = "hello world" ;
        $rodyti_Mygtuka = false;
        ?>
        <input type="text" value="<?php echo "$sveiki"; ?>"</input>
        <<?php
        if ($rodyti_Mygtuka) {
        ?>
        <div class="">
          <button type="button" name="button">Mygtukas</button>
        </div>
        <?php
      }
        echo "hello world <br>";

        ?>



         ?>
        <br>

        <br>

        <input type="text" name="" value="">

        <button type="button" name="button">Mygtukas</button>

      <table>
        <?php


      $duomenys[0] = "Pirmas";
      $duomenys[1] = "Antras";
      $duomenys[2] = "Trečias";

      for ($i=0; $i <3 ; $i++) {
        ?>
        <tr><td>
        <div class="">
        <?php echo "$duomenys[$i]"; ?>
      </div>
    </td>
    <td>
      <?php echo "kitas kintamasis"; ?>
    </td>
  </tr>
  <?php
}

   ?>
 }
</table>
<!-- - ------------------------------------------------------------------->
<?php
$names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

$lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


?>
<table class="table-striped bg-light text-center display-4">
  <?php
$c = count($names);
// echo "$c";

  for ($i=0; $i <$c ; $i++) {
    ?>
    <tr>
      <td><?php echo $i+1; ?></td>
      <td><div class=""><?php echo "$names[$i]"; ?></div></td>
      <td><div><?php echo "$lastNames[$i]" ;?></div></td>


  </tr>
  <?php
  }
  ?>
</table>
<!--  --------------------------------------------------------------------->
<!-- sugeneruoti  200 atsitiktinių žmonių vardų ir kombinacijų  ir juos sudėti į lentelę, eilės nr. vardas, pavardė, vardo eilės nr, pavardės eilės nr.  -->

<?php
$duomenys = array();
for ($i=0; $i < 200 ; $i++) {
  $rnV = rand (0, count($lastNames)-1);
        $rnP = rand (0, count($names)-1);
  $duomenys[$i] = array("vardas" => $names[$rnV], "vardoEilNr" => $rnV);

}
?>
<table class="table-dark">
  <tr>
    <td><?php echo $duomenys[33]['vardas']; ?></td>
<td><?php echo $duomenys[33]['vardoEilNr'];?></td>
  </tr>

</table>







<!--  ---------------------------------------------------------------------->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
