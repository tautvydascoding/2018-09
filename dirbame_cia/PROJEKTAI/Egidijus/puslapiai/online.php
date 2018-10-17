<?php include 'header_online.php'; ?>




<main class="row">
  <div class="col-md-12">
    <?php
    // Initialize the session
    // session_start();
session_start();
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: prisijungimas.php");
        exit;
    }
    ?>


  <div class="page-header">
      <h1 class="text-center text-secondary">Labas, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Malonu, kad prisijungėte!</h1>
  </div>

  <!--  duomenų įkėlimo kodas-->
  <div class="row">


    <div class="col-md-9 aukstis-500">
    
    </div>

    <div class="col-md-3 aukstis-500">
    <?php include 'nario_meniu.php'; ?>
    </div>

    </div>
  </div>







<!--  duomenų įkėlimo pabaiga-->


</main>

<?php include 'footer.php'; ?>
