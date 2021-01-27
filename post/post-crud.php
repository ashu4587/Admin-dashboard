<?php
  include '../database/connection.php';
  if(isset($_POST['post'])){
    $username    = "ashu";
    $bike        = $_POST['bike'];
    $model_no    = $_POST['model_no'];
    $price       = $_POST['price'];
    $engine      = $_POST['engine'];
    $engine_type = $_POST['engine_type'];
    $model_year  = $_POST['model_year'];
    $power_type  = $_POST['Power_type'];
    $discription = $_POST['discription'];

    /*bike iamge variables.*/

    $bikeimage     = $_FILES['bike_image'];
    $bike_image    =  $_FILES['bike_image']['name'];
    $file_tmp_name = $_FILES ['bike_image']['tmp_name'];
    $file_type     = $_FILES ['bike_image']['size'];
    $file_type     = $_FILES ['bike_image']['type'];
    $file_type     = $_FILES ['bike_image']['error'];
    $filefolder    = PATH.DS.'file_uploads_posts'.DS.$bike_image;
    $resolution    = '"height="100" width="100"';
  
    $filechange    = explode('.',$bike_image);
    $filechange_agn = strtolower(end($filechange));
    $allowed        = array('jpg','jpeg','png');
    $imagecheck     = in_array($filechange_agn,$allowed);
    move_uploaded_file($file_tmp_name,$filefolder);

    // $insert = "INSERT INTO `".POSTS."`(`user_name`,`bike`,`model_no`,`price`,`engine`,`engine_type`,`model_year`,`power_type`,`bike_image`,`description`)VALUES('".$username."','".$bike."','".$model_no."','".$price."','".$engine."','".$engine_type."','".$model_year."','".$power_type."','".$bike_image."','".$discription."')";
    // $query = mysqli_query($connection,$insert);
    // echo ($insert);

    $insert = "INSERT INTO `".POSTS."`(`user_name`,`bike`,`model_no`,`price`,`engine`,`engine_type`,`model_year`,`power_type`,`bike_image`,`description`) VALUES(:username,:bike,:model,:price,:engine,:etype,:myear,:ptype,:bimage,:dis)";
    $query = $connection->prepare($insert);
    $query->execute([
      'username'=> $username,
      'bike'    =>$bike,
      'model'   =>$model_no,
      'price'   =>$price,
      'engine'  => $engine,
      'etype'   => $engine_type,
      'myear'   => $model_year,
      'ptype'   => $power_type,
      'bimage'  => $filefolder,
      'dis'     => $discription,
    ]);
    // debug($_POST);
  }

  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'header-footer'.DS.'main-header.php';
  include PATH.DS.'components'.DS.'sidebar.php';
  include PATH.DS.'post'.DS.'post-form.php';
  include PATH.DS.'header-footer'.DS.'footer.php';

?>
