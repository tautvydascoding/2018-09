<?php
class Zmogus {
  private $ugis = -999;
  private $vardas = 'Bevardis';

  function __conctruct($x=-888, $y="nera") {
    $this->ugis = $x;
    $this->vardas = $y; // nukopint is destytojas git!!!!
  }
  public function setUgis($x) {
    $this->ugis = $x; //taisiklingas pakeitimas
  }
  public function getUgis() {
    return $this->ugis;
  }

  public function manoUgis() {
    return $this->ugis;
  }
  public function manoVardas() {
    return $this->vardas;
  }
}
?>
<!-- public function getManoUgis() {
  $this->ugis;
}

public function getManoVardas () {
  $this->vardas;
}

public function setManoUgis($x) {
  $this->ugis;
}

public function setManoVardas($x) {
  $this->vardas
} -->
