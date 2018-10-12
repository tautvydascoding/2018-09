<?php include 'header.php'; ?>

<main class="">

<div class="container">
  <h2 class="text-center mb-md-5">Nuotraukų Galerija</h2>

  <div class="row">

    <!-- <div class="col-md-4">
      <div class="thumbnail">
        <a href="../imgs/run1.jpg" target="_blank">
          <img src="../imgs/run1.jpg" alt="bėganti moteris" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div> -->



    <?php
        include 'db_funkcijos.php';

//         for ($i = 1; $i <= 7; $i++){
//           $foto = getFoto($i);
//               echo  "<img src='../imgs/$foto[1]' alt=''>";
//
//               echo "<div class='col-md-4'>" .
//
//                 "<div class='thumbnail'>" .
//
//               "<a href='../imgs/$foto[1]' target='_blank'>" .
//
//                     "<img src'../imgs/$foto[1]' alt='bėganti moteris' style='width:100%'>" .
//
//                     "<div class='caption'>" .
//
//                       "<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>" .
//
//                     "</div>" .
//
//                   "</a>" .
//
//                 "</div>" .
//
//               "</div>";
//
//          }
//
//
//
//
//       ?>

 <?php

    for ($i = 1; $i <= 12; $i++){
      $foto = getFoto($i);


    echo      "<div class='col-md-4'>
            <div class='thumbnail'>
              <a href='../imgs/$foto[1]' target='_blank'>
                <img src='../imgs/$foto[1]' alt='begimas' style='width:100%'>
                <div class='caption'>
                  <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                </div>
              </a>
            </div>
          </div>" ;



     }




  ?>





      <!-- <div class="container">
        <h2>Carousel Example</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!- Indicators -->



</main>

<?php include 'footer.php'; ?>
