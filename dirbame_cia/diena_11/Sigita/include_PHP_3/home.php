// uzduotis 1
// A. susikurti meniu masyva: home, about, gallery, contact, blog
// B. atspausdinti visus meniu punktus i HTML (su html tag'ais)
<?php  $meniu = array('home', 'about', 'gallery', 'contact', 'blog'); ?>

<nav>
  <ul>
    <?php

for ($i = 0; $i < count($meniu); $i++) {
    ?>
     <li>
       <?php echo $meniu[$i]; ?>
     </li>
   <?php  } ?>
  </ul>
</nav>


// uzduotis 2
// A. susirasti 6 nuotraukas
<!-- <img src='../gallery/nuotrauka1.jpg' alt='1'  />
<img src='../gallery/nuotrauka2.jpg' alt='2'  />
<img src='../gallery/nuotrauka3.jpg' alt='3'  />
<img src='../gallery/nuotrauka4.jpg' alt='4'  />
<img src='../gallery/nuotrauka5.jpg' alt='5'  />
<img src='../gallery/nuotrauka6.jpg' alt='6'  /> -->

// B. susikurti nuotrauku TIK pavadinimu masyva
<div>
<?php  $gallery = array('nuotrauka1', 'nuotrauka2', 'nuotrauka3', 'nuotrauka4', 'nuotrauka5', 'nuotrauka6'); ?>
</div>
<?php for ($i = 0; $i < count($gallery); $i++){
 ?>
 <img style="max-width: 25%; max-height: 100px;" src="./gallery/<?php echo $gallery[$i]; ?>.jpg" alt=''/>

<?php if ($i == 2)
echo "<br />" ?>
<?php } ?>

// C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
