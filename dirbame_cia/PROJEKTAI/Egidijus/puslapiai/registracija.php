<?php include 'header.php'; ?>

<main class="row">

<?php
// Include config file
require_once "db_funkcijos.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "<div class='text-danger'>

        Prašome įvesti savo vartotojo vardą.</div>";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM vartotojai WHERE Vartotojo_vardas = ?";

        if($stmt = mysqli_prepare($prisijungimas, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "<div class='text-danger'>Šis vartotojo vardas jau yra užimtas.</div>";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "<div class'text-warning'>Kažkas nepavyko.. Prašome pabandyti vėliau.</div>";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "<div class='text-danger'>Prašome įvesti slaptažodį.</div>";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "<div class='text-warning'>Slaptažodį turi sudaryti bent 6 simboliai.</div>";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<div class='text-danger'>Prašome patvirtinti slaptažodį.</div>";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "<div class='text-warning'>Slaptažodiai nesutampa.</div>";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO vartotojai (Vartotojo_vardas, slaptazodis) VALUES (?, ?)";

        if($stmt = mysqli_prepare($prisijungimas, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: prisijungimas.php");
            } else{
                echo "<div class'text-warning'>Deja kažkas nepavyko :( . Prašome pabandyti dar kartą.</div>";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($prisijungimas);
}
?>


    <div class="col-md-12 aukstis-500 mb-md-5 registracija_d">
      <div class="registracija border border-primary rounded">


        <h3 class="text-center mt-md-3">Registracija</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group col <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Vartotojo vardas</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group col <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Slaptažodis</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group col <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Patvirtinkite slaptažodį</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group col">
                <input type="submit" class="btn btn-primary" value="Registruotis">
                <input type="reset" class="btn btn-default" value="Išvalyti laukelius">
            </div>
            <div class="form-group col">
              Jau turite paskyrą? <a href="prisijungimas.php">Prisijunkite čia</a>.
            </div>
        </form>
    </div>
</div>





</main>

<?php include 'footer.php'; ?>
