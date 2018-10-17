<?php

function uzduotis(){

static $x = 0;
if ($x < 10){
  $x++;
  uzduotis();

    }
echo "$x kartas <br />";
}
uzduotis();




 ?>
