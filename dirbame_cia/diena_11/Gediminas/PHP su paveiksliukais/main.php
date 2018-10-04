<?php
 $menu = ["home", "about", "gallery", "contact", "blog"];
 ?>
<nav>
  <ul>
    <?php for ($i=0; $i <count($menu) ; $i++) { ?>
    <li>
      <?php echo $menu[$i]; ?>
    </li>
  <?php } ?>
  </ul>
</nav>

<?php
 $img = ["pirmas", "antras", "trecias", "ketvirtas", "penktas", "sestas"];
 ?>
 <?php
for ($i=0; $i <count($img) ; $i++) { ?>

<img style="max-width: 15%; max-height: 200px " src="./img/<?php echo $img[$i] ?>.jpg" alt="">

  <?php
if ($i == 2) echo "<br / />"; // Is naujos eilutes ir tas galimai nereikalingas

 } ?>


SELECT * FROM `user`LEFT JOIN `ADRESAI`ON `user`. `ID` = `adresai`. `UserID` WHERE 1
