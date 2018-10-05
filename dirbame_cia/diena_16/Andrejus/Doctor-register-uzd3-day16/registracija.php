<form class="" action="template-registracija.php" method="post">
  <input type="text" name="vardas" placeholder="Jusu vardas" autocomplete="on" autofocus > <br>
  <input type="text" name="pavarde" placeholder="Jusu pavarde" autocomplete="on" autofocus  > <br>
  <button type="submit" name="button">Registruotis</button> <br>
</form>
<?php
include(DB-functions.php)
$numeris = $_GET["x"];
$gydytojas = getDoctor($numeris);
// echo "<ul> <li class><p>$gydytojas[0]</li>  <li><p>$gydytojas[1]</li> <li><p>$gydytojas[2]</li></p> </ul>";
for ($i=0; $i < 1 ; $i++) {
  echo "<a href=''>$gydytojas[2]</a>";
}
?>
