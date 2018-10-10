

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
       <h4 class="card-title">Salotos</h4>
       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

     </div>

     </div>


<?php
include("blogas.php");
?>
<?php
include("footer.php");
?>
