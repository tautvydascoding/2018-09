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
        <?php $Sveiki = "Hello hello";?>
        <?php $rodyti_Mygtuka = true;?>
        <input type="text" name="" value="<?php echo 'Hello world'?>">
        <?php
        if ($rodyti_Mygtuka) {
          ?>
          <div>
            <button>Mygtukas</button>
          </div>
          <?php
        }
        for ($i = 0; $i<3; $i++){ ?>
          <div>
            <button>Mygtukas</button>
          </div>
          <?php
        }
        ?>
        <table>
        <?php
        $duomenys[0] = "Pirmas";
        $duomenys[1] = "Antras";
        $duomenys[2] = "Trecias";

        for ($i = 0; $i < 3; $i++){
          ?>
          <tr>
            <td> <div>
              <?php echo $duomenys[$i];?>
            </div>
          </td>
          <td>
          <?php echo "kazkoks kitas kintamasis";?>
        </td>
        <td>
        Ismesti
      </td>
          </tr>
          <?php
        }
?>
    </table>
<h2></h2>
<h2></h2>
<?php
$names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

$lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
?>
<?php
$kiekisElementu = count($names);
echo $kiekisElementu;
$kiekGiElementu = count($lastNames);
echo $kiekGiElementu; //kiek elementu yra masyve
//suformuoti lentele:el. nr.,vardas, pavarde,, duomenis imti is masyvu names ir lastnames
?>
<table class= "table table-striped">

  <?php for ($i = 0; $i < $kiekisElementu; $i++){ ?>
    <tr>
      <td> <?php echo $i+1 ?></td>
      <td><?php echo $names[$i];?></td>
      <td><?php echo $lastNames[$i];?></td>
    </tr>
  <?php } ?>
</table>








        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="main.js">   </script>
        <script type="text/javascript" src="jquery-3.2.1.min.js">

        </script>
    </body>
</html>
