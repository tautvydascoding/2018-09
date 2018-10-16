<!--  strapsniu skilties pradzia-->
<div class="container">
  <div class="row">
<!--  su for ciklu Ikeliam DB isvestus strapsnius-->
         <?php include("prisijungimasDB.php");
         for ($i= 1; $i < 7 ; $i++) {
         $str = getStraipsniai($i); //is duomenu bazes paima nurodyta straipsni;
         // Iklijuojam template straipsniam
         include ("templates_straipsniams.php");
         }
 ?>
 <!-- echo "<div class='row'>";
				 for ($i=1; $i < 11; $i++) {
						 $gydytojas = getDoctor( $i );  // is DB paima nurodyta gydytoja

						 include("paruostukas-template.php");
						 if ($i % 3 == 0) {
								 echo "</div> <div class='row'>  ";
						 }
				 }
 echo "</div>"; -->
  </div>
<!-- uzsibaigia row -->
</div>
<!-- uzsibaigia konteineris -->
