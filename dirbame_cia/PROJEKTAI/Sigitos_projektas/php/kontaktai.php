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
<!-- Headeris=================-->
<?php include('header.php') ?>

<body>
  <!--  Pgrindines dalies konteineris prasideda ======-->
  <div class="container">
    <main class="row">
      <section id="contact" class="col-md-6">
        <div class="well well-sm">
          <h3>Mus rasite: Pakraščio g. 20 Kaunas</h3>
        </div>
        <div><iframe style="width:100%; height:100%;" src="https://maps.google.com/maps?q=kaunas%20Pakra%C5%A1%C4%8Dio%2020&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="2" scrolling="no" ></iframe></div>
        <!-- uzklausa su duomenu issiuntimu i el pasta -->
        <div>
          <h5><strong>Atsiųskite mums savo klausimą elektroniniu paštu :)</strong></h5>
          <form action="siusti-email.php" method="get">
            <div class="form-group">
              <input type="text" class="form-control" name="vardas" value="" placeholder="Jūsų vardas" required>
    </div>
              <div class="form-group">
                <input type="email" class="form-control"name="pastas" value="" placeholder="Jūsų elektronins paštas" required>
    </div>
                <div class="form-group">
                  <textarea name="klausimas" class="form-control" rows="8" cols="50" placeholder="Jūsų klausimas" required>   </textarea>
                </div>
                <button class="btn-lg" type="submit" name="button">Klausti</button>
          </form>
        </div>
      </section>
      <!-- uzklausa su duomenu paemimu i Duomenu Baze , forma is MDL-->
      <div class="col-md">
        <h3><strong>Susisiekite telefonu </strong></h3>
        <form action="create-uzklausa.php" method="get">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="sample1" name="Vardas" value="" placeholder="Jūsų vardas" required>
            <label class="mdl-textfield__label" for="sample1">Text...</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="tel" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2" name="TelNr" value="" placeholder="Telefono numeris" required>
            <label class="mdl-textfield__label" for="sample2">Number...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="Gautas_pranešimas" rows="3" placeholder="Jūsų žinutė" required></textarea>
          </div>
          <!-- uzklausa su duomenu paemimu i Duomenu Baze -->
          <button class="btn-lg" type="submit" name="button">SIŲSTI</button>
        </form>
        <!-- row baigesi -->
    </main>
  </div>
  <!--Pagrindines dalies konteinerio pabaiga=========  -->
  <!-- Footerio konteineris prasideda================= FOOTERI GALIMA ITRAUKTI I PHP-->
  <?php include("footer.php") ?>
  <!-- Footeris -->
</body>

</html>
