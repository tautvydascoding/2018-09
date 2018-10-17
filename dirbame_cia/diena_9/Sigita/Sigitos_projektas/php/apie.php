<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- !!! mano CSS vissade zemiau -->
  <link rel="stylesheet" href="../css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<!-- Header konteineris prasideda ==================-->
<?php include('header.php') ?>
<!--Header konteinerio pabaiga ===================  -->
<body>
  <!-- atskiriantis konteineris -->
  <div class="container" style="height: 30px;">
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
  </div>
  <!--  Pagrindines dalies konteineris prasideda ======-->
  <main class="container">
    <div class="row">
      <!--  Asmenybes aprasymas prasideda-->
      <article class="col-md-5">
        <h3><b><em>Raimonda Ivanauskiene</em></b></h3>
        <p style="text-align: justify;"> <strong> <em>Ilgalaikio makiažo specialistė </em></strong></br> <img class="nuotrauka2" src="../galerija/41790381_311864902925830_4691595899309129728_n.jpg" alt="pagrindine"> </br> Lorem ipsum dolor sit amet,
          consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
          adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. lorem</p>
      </article>
      <!--  Asmenybes aprasymas baigiasi-->
      <!-- komentaru/atsiliepimu forma  plius uzklausa su duomenu paemimu i Duomenu Baze -->
      <div class="col-md-6">
        <form action="create-komentarai.php" method="get">
          <div class="form-group">
            <input type="text" class="form-control" name="Vardas" value="" placeholder="Jūsų vardas" required>
    </div>
            <div class="form-group">
              <textarea class="form-control" name="Komentaras" rows="7" placeholder="Jūsų atsiliepimas" required></textarea>
            </div>
            <button class="mdl-button mdl-js-button mdl-button--raised" type="submit" name="button">Paskelbti</button>
            <?php include("prisijungimasDBkomentarai.php");

          for ($i= 17; $i < 29 ; $i++) {
          $koment = getKomentarai($i); //is duomenu bazes paima nurodyta straipsni;
          // Iklijuojam template komentaram
          include ("template_komentarams.php");
          }
        // if ($rezultatai > 0)
        //               while($rezultataiArray = mysqli_fetch_assoc($rezultatai) {
        //                   $koment = $rezultataiArray[$i]
        //               }
                    ?>
        </form>
      </div>
      <!--komentaru/atsiliepimu forma  -->
      <!-- row uzsibaigia -->
    </div>
  </main>
  <!--Pagrindines dalies konteinerio pabaiga=========  -->
  <!--  prisijungimas -->

  <!-- prisijungimo konteineris prasideda-->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!--  admino prisijungimas su ikonele is MDL-->
        <ul class="demo-list-icon mdl-list">
          <li class="mdl-list__item">
            <i class="material-icons mdl-list__item-icon">person</i>
            <!--  mygtukas  is MDL-->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Administratoriui</button>
            <!-- issokanti forma uzpildymui -->
            <div id="id01" class="modal">
              <form class="modal-content animate" action="netikriKomentarai.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">
                  <label for="username"><b>Vartotojo vardas</b></label>
                  <input type="text" placeholder="Įvesti vartotojo vardą" name="username" required>

                  <label for="password"><b>Slaptažodis</b></label>
                  <input type="password" placeholder="Įvesti slaptažodį" name="password" required>

                  <button type="submit">Prisijungti</button>
                  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                       <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
                                         <span class="mdl-checkbox__label">Prisiminti</span>
                                     </label>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Atšaukti</button>
                  <span class="psw">Pamiršai <a href="#">slaptažodį?</a></span>
                </div>
              </form>
            </div>
            <script>
              // skriptas modal issaukimui
              var modal = document.getElementById('id01');
              // Kai useris kur nors kitur packlikina - uzsidaro forma.
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }
            </script>
      </div>
    </div>
    <!-- prisijungimo row baigiasi-->
  </div>
  <!-- prisijungimo konteineris baigiasi-->
  <!-- Footeris ================= -->
  <?php include("footer.php") ?>
</body>

</html>
