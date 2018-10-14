<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'

// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'getManoUgis()'
// public f-ja 'getManoVardas()'
// public f-ja 'setManoUgis($x)'
// public f-ja 'setManoVardas($x)'






class Zmogus
{  private $vardas = "bevardis";
  private $ugis = -999;




  function __construct($x=-999, $y="nera") {
    $this->ugis = $x;
      $this->vardas = $y;
  }
  public function setUgis ($x) {
    $this->ugis = $x;

  }
  public function getUgis() {

    return $this->ugis;
  }
}
