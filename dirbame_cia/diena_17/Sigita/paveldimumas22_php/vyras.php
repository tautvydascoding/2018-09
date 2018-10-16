<?php
require("vyras_zmogus.php");
class Vyras  extends Zmogus {
private $testosteronas = 6122;

            public function seTestosteronas($x){
              $this->testosteronas = $x;
            }
            public function geTestosteronas(){
               return $this->testosteronas;
             }
             // public function setTurtas($y){
             //   $this->turtas;
             // } jei nenorim keisti reiksmes tai sita f-ja nebutina;
            //  public function getTurtas(){
            //  return $this->turtas;
            // }

}



?>


<!-- // UZDUOTIS 0.
// susikurti objekta VYRAS

// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas -->



<!-- public function setPusryciai($x){
//           $this->pusryciai = $x;
//         }
//         public function getPusryciai(){
//           return $this->pusryciai;
//         } -->
