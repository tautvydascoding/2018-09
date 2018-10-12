<?php

 // UZDUOTIS 1.1
 // sukurti klase 'Vilkas' su kintamaisiais:
 // public 'tipas'

 // UZDUOTIS 1.2
 // klase 'Vilkas' paveldi klase 'Gyvunas'

 // UZDUOTIS 3
 // klaseje 'Vilkas' sukurti f-jas:
 // public printLigos()
 // public printPusryciai() // neveiks

class Vilkas extends Gyvunas{
    public $tipas = "keturkojis";

    public function printLigos() {
        echo $this->ligos;
    }

    // public function printPusryciai() {
    //     echo $this->pusryciai;
    // }

}
 

 // UZDUOTIS 2.0:
 // sukurti VILKO OBJEKTA ir
 // pabandyti isvesti visa info apie Vilka:
 // tipas
 // svoris,
 // ligos     // klaida
 // pusryciai // klaida

$vilkas = new Vilkas();
echo $vilkas->tipas . "<br />";
echo $vilkas->svoris . "<br />";
// echo $vilkas->ligos . "<br />";
// echo $vilkas->pusryciai . "<br />";
echo $vilkas->printLigos() . "<br />";
// echo $vilkas->printPusryciai() . "<br />";




