<?php

$daktaras = new daktaras();
$daktaras->getAll();
while ($daktaras->next()) {
echo $daktaras->name;
echo "<br />";
echo $daktaras->lname;


}

 ?>

 
