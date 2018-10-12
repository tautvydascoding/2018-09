<?php include_once("menu.php");
      include_once("user_print_funcion.php");



 ?>

<div class="col-lg-11 divas ">
<br><br>
<button type="button" class="btn btn-secondary">Naudotojai</button>

<a href="new_user.php">
<button type="button" class="btn btn-secondary">Naujas naudotojas</button>
</a>
<a href="delete_user.php">
<button type="button" class="btn btn-secondary">Trinti naudotoja</button>
</a><br> <br>
<b>ID   Vardas Pavardė <br> </b> <br>


<?php


    //include_once  -- neleis antra kart ikelti include

  $gydytojas = getUser (10); //suranda gdytoja DB
  //print_r  ($user)
  //iskvietimas su for ciklu kad atspauzdintu
  for ($i=209; $i <280 ; $i++) {
    $user = getUser ( $i ); //is DB paima gydytoja
    include ("user_print_template-item.php"); //paimtas nuoroda is to failo
  //echo $user[0] . " " . $user[1] . " " . $user[2] ;
      // $user[1] nedeti tarpeliu tarp $user ir [1]


  }

?>



</div>
