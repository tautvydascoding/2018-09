<?php
session_start();
include_once("DB-prisijungimas.php");
if (isset($_POST['submit'])) {

$username = mysqli_real_escape_string(getPrisijungimas(), $_POST['UserName']);
$password = mysqli_real_escape_string(getPrisijungimas(), $_POST['Password']);

//error handlers
//check if input is EmptyIterator
if (empty($username) || empty($password)) {
  header( "refresh:1;url=../login-template.php?login=error1" );
  echo '<script language="javascript">';
  echo 'alert("One of your entries is missing!")';  //not showing an alert box.
  echo '</script>';
  exit();
}else {
  $sql = "SELECT * FROM newacc WHERE UserName ='$username'";
  $result = mysqli_query(getPrisijungimas(), $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck < 1) {
    header( "refresh:1;url=../login-template.php?login=error2" );
    echo '<script language="javascript">';
    echo 'alert("Please correct your entry!")';  //not showing an alert box.
    echo '</script>';
    exit();
  } else {
    if ($row = mysqli_fetch_assoc($result)) {
      //dehashing the PASSWORD_DEFAULT
      // $hashedPwdCheck = $row['Password'];
      // if ($hashedPwdCheck !== $password) budas kitas jei neuzhashintas slaptazodis
      $hashedPwdCheck = password_verify($password, $row['Password']);
      if($hashedPwdCheck == false) {
        // header("Location: ../login-template.php?login=error3");
        header( "refresh:1;url=../login-template.php?login=error3" );
        echo '<script language="javascript">';
        echo 'alert("Your password was wrong!")';  //not showing an alert box.
        echo '</script>';
        exit();
      } elseif ($hashedPwdCheck == true) {
        //lock in the user here
        $_SESSION['u_id'] = $row["ID"];
        $_SESSION['u_username'] = $row["UserName"];
        $_SESSION['u_email'] = $row["Email"];
        $_SESSION['u_name'] = $row["Name"];
        $_SESSION['u_lname'] = $row["LName"];
        header("Location: ../session-file.php?login=success");
        exit();
      }
    }
  }
}
} else {
  header("Location: ../session-file.php?login=error4");
  exit();
}


 ?>
