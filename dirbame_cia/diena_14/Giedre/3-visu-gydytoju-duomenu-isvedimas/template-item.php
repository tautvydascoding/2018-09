<!-- // UZDUOTIS 1.3.2
// A) sukurti nauja nauja faila, pvz:  template-item.php
// B)  perkelti dizaina is index failo ciklo (1.3) (visa h2 eilute):
//     <h2 class='bg-info   m-1'> vardas pavarde</h2>
//       i   faila  template-item.php
// C)    index failo cikle (1.3) ideti:
//       include  (' template-item.php');
//  papildomai)  template-item.php   faile uzdeti klases 'col-md-4  m-1'
//           virs ciklo uzdeti klase 'row' ir po ciklu uzdaryti -->

<!-- template=paruostukas = dizaino paruostukas-->

<?php

echo "<h2 class='bg-info col m-5'> $gydytojas[0] $gydytojas[1] $gydytojas[2]</h2>"

?>


<!-- reikia atspausdinti kai sasiuvinyje - su for ir if -->