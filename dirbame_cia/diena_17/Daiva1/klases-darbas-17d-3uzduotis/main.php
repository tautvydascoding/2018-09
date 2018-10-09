<?php

$daktaras = new daktaras();
$daktaras->getAll();
?><table><?php
while($daktaras->next())
{

?><tr><td><?php
echo $daktaras->name;
?></td><td><?php
echo  $daktaras->lname;
?></td></tr><?php
}
?></table><?php

?>
