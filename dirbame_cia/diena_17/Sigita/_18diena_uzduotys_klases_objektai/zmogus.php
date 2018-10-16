<?php

class zmogus {
  public $ugis = 'ugis';
  public $vardas = 'vardas';

  public function einu(){
    echo "Einu einu...";
  }
} //galima klase susikurti atskirame faile ir kintamuosius kurtis kitame faile, funkcijas panaudoti taip pat kitame faile;
$monika = new zmogus();
$tadas = new zmogus();
$kestas = new zmogus();

 $monika->ugis = 175;
 $monika->vardas = 'Monika';
 echo "vardas ir ugis yra: $monika->vardas $monika->ugis cm <br />";
 $tadas->ugis = 180;
 $tadas->vardas = 'Tadas';
 echo "vardas ir ugis yra: $tadas->vardas $tadas->ugis cm <br />";
 $kestas->ugis = 190;
 $kestas->vardas = 'Kestas';
 echo "vardas ir ugis yra: $kestas->vardas $kestas->ugis cm <br />";
?>
 <!-- // UZDUOTIS 1:
 // sukurti  klase: 'zmogus'
 // zmogus turi: public ugis, public vardas
 // f-ja 'einu()', kuri daro echo "Einu einu..."

 // UZDUOTIS 2:
 // susikurti  objektus: Monika, Tadas, Kestas

 // UZDUOTIS 2.1
 // Atspausdinti varda ir ugi
 // paleisti f-ja 'einu()' -->
