<?php
class zmogus{
  private $ugis = 'ugis';
  private $vardas = 'vardas';

  function __construct($x=-999, $y="nera"){
     $this->ugis = $x;
     $this->vardas = $y;
  }
  public function setUgis($x){
    $this->ugis = $x;
  }
  public function getUgis(){
    return $this->ugis;
  }
  }


?>
<!-- // UZDUOTIS 1:
// sukurti  klase: 'zmogus'

// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'getManoUgis()'
// public f-ja 'getManoVardas()'
// public f-ja 'setManoUgis($x)'
// public f-ja 'setManoVardas($x)'
* kintamojo paemimas f-je:    $this->vardas


// UZDUOTIS 2.1
// susikurti  objektus: Monika

// UZDUOTIS 2.2
// Atspasudinti varda ir ugi naudojant
// f-ja 'manoUgis()'
// f-ja 'manoVardas()'


// UZDUOTIS 3:
// susikurti konstruktoriu

// UZDUOTIS 3.1:
// susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu) -->
