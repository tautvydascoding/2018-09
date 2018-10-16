<?php
// $daktaras = new daktaras();
// if ($daktaras->getDoctor(1)){
//   echo $daktaras->name;
//   echo "</br>";
//   echo $daktaras->lname;
//
// }
$daktaras = new daktaras();
$daktaras->getAll();
while ($daktaras->next()){
  echo $daktaras->name;
  echo "</br>";
  echo $daktaras->lname;

} ?>
