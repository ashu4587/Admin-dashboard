<?php
  include '../database/connection.php';
  //$updatecheck = mysqli_query($mysql, "UPDATE `".TABLE."` SET `activation`='0' WHERE `id` = ".$_SESSION['user_id']);
  session_destroy();
  session_unset();
  $_SESSION = [];
  // unset($_SESSION["status"]);
  // unset($_SESSION["user_status"]);
  // session_destroy();
  header("Location:http://localhost/Admin-dashboard/login/crud-login.php");
?>