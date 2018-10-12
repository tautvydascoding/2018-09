<?php

class Zmogus
{
public $charakteris ="nezinomas";
public $ugis = 0;
public $vardas =  "a";

public function einu(){
echo "Einu einu...";

}

}


$Moteris = new Zmogus();
$Vyras1 = new Zmogus();
$Vyras2 = new Zmogus();

$Moteris -> vardas ="Monika";
$Moteris -> ugis = 165;
echo "vardas yra $Moteris->vardas <br />";
echo "Moters ūgis yra $Moteris->ugis <br />";
echo "Moters charakteris yra $Moteris->charakteris <br />";

$Vyras1 -> vardas = "Tadas";
$Vyras1 -> ugis = 179;
$Vyras1 -> einu();
echo "Vyro vardas yra $Vyras1->vardas <br />";
echo "Vyro ūgis yra $Vyras1->ugis <br />";












 ?>
