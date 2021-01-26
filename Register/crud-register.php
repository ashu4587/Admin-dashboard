<?php 
  include '../database/connection.php';
  if(isset($_POST['register'])){
    $username    = $_POST['username'];
    $firstname   = $_POST['firstname'];
    $lastname    = $_POST['lastname'];
    $phone       = $_POST['phone'];
    $email       = $_POST['email'];
    $country     = $_POST['country'];
    $state       = $_POST['state'];
    $city        = $_POST['city'];
    $address     = $_POST['address'];
    $adhaar_card = $_POST['adhaar_card'];
    $password    = $_POST['password'];
    $profile_pic = $_POST['profile_pic'];
    $cpassword   = $_POST['cpassword'];
    $occupation  = "fresher";
    // $insert = "INSERT INTO `register`(`username`,`firstname`,`lastname`,`phone`,`email`,`country`,`state`,`city`,`address`,`adhaar_card`,`password`,`profile_pic`,`occupation`)VALUES('".$username."','".$firstname."','".$lastname."','".$phone."','".$email."','".$country."','".$state."','".$city."','".$address."','".$adhaar_card."','".$password."','".$profile_pic."','fresher')";
    // $query = mysqli_query($connection,$insert);
    // echo ($insert);
    $insert = "INSERT INTO `".REGISTER."`(`username`,`firstname`,`lastname`,`phone`,`email`,`country`,`state`,`city`,`address`,`adhaar_card`,`password`,`profile_pic`,`occupation`) VALUES(:username,:fname,:lname,:phone,:email,:country,:state,:city,:address,:acard,:password,:profile,:occu)";
    $query = $connection->prepare($insert);
    $query->execute([
      'username' => $username,
      'fname'    =>$firstname,
      'lname'    =>$lastname,
      'phone'    =>$phone,
      'email'    => $email,
      'country'  => $country,
      'state'    => $state,
      'city'     => $city, 
      'address'  => $address,
      'acard'    => $adhaar_card,
      'password' => $password,
      'profile'  => $profile_pic,
      'occu'     => $occupation,
    ]);
  }
  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'components'.DS.'navbar.php';
  include PATH.DS.'Register'.DS.'register.php';
  include PATH.DS.'header-footer'.DS.'footer.php';
?>