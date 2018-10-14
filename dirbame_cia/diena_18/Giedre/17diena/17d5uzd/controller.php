<?php

include_once("zmogus.php");

// UZDUOTIS 0.
// susikurti objekta VYRAS
// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki


// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas


$obj = new Vyras();

echo $obj->getTestosteronas();
echo $obj->setTestosteronas(412);
echo $obj->getTestosteronas();

echo "$obj->ugis";
echo $obj->getPusryciai();
//echo "$obj->turtas";

echo $obj->printVisiDuomenys();

