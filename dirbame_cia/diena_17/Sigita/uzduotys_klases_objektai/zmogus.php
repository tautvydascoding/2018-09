<?php

class zmogus{ //susikuriam kintamojo tipa
  public $ugis;
  public $vardas;

public function __construct($vardas, $ugis){
  $this->vardas = $vardas;
  $this->ugis = $ugis;
}
public function eiti(){
  echo $this->vardas . "einu";
}
}
$monika = new zmogus("Monika", 177);
$tadas = new zmogus("Tadas", 195);
$kestas = new zmogus("Kestas", 180);

echo $monika->vardas . " " . $monika->ugis;
echo "<br />";
echo $tadas->vardas . " " . $tadas->ugis;
echo "<br />";
echo $kestas->vardas . " " . $kestas->ugis;
echo "<br />";

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
