

<!-- // UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..." -->
<?php
class Zmogus{
	public $ugis = 0;
	public $vardas = "Bevardis";

	public function einu(){
		echo "Einu einu...";
}
	}
 $Moteris = new Zmogus();
 $Vyras1 = new Zmogus();
 $Vyras2 = new Zmogus();

  $Moteris->name = "Monika";
	$Moteris->ugis =170;
  echo "vardas yra:   $Moteris->name   <br/>";
	echo "ugis yra:    $Moteris->name 	</br/> ";
  $Vyras1->name = "Kestas";
  echo "vardas yra: $Vyras1->name     <br />";
		echo "ugis yra:    $Vyras1->name 	</br/> ";
  $Vyras2->name = "Tadas";
  echo "vardas yra: $Vyras2->name     <br />";
  echo "ugis yra: $Vyras2->name     <br />";


?>
