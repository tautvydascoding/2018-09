
    <?php include 'header.php'; ?>
    <?php include 'db_funkcijos.php'; ?>
<main class="row">
  <div class="col-md-4 aukstis-350">
    <img src="../imgs/runner.jpg" class="img-fluid rounded" alt="maratonas">
  </div>
  <div class="col-md-8 aukstis-350">
    <h3 class="text-center">Patarimai</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <ul class="text-justify">

      <?php
          $patarimas = getPatarimai(3);
          echo  "<li> $patarimas[1] </li>";
          ?>
      <?php
          $patarimas = getPatarimai(1);
          echo  "<li> $patarimas[1] </li>";
          ?>
      <?php
          $patarimas = getPatarimai(2);
          echo  "<li> $patarimas[1] </li>";
          ?>
      <?php
          $patarimas = getPatarimai(4);
          echo  "<li> $patarimas[1] </li>";
          ?>
      <?php
          $patarimas = getPatarimai(5);
          echo  "<li> $patarimas[1] </li>";
          ?>
    </ul>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>

  </div>




</main>

<?php include 'footer.php'; ?>
