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



              <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"   +></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../imgs/begimas1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/begimas2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/begimas3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
            </div>




            <div class="col-md-6 aukstis-200 foto_pradinis">
              <img src="../imgs/begimas1.jpg" alt="beganti moteris" class="image-fluid rounded foto_pradinis1">
            </div>
            <div class="col-md-6 aukstis-200 foto_pradinis">
              <img src="../imgs/begimas2.jpg" alt="begantys vyrai" class="image-fluid rounded foto_pradinis2">
            </div>
          </div>
        </div>

        <div class="col-md-12 bg-primary aukstis-200">



          antras  <?php
              $straipsnis = getStraipsnis(3);
              echo  "<h2 class='text-center'>$straipsnis[1]</h2>"

              . " " .
              "<p>$straipsnis[2]</p>" . "<h5 class='text-right'>$straipsnis[3]</h5>"  . "<br />";

            ?>
        </div>
        <div class="col-md-6 bg-secondary aukstis-350">
          trecias <?php
              $straipsnis = getStraipsnis(2);
              echo  "<h2 class='text-center'>$straipsnis[1]</h2>"

              . " " .
              "<p class='text-justify'>$straipsnis[2]</p>" . "<h5 class='text-right'>$straipsnis[3]</h5>"  . "<br />";

            ?>

        </div>
        <div class="col-md-6 bg-secondary aukstis-350">
          ketvirtas <?php
              $straipsnis = getStraipsnis(4);
              echo  "<h2 class='text-center'>$straipsnis[1]</h2>"

              . " " .
              "<p>$straipsnis[2]</p>" . "<h5 class='text-right'>$straipsnis[3]</h5>"  . "<br />";

            ?>

        </div>
        <div class="col-md-4 bg-success aukstis-350">
          <img src="../imgs/begimas4.jpg" class="img-fluid img-thumbnail" alt="begantis vyras">
        </div>
        <div class="col-md-4 bg-warning aukstis-350">
          <img src="../imgs/begimas3.jpg" class="img-fluid img-thumbnail" alt="begantis vyras">
        </div>
        <div class="col-md-4 bg-danger aukstis-350">
          <img src="../imgs/begimas5.jpg" class="img-fluid img-thumbnail" alt="beganti moteris">
        </div>
      </main>

  <!--  end of main---------------------------------------------------------->

    <?php include 'footer.php' ?>
