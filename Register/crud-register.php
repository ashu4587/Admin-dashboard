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
    $cpassword   = $_POST['cpassword'];
    $occupation  = "fresher";

    #profile pic 
      $profileimage  = $_FILES['profile_image'];
      $profile_image = $_FILES['profile_image']['name'];
      $file_tmp_name = $_FILES ['profile_image']['tmp_name'];
      $file_type     = $_FILES ['profile_image']['size'];
      $file_type     = $_FILES ['profile_image']['type'];
      $file_type     = $_FILES ['profile_image']['error'];
      $filefolder    =  '../file_uploads_profile/'.$profile_image;
      $resolution    = '"height="100" width="100"';
    
      $filechange    = explode('.',$profile_image);
      $filechange_agn = strtolower(end($filechange));
      $allowed        = array('jpg','jpeg','png');
      $imagecheck     = in_array($filechange_agn,$allowed);
      move_uploaded_file($file_tmp_name,$filefolder);
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
      'profile'  => $filefolder,
      'occu'     => $occupation,
    ]);
  }
  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'components'.DS.'navbar.php';
  include PATH.DS.'Register'.DS.'register.php';
  include PATH.DS.'header-footer'.DS.'footer.php';
?>