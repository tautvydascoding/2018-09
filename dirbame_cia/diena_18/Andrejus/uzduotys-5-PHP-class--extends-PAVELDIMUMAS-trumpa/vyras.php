<?php
include("zmogus.php");
class Vyras  extends Zmogus {
    private $testosteronas = 6122;

    public function setTest($x) {
      $this->testosteronas = $x;
    }
    public function getTest() {
      return $this->testosteronas;
    }
function printVyroDuomenys() {
  echo $objVyras->getPusryciai();
}


}
