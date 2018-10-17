<?php include 'header_online.php'; ?>

<main class="row">
  <div class="col-md-9 aukstis-500 registracija_d">
    <?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: prisijungimas.php");
    exit;
}

// Include config file
require_once "db_funkcijos.php";

// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Prašome įvesti naują slaptažodį.";
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Slaptažodį turi sudaryti bent 6 simboliai.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Prašom patvirtinti slaptažodį.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Slaptažodiai nesutampa.";
        }
    }

    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE vartotojai SET slaptazodis = ? WHERE ID = ?";

        if($stmt = mysqli_prepare($prisijungimas, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["ID"];

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: prisijungimas.php");
                exit();
            } else{
                echo "Kažkas nepavyko... Prašome pabandyti dar kartą vėliau";
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
        <h3 class="text-center mt-md-3">Atnaujinti slaptažodį</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group col <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>Naujas slaptazodis:</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group col <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Patvirtinkite slaptažodį:</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group col">
                <input type="submit" class="btn btn-primary" value="Patvirtinti">
            </div>
        </form>

      </div>

    </div>

    <div class="col-md-3 aukstis-500">
      <?php include 'nario_meniu.php'; ?>
    </div>
</main>


<?php include 'footer.php'; ?>
