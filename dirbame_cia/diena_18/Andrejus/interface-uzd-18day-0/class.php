<?php
include("interface.php");

class A implements Z {

public $svoris=100;

function getSvoris() {
return  $this->svoris;
}

function setSvoris($x) {
  $this->svoris = $x;
}
}



 ?>
