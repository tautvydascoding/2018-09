<?php  function deletDoctor($nr){
  $manoSQL = "DELETE FROM `doctors` WHERE id = '$nr'
             ";
  $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL); //sitas irgi nebutinas, tai rodytu ar pavyko ir ismestu klaidas jei nurodytu.
}
deletDoctor(6);
?>
