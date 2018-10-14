

<?php
include("header.php");
include("main.php");

 ?>

 <?php
 include_once("db-function.php");




  // visu nuotrauku is DB isvedimas
      $foto = getGalerija( 1 );  // is DB paima nurodyta nuotrauku

  ?>

      <div class="col-md-4  col-md-4  col-md-4 card " >

               <img class="card-img-top" src="foto/<?php echo $foto[1] ?>" alt="Card image cap">
                <div class="card-block">
               <h4 class="card-title"><?php echo $foto[4] ?></h4>
               <p class="card-text"><?php echo $foto[3] ?></p>

     </div>

     </div>


<?php
include("blogas.php");
?>
<?php
include("footer.php");
?>
