<?php
class gyvunas {
        public $svoris = "svoris";
        private $pusryciai = "pusryciai";
        protected $ligos = "ligos";
        
        public function setPusryciai($x){
          $this->pusryciai = $x;
        }
        public function getPusryciai(){
          return $this->pusryciai;
        }
}

// UZDUOTIS 1.0:
// sukurti klase 'Gyvunas' su kintamaisiais:
// public 'svoris', private 'pusryciai', protected 'ligos'

// UZDUOTIS 1.1
// sukurti klase 'Vilkas' su kintamaisiais:
// public 'tipas'

// UZDUOTIS 1.2
// klase 'Vilkas' paveldi klase 'Gyvunas'

 // UZDUOTIS 2.0:
// sukurti VILKO OBJEKTA ir
// pabandyti isvesti visa info apie Vilka:
// tipas
// svoris,
// ligos     // kalida
// pusryciai // klaida

// UZDUOTIS 3
// klaseje 'Vilkas' sukurti f-jas:
// public printLigos()
// public printPusryciai() // neveiks

// UZDUOTIS 4
// klaseje 'Gyvunas' sukurti f-jas:
// public printPusryciai()
