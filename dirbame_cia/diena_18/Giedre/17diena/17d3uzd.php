<?php

class Zmogus {
    public $ugis = 0;
    public $vardas = "Bevardis";

   public function einu() {
        echo "Einu einu...";
    }
}


$Moteris = new Zmogus();    
$Vyras1 = new Zmogus();    
$Vyras2 = new Zmogus();    

$Moteris->name = "Monika";
echo "vardas yra:  $Moteris->name<br />";
$Vyras1->name = "Tadas";
echo "vardas yra:  $Vyras1->name<br />";
$Vyras2->name = "Kestas";
echo "vardas yra:  $Vyras2->name<br />";


$Moteris->ugis = 155;
echo "vardas yra:  $Moteris->ugis<br />";
$Vyras1->ugis = 180;
echo "vardas yra:  $Vyras1->ugis<br />";
$Vyras2->ugis = 179;
echo "vardas yra:  $Vyras2->ugis<br />";


$Moteris->einu();



