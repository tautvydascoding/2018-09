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
<!--  Pgrindines dalies konteineris prasideda ======-->
<div class="container">
  <h3 style="text-align:center; letter-spacing: 20px; color: rgb(18, 192, 195); text-shadow: 4px 3px rgb(21, 50, 113);">PROCEDŪROS</h3>

  <div class="row">

    <!--  pirma kolona proceduru-->
  <main class="col-md-6" style="background-color: rgb(180, 229, 245);">
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
      <p>Senam permanentiniam makiažui šalinti naudojama panaši technologija, kaip ir permanentiniam makiažui atlikti. Ant seno ilgalaikio makiažo įvedama medžiaga, išstumianti pigmentą.Trukmė ir reikalingų procedūrų skaičius priklauso nuo esamo nepageidaujamo permanento ryškumo ir ploto.</p>
    </div>
    <button class="collapsible">Seno permanentinio makiažo šalinimas</button>
    <div class="content">
      <p>Senam permanentiniam makiažui šalinti naudojama panaši technologija, kaip ir permanentiniam makiažui atlikti. Ant seno ilgalaikio makiažo įvedama medžiaga, išstumianti pigmentą.Trukmė ir reikalingų procedūrų skaičius priklauso nuo esamo nepageidaujamo permanento ryškumo ir ploto.</p>
    </div>
    <button class="collapsible">Seno permanentinio makiažo šalinimas</button>
    <div class="content">
      <p>Senam permanentiniam makiažui šalinti naudojama panaši technologija, kaip ir permanentiniam makiažui atlikti. Ant seno ilgalaikio makiažo įvedama medžiaga, išstumianti pigmentą.Trukmė ir reikalingų procedūrų skaičius priklauso nuo esamo nepageidaujamo permanento ryškumo ir ploto.</p>
    </div>
<!--  pirma kolona proceduru baigiasi-->

<!--  antra kolona proceduru-->
  </main>
  <main class="col-md-6" style="background-color: rgb(180, 229, 245);">
<div>

    <button class="collapsible">Akių vokų permanentinis makiažas</button>
    <div class="content">
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
      <p>Senam permanentiniam makiažui šalinti naudojama panaši technologija, kaip ir permanentiniam makiažui atlikti. Ant seno ilgalaikio makiažo įvedama medžiaga, išstumianti pigmentą.Trukmė ir reikalingų procedūrų skaičius priklauso nuo esamo nepageidaujamo permanento ryškumo ir ploto.</p>
    </div>
    <button class="collapsible">Seno permanentinio makiažo šalinimas</button>
    <div class="content">
      <p>Senam permanentiniam makiažui šalinti naudojama panaši technologija, kaip ir permanentiniam makiažui atlikti. Ant seno ilgalaikio makiažo įvedama medžiaga, išstumianti pigmentą.Trukmė ir reikalingų procedūrų skaičius priklauso nuo esamo nepageidaujamo permanento ryškumo ir ploto.</p>
    </div>
    <button class="collapsible">Seno permanentinio makiažo šalinimas</button>
    <div class="content">
      <p>Senam permanentiniam makiažui šalinti naudojama panaši technologija, kaip ir permanentiniam makiažui atlikti. Ant seno ilgalaikio makiažo įvedama medžiaga, išstumianti pigmentą.Trukmė ir reikalingų procedūrų skaičius priklauso nuo esamo nepageidaujamo permanento ryškumo ir ploto.</p>
    </div>
<!--  antra kolona proceduru baigesi-->

    <!-- SKRIPTAS -->
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
  </main>
</div>
</div>
<?php include('footer.php') ?>
</html>
