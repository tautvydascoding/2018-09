<?php
require 'interface.php';




class A implements Z{
public $svoris = 100;
function getSvoris(){
  return $this->svoris;
}

}

$objektas = new A();
echo  $objektas->getSvoris() ;

 ?>
<!--  nebaigta-->
