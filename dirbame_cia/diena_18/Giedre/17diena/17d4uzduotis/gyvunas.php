<?php

 // UZDUOTIS 1.0:
 // sukurti klase 'Gyvunas' su kintamaisiais:
 // public 'svoris', private 'pusryciai', protected 'ligos'

class Gyvunas {
    public $svoris = 100;
    private $pusryciai = "mesa";
    protected $ligos = "aklas";

/////////

    public function printPusryciai($x) {
        echo $this->pusryciai = $x . "<br />";
    }

}
    $obj = new Gyvunas();
    $obj->printPusryciai("mesa");   