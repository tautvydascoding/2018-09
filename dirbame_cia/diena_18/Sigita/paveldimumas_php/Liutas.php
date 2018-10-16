<?php
require("gyvunas.php");
class Liutas{
              public $kailis = true;
              public $spalva = "#a34baa";
              private $amzius = 5;

          public function setSpalava($x){
          $this->spalva = $x;
          }
          public function getSpalva(){
           return $this->spalva;
          }




}

// public function setLigos($x){
//   $this->ligos = $x;
// }
// public function getLigos(){
//   return $this->ligos;
// }
