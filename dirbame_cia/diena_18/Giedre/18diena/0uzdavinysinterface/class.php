<?php
include("interface.php");


class A implements Z {
   public $svoris = 100;

   public function setSvoris($x) {
        $this->svoris = $x;
   }

   public function getSvoris() {
       echo $this->svoris;
   }

}
