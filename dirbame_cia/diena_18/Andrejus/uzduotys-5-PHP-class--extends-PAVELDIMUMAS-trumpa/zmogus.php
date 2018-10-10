<?php
class Zmogus {
    public $ugis = 0;
    private $pusryciai = 'Monika';
    protected $turtas = 'namas';

    public function setUgis($y) {
      $this->ugis = $y;
    }
    public function getUgis() {
      return $this->ugis;
    }
    public function setUgis($y) {
      $this->ugis = $y;
    }
    public function getUgis() {
      return $this->ugis;
    }


    public function getPusryciai(){
      return $this->pusryciai;
    }
}
//atsikopint is destytojo.


// UZDUOTIS 0.
// susikurti objekta VYRAS

// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
