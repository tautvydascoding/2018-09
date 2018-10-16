<!--  strapsniu skilties pradzia-->
<div class="container">
  <div class="row">
<!--  su for ciklu Ikeliam DB isvestas nuolaidas-->
         <?php include("prisijungimasDBnuolaidos.php");
         for ($i= 1; $i < 7 ; $i++) {
         $nuolaida = getNuolaidos($i); //is duomenu bazes paima nurodyta nuolaida;
         // Iklijuojam template nuolaidom
         include ("templates_nuolaidos.php");
         }


 ?>
  </div>
<!-- uzsibaigia row -->
</div>
<!-- uzsibaigia konteineris -->
