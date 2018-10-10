<!-- // zmogus turi:
// private ugis,
// private vardas
// public f-ja 'getManoUgis()'
// public f-ja 'getManoVardas()'
// public f-ja 'setManoUgis($x)'
// public f-ja 'setManoVardas($x)'
* kintamojo paemimas f-je:    $this->vardas -->
<?php
class Zmogus {

  private $vardas = "bevardis";
  private $ugis = -999;

  function __constructor(){
  }

public function setUgis($x=8888, $y=nera){
// norime pakeisti ugis
$this->ugis = $x;
$this->vardas = $y;
}
public function getUgis(){
  return $this->ugis;
}
}





 ?>
