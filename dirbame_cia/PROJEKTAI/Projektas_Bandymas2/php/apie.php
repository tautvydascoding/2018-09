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
<!-- Header konteineris prasideda ==================-->
<?php include('header.php') ?>
<!--Header konteinerio pabaiga ===================  -->

<!--  Pagrindines dalies konteineris prasideda ======-->
<div class="container border border-top" >
  <main class="row" >

    <!--  Assmenybes aprasymas prasideda-->
  <article class="col-md-5">

    <h3><b><em>Raimonda Ivanauskiene</em></b></h3>
    <p style="text-align: justify;"> <strong> <em>Ilgalaikio makiažo specialistė </em></strong></br> <img class="nuotrauka2" src="../galerija/41790381_311864902925830_4691595899309129728_n.jpg" alt="pagrindine"> </br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. lorem</p>
  </article>
  <!--  Asmenybes aprasymas baigiasi-->
  <!-- komentaru/atsiliepimu forma  plius uzklausa su duomenu paemimu i Duomenu Baze -->
  <form action="create-komentarai.php" method="get" class="col-md-6">
    <div class="form-group">
          <input style="width: 40%;" type="text" class="form-control" name="Vardas" value="" placeholder="Jūsų vardas">
    </div>
    <div class="form-group">
          <textarea class="form-control" name="Komentaras" rows="5" placeholder="Jūsų atsiliepimas"></textarea>
    </div>
          <button class="mygtukasMeniu" type="submit" name="button">Paskelbti</button>
          <?php include("prisijungimasDBkomentarai.php");

          for ($i= 1; $i < 8 ; $i++) {
          $koment = getKomentarai($i); //is duomenu bazes paima nurodyta straipsni;
          // Iklijuojam template komentaram
          include ("template_komentarams.php");
          }
          ?>
  </form>

    <!--komentaru/atsiliepimu forma  -->
    <!-- row uzsibaigia -->
  </main>
</div>
<!--Pagrindines dalies konteinerio pabaiga=========  -->
<!--  Komentarai-->



<!--  Komentarai-->


<!-- Footerio konteineris prasideda================= -->
<?php include("footer.php") ?>

</html>
