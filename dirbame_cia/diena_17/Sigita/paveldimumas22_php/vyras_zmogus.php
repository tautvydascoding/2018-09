<?php
class Zmogus {
    public $ugis = 0;
    private $pusryciai = '';
    protected $turtas = 'namas';


    public function setPusryciai($x){
      $this->pusryciai = $x;
    }
    public function getPusryciai(){
       return $this->pusryciai;
    }
    // public function printVisiVyras(){
    //   echo "testosteronas yra: $his->testosreronas";
    //   echo "ugis yra: $this->ugis;
    //   "
    //   echo "Turstas yra: $this->turtas";
    //   echo "pusryciai yra: $this->getPusryciai()";
    // } galima viena funkcija sukurti ir issisaukti ja
}



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






// class gyvunas {
//         public $svoris = "svoris";
//         private $pusryciai = "pusryciai";
//         protected $ligos = "ligos";
//
//         public function setPusryciai($x){
//           $this->pusryciai = $x;
//         }
//         public function getPusryciai(){
//           return $this->pusryciai;
//         }
// }
// require("gyvunas.php");
// class vilkas extends gyvunas{
// public $tipas = "tipas";
//
//     public function setLigos($x){
//       $this->ligos = $x;
//     }
//     public function getLigos(){
//       return $this->ligos;
//     }
// }
