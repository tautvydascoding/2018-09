<?php
class Zmogus {
    public $ugis = 0;
    private $pusryciai = '';
    protected $turtas = 'namas';
}
class Vyras  extends Zmogus {
    private $testosteronas = 6122;

    public function setTestosteronas()
    {
    $this->$testosteronas = 7256;
    echo $testosteronas;
    }

    function printVyroDuomenys(){
      echo $vyras->ugis;
      echo $vyras->pusryciai;
      echo $vyras->turtas;

    }

}
