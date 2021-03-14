<?php 
  include '../database/connection.php';
  $msg = $msgexist= $style= $msgexist1=$msgexist2="";

  $username_empty= "Enter a username" ;
  $fname         = "Enter your firstname";
  $lname         = "Enter your lastname";
  $phn           = "Enter your phone no"; 
  $email1        = "Enter your email  ";
  $cntry         = "Enter your country";
  $st            = "Enter your state";
  $ct            = "Enter your city";
  $add           = "Enter your address";
  $acard         = "Enter your adhaar card";
  $pwrd          = "Enter your password ";
  $cpwrd         = "Retype your password";
  $profileimg    = "Upload a profile pic";

  if(isset($_POST['register'])){

    #Varbiles assigned with values from $_POST

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
    $profile_image = $profileimage['name'];
    $file_tmp_name = $_FILES ['profile_image']['tmp_name'];
    $file_type     = $_FILES ['profile_image']['size'];
    $file_type     = $_FILES ['profile_image']['type'];
    $file_type     = $_FILES ['profile_image']['error'];
    $filefolder    =  '../file_uploads_profile/'.$profile_image;

    $filechange    = explode('.',$profile_image);
    $filechange_agn = strtolower(end($filechange));
    $allowed        = array('jpg','jpeg','png');
    $imagecheck     = in_array($filechange_agn,$allowed);
    
    move_uploaded_file($file_tmp_name,$filefolder);
    // $insert = "INSERT INTO `register`(`username`,`firstname`,`lastname`,`phone`,`email`,`country`,`state`,`city`,`address`,`adhaar_card`,`password`,`profile_pic`,`occupation`)VALUES('".$username."','".$firstname."','".$lastname."','".$phone."','".$email."','".$country."','".$state."','".$city."','".$address."','".$adhaar_card."','".$password."','".$profile_pic."','fresher')";
    // $query = mysqli_query($connection,$insert);
    // echo ($insert);

    if(empty($username)){
      $check = true;
      $color = "red";
      $username_empty = "Username cannot be empty *";
    }
    if(empty($email)){
      $check = true;
      $color_p = "red";
      $email1 = "email cannot be empty *";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $check = true;
      $color_p = "red";
      $msgexist = "Please add a valid email *";
    }

    if(empty($adhaar_card)){
      $check    = true;
      $color = "red";
      $acard = "adhaar card cannot be empty";
    }
    
    $fetch_user_data = "SELECT * FROM `".REGISTER."` WHERE `username`= :uname|| `email`= :email || `adhaar_card`= :acard";
    $checkquery     = $connection-> prepare($fetch_user_data);
    $checkquery->execute([
      'uname' => $username,
      'email' => $email,
      'acard' => $adhaar_card,
    ]);

    $data     = $checkquery->fetchall(PDO::FETCH_ASSOC);
    $countRow = count($data);
    if($countRow > 0){
      $msgexist   = "This username ,email or adhaar card is already used , Try with another one*";
      $warn       = "fa fa-times-circle";
      $style      = "font-size:20px;color:red; padding:1px;";
      $check      = true;
      $smallstyle = "red";
    }


    if(empty($firstname)){
      $check = true;
      $color = "red";
      $fname = "firstname cannot be empty *";
    }
    if(empty($lastname)){
      $check = true;
      $color = "red";
      $lname = "lastname cannot be empty *";
    }
    if(empty($phone)){
      $check    = true;
      $color = "red";
      $phn = "phone cannot be empty * ";
    }
  
    if(empty($country)){
      $check    = true;
      $color = "red";
      $cntry = "country cannot be empty *";
    }
    if(empty($state)){
      $check    = true;
      $color = "red";
      $st = "state cannot be empty *";
    }
    if(empty($city)){
      $check    = true;
      $color = "red";
      $ct = "city cannot be empty *";
    }
    if(empty($address)){
      $check    = true;
      $color = "red";
      $add = "address cannot be empty";
    }
    
    if(empty($password)){
      $check    = true;
      $color = "red";
      $pwrd = "password cannot be empty";
    }
    if(empty($cpassword)){
      $check    = true;
      $color = "red";
      $cpwrd = "confirm-password cannot be empty";
    }
    if($password !== $cpassword){
      $check     = true;
      $smallstyle= "red";
      $msgexist2 = "Password did not match, try again";
    }
    if(empty($profile_image)){
      $profileimg = "Plese Select a img file to upload: *";
      // $resolution ="";
      $check = true;
      $color1 = "red";
    }

    if(!empty($profile_image) && ($imagecheck) == false){
      $profileimg = " Please Select Only jpg,png.jpeg type Files to upload: *";
      // $resolution ="";
      $check = true;
      $color1 = "red";
    }

    if($check == false){
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

      $msgexist= "Posted Succesfully";
      $warn = "fa fa-check-circle";
      $style = "font-size:20px;color:green; padding:1px;";
      $username = $firstname = $lastname = $phone = $email = $country = $state = $city = $address = $adhaar_card = $password = $cpassword = $occupation = "";
    }else{
      $msgexist1 = "There is an error to Post Data ";
      $warn = "fa fa-times-circle";
      $style = "font-size:20px;color:red; padding:1px;";
    }
  }

  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'components'.DS.'navbar.php';
  include PATH.DS.'Register'.DS.'register.php';
  include PATH.DS.'header-footer'.DS.'footer.php';
?>