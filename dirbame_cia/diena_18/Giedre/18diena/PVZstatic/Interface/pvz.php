<!-- reiklavimai: beKoNeisgyventuPaauglys
        3f-jos
klase: zmogus
2x kintamieji
2x funkcijos ka zmogus moka daryti -->

<?php

interface Zmogus {
  public function miegoti();
  public function gyventi();
  public function valgyti();

}

class beKoNeisgyventuPaauglys implements Zmogus {
    public $vardas = "";
    public $pavarde = "";
    public function zaidzia() { }
    public function niekoneveikia() {}

    public function miegoti() {}
    public function gyventi() {}
    public function valgyti() {}

}

