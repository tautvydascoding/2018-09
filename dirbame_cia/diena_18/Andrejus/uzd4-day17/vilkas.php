<?php
include("gyvunas.php");
class Vilkas extends Gyvunas {
  public $tipas = "idomus";
  
  public function setLigos($z) {
    $this->ligos = $z;
  }
  public function getLigos() {
    $this->ligos;
  }

}
?>
