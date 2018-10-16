

<div class="col-md-4 kuponai" style="background-image:url("greyLight.jpg")">
<!--  nuotrauka nuolaidos-->
<img style="max-width: 100%; max-height: 300px;" src="../galerija/<?php echo $nuolaida[1];?>" alt='nuolaida'/>
<!-- tekstas nuolaidos -->
<!--kodas nuolaidos  -->

  <p><?php  echo $nuolaida[2];?></p></br>
<a href="atskiraNuolaida.php?x=<?php echo $nuolaida[0];  ?>"> <span class="promo"><?php  echo $nuolaida[3];?></span> </a>
  <!--  galiojimo laikas-->
  <h6> Spausk ant nuolaidos kodo ir rezervuok!</h6>
  <p class="expire"><?php  echo $nuolaida[4];?></p>


</div>
