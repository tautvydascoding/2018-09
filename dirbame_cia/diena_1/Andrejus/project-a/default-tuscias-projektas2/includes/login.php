<?php
session_start();
if (isset($_POST['submit'])) {
  include_once("DB-prisijungimas.php");

$username = mysqli_real_escape_string(getPrisijungimas(), $_POST['UserName']);
$password = mysqli_real_escape_string(getPrisijungimas(), $_POST['Password']);

//error handlers
//check if input is EmptyIterator
if (empty($username) || empty($password)) {
  header("Location: ../session-file.php?login=error");
  exit();
}else {
  $sql = "SELCT * FROM newacc WHERE user_UserName ='$username'";
  $result = mysqli_query(getPrisijungimas(), $sql);
  $resultCheck = mysqli_num_rows($results);
  if ($resultCheck < 1) {
    header("Location: ../session-file.php?login=error");
    exit();
  } else {
    if ($row = mysqli_fetch_assoc($result)) {
      //dehashing the PASSWORD_DEFAULT
      $hashedPwdCheck = password_verify($password, $row['user_Password']);
      if ($hashedPwdCheck == false) {
        header("Location: ../session-file.php?login=error");
        exit();
      } elseif ($hashedPwdCheck == true) {
        //lock in the user here
        $_SESSION['u_id'] = $row["user_ID"];
        $_SESSION['u_username'] = $row["user_UserName"];
        $_SESSION['u_email'] = $row["user_Email"];
        $_SESSION['u_name'] = $row["user_Name"];
        $_SESSION['u_lname'] = $row["user_LName"];
        header("Location: ../session-file.php?login=success");
        exit();
      }
    }
  }
}
} else {
  header("Location: ../session-file.php?login=error");
  exit();
}


 ?>
