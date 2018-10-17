<?php include 'header.php'; ?>

<main class="">

<div class="container">
  <h2 class="text-center mb-md-5">Nuotraukų Galerija</h2>

  <div class="row">
    <?php
include 'db_funkcijos.php';
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




</main>

<?php include 'footer.php'; ?>
