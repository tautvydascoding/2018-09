<!--  strapsniu skilties pradzia-->
<div class="container">
  <div class="row">
<!--  su for ciklu Ikeliam DB isvestus strapsnius-->
         <?php include("prisijungimasDBstraipsniai.php");
         for ($i= 1; $i < 7 ; $i++) {
         $str = getStraipsniai($i); //is duomenu bazes paima nurodyta straipsni;
         // Iklijuojam template straipsniam
         include ("templates_straipsniams.php");
         }
 ?>
  </div>
<!-- uzsibaigia row -->
</div>
<!-- uzsibaigia konteineris -->
