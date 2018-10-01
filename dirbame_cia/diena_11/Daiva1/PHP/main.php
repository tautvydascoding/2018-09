
<h1> Mano puslapis su PHP</h1> <br>

<?php

$meniu = ["home", "about", "gallery", "contact", "blog"];

 ?>

<nav>
  <ul>
    <?php  for ($i=0; $i < count($meniu); $i++) { ?>
    <li>
      <?php  echo $meniu[$i]; ?>
    </li>
  <?php } ?>
  </ul>
</nav>
<!--  ======================================-->
<!-- 2 uzdavinys -->
<!-- ========================================== -->
<?php
$foto = [ "kat1", "kat-2", "kat-3", "kat-4", "kat-5", "kat-6"];
echo "kkk";
?>
<?php
for ($i=0; $i <count($foto) ; $i++) { ?>
<img scr="foto/" alt="">

 <?php
if($i == 2) echo "<br />";

  }?>
