<?php
require 'gyvunas.php';
require 'vilkas.php';


$vilkas = new Vilkas();


echo "vilkas yra $vilkas->tipas <br />";
echo "vilko svoris $vilkas->svoris <br />";
// echo "vilko ligos $vilkas->ligos <br />";  PROTECTED
// echo "vilko pusryciai $vilkas->pusryciai <br />"; PRIVATE

echo $vilkas->printLigos();








 ?>
