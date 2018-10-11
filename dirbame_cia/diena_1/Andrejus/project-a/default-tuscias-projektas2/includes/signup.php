<?php
if (isset($_POST['submit'])) {
  include_once("DB-prisijungimas.php");
  $username = mysqli_real_escape_string(getPrisijungimas(), $_POST['UserName']);
  $email = mysqli_real_escape_string(getPrisijungimas(), $_POST['Email']);
  $name = mysqli_real_escape_string(getPrisijungimas(), $_POST['Name']);
  $lname = mysqli_real_escape_string(getPrisijungimas(), $_POST['LName']);
  $password = mysqli_real_escape_string(getPrisijungimas(), $_POST['Password']);

    if (empty($username) || empty($email) || empty($name) || empty($lname) || empty($password)) {
      header ("Location: ../signup-form.php?signup=empty");
      exit();
    }else {
      //check if input charackters are was-validated
      if (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
        header("Location: ../signup-form.php?signup=invalid");
        exit();
      }else {
        //check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header ("Location: ../signup-form.php?signup=email");
          exit();
        }else {
          $sql = "SELECT * FROM newacc WHERE UserName = '$username'";
          $result = mysqli_query(getPrisijungimas(), $sql);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck>0) {
            header ("Location: ../signup-form.php?signup=userTaken");
            exit();
          }else {
            //hashing the password
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            //isert the user into the database.
            $sql = "INSERT INTO newacc (user_UserName, user_Email, user_Name, user_LName, user_Password) VALUES ('$username', '$email', '$name', '$lname', '$hashedPwd')";
            $result = musqli_query(getPrisijungimas(), $sql);
            header ("Location: ../signup-form.php?signup=success");
            exit();
          }
        }
      }
    }

}else {
  header ("Location: ../signup-form.php");
  exit();
}




 ?>
