<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- !!! mano CSS vissade zemiau -->
  <link rel="stylesheet" href="../css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<!-- Header  ==================-->
<?php include('header.php') ?>

<body>
  <!--  Pgrindines dalies konteineris prasideda ======-->
  <div class="container">
    <h3>PROCEDŪROS</h3>
    <div class="row">
      <!-- kolona proceduru-->
      <div class="col-md-6" style="background-color: rgb(180, 229, 245);">
        <div>
          <button class="collapsible">Akių vokų permanentinis makiažas</button>
          <div class="content ">
            <p>-Viršutinis pravedimas (klasikinis - strėlytė); </br>
              -Viršutinis pravedimas (OMBRE, šešėliavimas); </br>
              -Apatinis pravedimas; </br>
              -Apatinio voko šešėliavimas; </br></p>
          </div>
          <button class="collapsible">Lūpų permanentinis makiažas</button>
          <div class="content">
            <p>-Tik kontūras; </br>
              -Pilnas tušavimas; </br>
              -OMBRE technika; </br>
              -3D technika</p>
          </div>
          <button class="collapsible">Antakių permanentinis makiažas</button>
          <div class="content">
            <p>-Pilnas šešėliavimas; </br>
              -Plaukelinė technika; </br>
              -Ombre technika; </br>
              -MIX technika; </br>
              -(plaukelinė + ombre)</p>
          </div>
          <button class="collapsible">Seno permanentinio makiažo šalinimas</button>
          <div class="content">
            <p>Senam permanentiniam makiažui šalinti naudojama panaši technologija, kaip ir permanentiniam makiažui atlikti. Ant seno ilgalaikio makiažo įvedama medžiaga, išstumianti pigmentą.Trukmė ir reikalingų procedūrų skaičius priklauso nuo
              esamo nepageidaujamo permanento ryškumo ir ploto.</p>
          </div>
          <button class="collapsible">Seno permanentinio makiažo šalinimas</button>
          <div class="content">
            <p>Senam permanentiniam makiažui šalinti naudojama panaši technologija, kaip ir permanentiniam makiažui atlikti. Ant seno ilgalaikio makiažo įvedama medžiaga, išstumianti pigmentą.Trukmė ir reikalingų procedūrų skaičius priklauso nuo
              esamo nepageidaujamo permanento ryškumo ir ploto.</p>
          </div>
          <button class="collapsible">Seno permanentinio makiažo šalinimas</button>
          <div class="content">
            <p>Senam permanentiniam makiažui šalinti naudojama panaši technologija, kaip ir permanentiniam makiažui atlikti. Ant seno ilgalaikio makiažo įvedama medžiaga, išstumianti pigmentą.Trukmė ir reikalingų procedūrų skaičius priklauso nuo
              esamo nepageidaujamo permanento ryškumo ir ploto.</p>
          </div>
        </div>
      </div>
      <!--  proceduru kolona baigiasi-->
      <!--  nuotrauka salia proceduru-->
      <div class="col-md">
        <img src="../galerija/ika-dam-528988-unsplash.jpg" style="width:100%;">
        </div>
      </div>
      <!-- row baigiasi -->
    </div>
    <!--  1 konteineris baigiasi-->

    <!-- SKRIPTAS proceduru isskleidimui su cklicku-->
    <script>
      var coll = document.getElementsByClassName("collapsible");
      var j;
      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.display === "block") {
            content.style.display = "none";
          } else {
            content.style.display = "block";
          }
        });
      }
    </script>
    <!-- SKRIPTAS BAIGIASI -->
    <!-- footeris -->
    <?php include('footer.php') ?>
    
</body>

</html>
