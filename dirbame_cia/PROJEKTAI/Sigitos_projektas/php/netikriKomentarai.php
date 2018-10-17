
<?php include("prisijungimasDBkomentarai.php");
for ($i= 17; $i < 27 ; $i++) {
$koment = getKomentarai($i); //is duomenu bazes paima nurodyta komentara;
// Iklijuojam template komentaram
include ("template_komentarams.php");
}
?>
<div class="col-md-12"  style="border:1px solid grey; margin:5px;">
<h5><em> <?php  echo $koment[1];?> </em></h5>

<!-- autorius komentaro -->
<div>
  <?php  echo $koment[2]; ?>
</div>

<!--komentaru tekstas tekstas  -->

<a href="deleteKomentara.php?x=<?php echo $koment[0] ?>"><button type="button" name="button" style="height:10%;">Ištrinti 1 komentarą</button></a>

<a href="apie.php"><button type="button" name="button" style="height:10%;">ATGAL</button></a>
