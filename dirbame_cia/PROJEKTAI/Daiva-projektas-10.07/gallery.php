



<?php
include_once("db-function.php");
 //  nuotrauku is DB isvedimas
 $foto = getGalerija( 1);  // is DB paima nurodyta nuotrauka
 ?>

 <div id="gallery" class="row mt-3 card-section">
     <div class="col-md-4  col-md-4  col-md-4 card " >
              <img class="card-img-top" src="foto/<?php echo $foto[1] ?>" alt="Card image cap">
               <div class="card-block">
              <h4 class="card-title"><?php echo $foto[4] ?></h4>
              <p class="card-text"><?php echo $foto[3] ?></p>
              </div>
    </div>

    <?php
    include_once("db-function.php");
     $foto = getGalerija( 2);
    ?>
   <div class="col-md-4  col-md-4  col-md-4 card " >
        <img class="card-img-top" src="foto/<?php echo $foto[1] ?>" alt="Card image cap">
         <div class="card-block">
        <h4 class="card-title"><?php echo $foto[4] ?></h4>
        <p class="card-text"><?php echo $foto[3] ?></p>
        </div>
  </div>

<?php
include_once("db-function.php");
$foto = getGalerija( 5);
?>
<div class="col-md-4  col-md-4  col-md-4 card " >

        <img class="card-img-top" src="foto/<?php echo $foto[1] ?>" alt="Card image cap">
         <div class="card-block">
        <h4 class="card-title"><?php echo $foto[4] ?></h4>
        <p class="card-text"><?php echo $foto[3] ?></p>
        </div>
</div>


</div>
