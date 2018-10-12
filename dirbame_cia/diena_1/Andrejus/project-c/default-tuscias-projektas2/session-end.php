<?php
session_start();

$_SESSION = array();
session_destroy();

header("login-template.php");
 ?>
