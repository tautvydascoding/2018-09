<?php

class Zmogus {
    private $ugis = -999;
    private $vardas = "";

// susikurti konstruktoriu
    function __construct($x=-88, $y="nera")
    {
        $this->ugis = $x;
        $this->vardas = $y;
    }






    public function setUgis($x) {
        $this->ugis = $x;
    }
    
public function getUgis() {
    return $this->ugis;
}



    public function setVardas($y) {
        $this->vardas = $y;
    }

    public function getVardas() {
    return $this->vardas;
}

}