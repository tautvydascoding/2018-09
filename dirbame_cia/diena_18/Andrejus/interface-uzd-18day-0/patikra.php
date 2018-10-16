<?php
include("class.php");

$svor = new A();

echo $svor->getSvoris()."<br />";

$svor->setSvoris(150);

echo $svor->getSvoris();


 ?>
