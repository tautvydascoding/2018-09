

<?php
include("header.php");
?>

<form class="form" action="siusti-email.php" method="get">
    <label for="vardas"> Jusu vardas </label>
    <input type="text" name="vardas" value="">   <br />

    <label for="pastas"> Jusu el. Pastas </label>
    <input type="email" name="pastas" value="">  <br />

    <textarea name="klausimas" rows="8" cols="80">   </textarea> <br />

    <button type="submit" name="button">   Klausti  </button>
</form>
