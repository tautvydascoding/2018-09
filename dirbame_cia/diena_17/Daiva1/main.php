<?php

$daktaras = new daktaras();
$daktaras->getAll();

while($daktaras->next())
(
?><tr><td><<?php
echo $daktaras->name;
?><td><td><<?php
echo $daktaras->1name;
?></td></tr><?php

?></table><<?php

?>
