<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap.css">

  <!-- !!! mano CSS vissade zemiau -->
  <link rel="stylesheet" href="../css/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<!-- Header konteineris prasideda GALIMA ITRAUKTI I PHP==================-->

<?php include('header.php') ?>
  <!--Header konteinerio pabaiga GALIMA ITRAUKTI I PHP===================  -->

  <!--  Pgrindines dalies konteineris prasideda ======-->
  <div class="container"   style="background-image: url('../galerija/greyLight.jpg')">
    <main class="col-md-12">
      <section id="contact">
          <div class="well well-sm">
            <h3>Mus rasite: Pakraščio g. 20 Kaunas</h3>
          </div>

          <div class="row">
            <div class="col-md-7">
            </div>
            <div>
              <div><iframe width="500" height="500" src="https://maps.google.com/maps?q=kaunas%20Pakra%C5%A1%C4%8Dio%2020&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="2" scrolling="no" ></iframe></div>
            </div>
            <div class="col-md-5">
              <h3><strong>Susisiekite</strong></h3>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" name="" value="" placeholder="Vardas">
          </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="" value="" placeholder="El.paštas">
          </div>
                    <div class="form-group">
                      <input type="tel" class="form-control" name="" value="" placeholder="Telefono numeris">
          </div>
                      <div class="form-group">
                        <textarea class="form-control" name="" rows="3" placeholder="Žinutė"></textarea>
                      </div>

                      <button class="mygtukasMeniu" type="submit" name="button">
            </i> SIŲSTI</button>
              </form>
            </div>
          </div>

      </section>

    </main>

  </div>
  <!--Pagrindines dalies konteinerio pabaiga=========  -->

  <!-- Footerio konteineris prasideda================= FOOTERI GALIMA ITRAUKTI I PHP-->

  <?php include("footer.php") ?>

  <!-- Footeris -->



</html>
