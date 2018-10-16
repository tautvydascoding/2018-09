
 <?php

include_once("db-function-gallery.php");
  echo '<div class="row mt-3 col-md-4">';

//visu 3 foto isvedimas  is DB isvedimas:
    for ($i=1; $i < 4; $i++) {
        $foto = getGalerija($i);
        include("template-gallery.php");

        if ($i % 3 ==0) {
         echo '</div> <div class="col-md-4"> ';
        }
    };

 echo '</div>';

?>
