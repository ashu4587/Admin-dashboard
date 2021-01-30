<?php 
  include '../database/connection.php';
  $msg = $msg1 =$msg2= $username = "";

  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check    = false;
    $remeber = !empty($_POST['checked'])?$_POST['checked']:'';

    if(empty($username)){
      $msg1 = "Please enter your username or email *";
      $check = true;
    }

    if(empty($password)){
      $msg2 = "Please enter your Password *";
      $check = true;
    }

    if($check == false){
      $query = "SELECT * FROM `".REGISTER."` WHERE `username`= :uname && `password` = :pword";
      $checkquery     = $connection-> prepare($query);
      $checkquery->execute([
      'uname' => $username,
      'pword' => $password,
      ]);
      
      $login  = $checkquery->fetchall(PDO::FETCH_ASSOC);
      $countRow = count($login);
      debug($_SESSION);
      if($countRow > 0){
        foreach($login as $login_data){
          $_SESSION["login_id"]   = $login_data['id'];
          $_SESSION["login_pass"] = $login_data['password'];
          $_SESSION["login_user"] = $login_data['username'];
          $_SESSION["username"]   = $login_data['firstname'];
        }
        header('location:http://localhost/Admin-dashboard/Admin/dashboard.php');
      }else{
        $msg = "Incorrect Username or Password";
      }
    }
  }

  include PATH.DS.'header-footer'.DS.'header.php';
  // include PATH.DS.'components'.DS.'navbar.php';
  include PATH.DS.'login'.DS.'login.php';
  include PATH.DS.'header-footer'.DS.'footer.php';
?>