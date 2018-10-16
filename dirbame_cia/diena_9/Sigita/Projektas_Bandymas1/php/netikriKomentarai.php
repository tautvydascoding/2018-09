
<?php include("prisijungimasDBkomentarai.php");?>
<?php  for ($i= 13; $i < 25 ; $i++) {
$koment = getKomentarai($i); //is duomenu bazes paima nurodyta komentara;
// Iklijuojam template komentaram
include ("template_komentarams.php");
}

?>
<a href="delete13.php"><button type="button" name="button" style="height:10%;">Ištrinti 1 komentarą</button></a>
<a href="delete14.php"><button type="button" name="button" style="height:10%;">Ištrinti 2 komentarą</button></a>
<a href="delete15.php"><button type="button" name="button" style="height:10%;">Ištrinti 3 komentarą</button></a>
<a href="delete16.php"><button type="button" name="button" style="height:10%;">Ištrinti 4 komentarą</button></a>
<a href="delete17.php"><button type="button" name="button" style="height:10%;">Ištrinti 5 komentarą</button></a><br />
<a href="delete18.php"><button type="button" name="button" style="height:10%;">Ištrinti 6 komentarą</button></a>
<a href="delete19.php"><button type="button" name="button" style="height:10%;">Ištrinti 7 komentarą</button></a>
<a href="delete20.php"><button type="button" name="button" style="height:10%;">Ištrinti 8 komentarą</button></a>
<a href="delete21.php"><button type="button" name="button" style="height:10%;">Ištrinti 9 komentarą</button></a>
<a href="delete22.php"><button type="button" name="button" style="height:10%;">Ištrinti 10 komentarą</button></a>


<a href="apie.php"><button type="button" name="button" style="height:10%;">ATGAL</button></a>
