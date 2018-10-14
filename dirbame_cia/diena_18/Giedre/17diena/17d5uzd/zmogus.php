<?php

class Zmogus {
    public $ugis = 200;
    private $pusryciai = 'jokie';
    protected $turtas = 'namas';

   public function getPusryciai() {
       return $this->pusryciai;
   }

}

class Vyras  extends Zmogus {
    private $testosteronas = 6122;

    function setTestosteronas($x) {
    $this->testosteronas = $x;
    }

//vyras paveldi ugi ir turta



    function getTestosteronas() {
    return $this->testosteronas;
    }


    public function printVisiDuomenys() {
        echo "testosteronas yra: $this->testosteronas";
        echo "ugis yra: $this->ugis";
        echo "turtas yra: $this->turtas";
        echo "pusryciai yra: " . $this->getPusryciai();
    }


}

$obj = new Zmogus;
