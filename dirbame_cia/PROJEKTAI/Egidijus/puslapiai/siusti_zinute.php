<?php

include 'header.php';
?>


<main class="row">
<div class="col-md-12">

  <form class="" action="../puslapiai/email.php" method="get">

    <input type="text" name="vardas" placeholder="Vardas" value="">

    <input type="email"  name="pastas" placeholder="el. paštas" value="">

    <textarea name="klausimas" rows="8" cols="80" placeholder="Rašytkite klausimą čia"></textarea> <br>
    <input type="text" name="id" value="4" hidden>
    <button type="submit" name="button">Siųsti</button>
  </form>


</div>



</main>














<?php

include 'footer.php';



 ?>
