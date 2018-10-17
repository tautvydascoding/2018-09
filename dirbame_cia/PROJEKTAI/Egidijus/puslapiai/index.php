<?php include 'header.php'; ?>

<!--  end of header---------------------------------------------------------->
      <main class="row">
        <div class="col-md-12 aukstis-350">
          <div class="row">
            <div class="col-md-12 aukstis-150">

              <?php
                  include 'db_funkcijos.php';
                  $straipsnis = getStraipsnis(1);
                  echo  "<h2 class='text-center'>$straipsnis[1]</h2>"

                  . " " .
                  "<p class='text-justify'>$straipsnis[2]</p>" . "<h5 class='text-right'>$straipsnis[3]</h5>"  . "<br />";

                ?>
            </div>

            <div class="col-md-12">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="../imgs/run2.jpg" alt="Bėgikai">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="../imgs/run5.jpg" alt="Bėgikai">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="../imgs/run3.jpg" alt="Bėgikai">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="https://images.pexels.com/photos/221210/pexels-photo-221210.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Bėgikai">
</div>


<div class="carousel-item">
<img class="d-block w-100" src="https://images.pexels.com/photos/415261/pexels-photo-415261.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Bėgikai">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Atgal</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Toliau</span>
</a>
</div>
            </div>






        <div class="col-md-12 aukstis-200">



            <?php
              $straipsnis = getStraipsnis(3);
              echo  "<h2 class='text-center'>$straipsnis[1]</h2>"

              . " " .
              "<p>$straipsnis[2]</p>" . "<h5 class='text-right'>$straipsnis[3]</h5>"  . "<br />";

            ?>
        </div>
        <div class="col-md-6 aukstis-350">
           <?php
              $straipsnis = getStraipsnis(2);
              echo  "<h2 class='text-center'>$straipsnis[1]</h2>"

              . " " .
              "<p class='text-justify'>$straipsnis[2]</p>" . "<h5 class='text-right'>$straipsnis[3]</h5>"  . "<br />";

            ?>

        </div>
        <div class="col-md-6 aukstis-350">
           <?php
              $straipsnis = getStraipsnis(4);
              echo  "<h2 class='text-center'>$straipsnis[1]</h2>"

              . " " .
              "<p>$straipsnis[2]</p>" . "<h5 class='text-right'>$straipsnis[3]</h5>"  . "<br />";

            ?>

        </div>
        <div class="col-md-4 aukstis-350">
          <img src="../imgs/begimas4.jpg" class="img-fluid img-thumbnail" alt="begantis vyras">
        </div>
        <div class="col-md-4 aukstis-350">
          <img src="../imgs/begimas3.jpg" class="img-fluid img-thumbnail" alt="begantis vyras">
        </div>
        <div class="col-md-4 aukstis-350">
          <img src="../imgs/begimas5.jpg" class="img-fluid img-thumbnail" alt="beganti moteris">
        </div>
      </main>

  <!--  end of main---------------------------------------------------------->

    <?php include 'footer.php' ?>
