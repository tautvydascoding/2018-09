<?php
class zmogus{
	public $ugis;
	public $vardas;
	
	protected $svoris;
	
	private $alga;
	
	public function __construct($vardas, $ugis, $alga){
		$this->vardas = $vardas;
		$this->ugis = $ugis;
		$this->alga = $alga;
	}
	
	public function eiti(){
		echo $this->vardas . " einu!";
	}
	
	public function girtis(){
		echo "mano alga yra: ". $this->alga;
	}
}
?>