<?php include 'header.php'; ?>

<main class="row">

<div class="col-md-12 aukstis-500 mb-md-5 registracija_d">
  <?php
  // Initialize the session
  session_start();

  // Check if the user is already logged in, if yes then redirect him to welcome page
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      header("location: online.php");
      exit;
  }

  // Include config file
  require_once "db_funkcijos.php";

  // Define variables and initialize with empty values
  $username = $password = "";
  $username_err = $password_err = "";

  // Processing form data when form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){

      // Check if username is empty
      if(empty(trim($_POST["username"]))){
          $username_err = "<div class='text-danger'>Prašome įvesti vartotojo vardą.</div>";
      } else{
          $username = trim($_POST["username"]);
      }

      // Check if password is empty
      if(empty(trim($_POST["password"]))){
          $password_err = "<div class='text-danger'>Prašome įvesti savo slaptažodį.</div>";
      } else{
          $password = trim($_POST["password"]);
      }

      // Validate credentials
      if(empty($username_err) && empty($password_err)){
          // Prepare a select statement
          $sql = "SELECT ID, Vartotojo_vardas, slaptazodis FROM vartotojai WHERE Vartotojo_vardas = ?";

          if($stmt = mysqli_prepare($prisijungimas, $sql)){
              // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "s", $param_username);

              // Set parameters
              $param_username = $username;

              // Attempt to execute the prepared statement
              if(mysqli_stmt_execute($stmt)){
                  // Store result
                  mysqli_stmt_store_result($stmt);

                  // Check if username exists, if yes then verify password
                  if(mysqli_stmt_num_rows($stmt) == 1){
                      // Bind result variables
                      mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                      if(mysqli_stmt_fetch($stmt)){
                          if(password_verify($password, $hashed_password)){
                              // Password is correct, so start a new session
                              session_start();

                              // Store data in session variables
                              $_SESSION["loggedin"] = true;
                              $_SESSION["id"] = $id;
                              $_SESSION["username"] = $username;

                              // Redirect user to welcome page
                              header("location: online.php");
                          } else{
                              // Display an error message if password is not valid
                              $password_err = "<div class='text-danger'>Jūsų įvestas slaptažodis nėra tinkamas.</div>";
                          }
                      }
                  } else{
                      // Display an error message if username doesn't exist
                      $username_err = "<div class='text-danger'>Tokiu vardu paskyra neegzistuoja.</div>";
                  }
              } else{
                  echo "<div class='text-danger'>Kažkas nepavyko :(. Prašome pabandyti vėliau</div>";
              }
          }

          // Close statement
          mysqli_stmt_close($stmt);
      }

      // Close connection
      mysqli_close($prisijungimas);
  }
  ?>


      <div class="registracija border border-primary rounded">
          <h3 class="text-center mt-md-3">Prisijunkite</h3>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-group col <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                  <label>Vartotojo vardas:</label>
                  <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                  <span class="help-block"><?php echo $username_err; ?></span>
              </div>
              <div class="form-group col <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                  <label>Slaptažodis:</label>
                  <input type="password" name="password" class="form-control">
                  <span class="help-block"><?php echo $password_err; ?></span>
              </div>
              <div class="form-group col">
                  <input type="submit" class="btn btn-primary" value="Prisijungti">
              </div>
              <div class="form-group col">
              Dar neturite paskyros? <a href="registracija.php">Registruokitės čia</a>.
            </div>
          </form>
      </div>






  </div>




</main>

<?php include 'footer.php'; ?>
