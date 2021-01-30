<?php
  include '../database/connection.php';
  try{
    $msg =$engine= $engine_type = $power_type= $bikewarn= $style = $msgexist = "";
    $check = false;
    $bike_empty = "Please Add Bike Name*";
    $model_no_empty = "Please Add Model No.*";
    $price_empty = "Price *";
    $Engine_cc = "Power";
    $etype = "Engine Type";
    $discr = "Please add More Details *";
    $bikimg = "Add image of bike :";
    $ptype = "Power type: ";
    $myear = "Model year";

    $emptycheck = "This feild cannot be empty*";
  
    if(isset($_POST['post'])){
      $username    = "ashu";
      $bike        = $_POST['bike'];
      $model_no    = $_POST['model_no'];
      $price       = $_POST['price'];
      $engine      = $_POST['engine'];
      $engine_type = $_POST['engine_type'];
      $model_year  = $_POST['model_year'];
      $power_type  = !empty($_POST['Power_type']) ? $_POST['Power_type'] :'';
      $discription = $_POST['discription'];

      /*bike iamge variables.*/

      $bikeimage     = $_FILES['bike_image'];
      $bike_image    = $_FILES['bike_image']['name'];
      $file_tmp_name = $_FILES ['bike_image']['tmp_name'];
      $file_type     = $_FILES ['bike_image']['size'];
      $file_type     = $_FILES ['bike_image']['type'];
      $file_type     = $_FILES ['bike_image']['error'];
      $filefolder    =  '../file_uploads_posts/'.$bike_image;
      $resolution    = '"height="100" width="100"';
    
      $filechange    = explode('.',$bike_image);
      $filechange_agn = strtolower(end($filechange));
      $allowed        = array('jpg','jpeg','png');
      $imagecheck     = in_array($filechange_agn,$allowed);
      move_uploaded_file($file_tmp_name,$filefolder);

    

    
      if(empty($bike)){
        $check = true;
        $color = "red";
        $bike_empty = $emptycheck;
        
      }
      if(empty($model_no)){
        $check = true;
        $color = "red";
        $model_no_empty = $emptycheck;
      }

      $fetch_user_data = "SELECT * FROM `".POSTS."` WHERE `bike`= :bike || `model_no`= :mno";
      $checkquery     = $connection-> prepare($fetch_user_data);
      $checkquery->execute([
        'bike'=> $bike,
        'mno' => $model_no,
      ]);

      $data  = $checkquery->fetchall(PDO::FETCH_ASSOC);
      $countRow = count($data);
      if($countRow > 0){
        $msgexist = "This model is Already Posted *";
        $warn = "fa fa-times-circle";
        $style = "font-size:20px;color:red; padding:1px;";
        $flag     = true;
      }
 
      if(empty($price)){
        $check = true;
        $color = "red";
        $price_empty = $emptycheck;
      }
      if(empty($engine)){
        $check = true;
        $colorsel1 = "red";
        $Engine_cc = "Select Engine Power *";
      }
      if(empty($engine_type)){
        $check = true;
        $colorsel2 = "red";
        $etype = "Select An Engine Type *";
      }
      if(empty($model_year)){
        $check    = true;
        $dcolor = "red";
        $myear = "Please select model year *";
      }
      if(empty($power_type)){
        $check = true;
        $color_p = "red";
        $ptype = "Please Select power type : *";
      }
      if(empty($discription)){
        $check    = true;
        $color = "red";
        $discr = $emptycheck;
      }
      if(empty($bike_image)){
        $bikimg = "Plese Select a img file to upload: *";
        $resolution ="";
        $check = true;
        $color_img = "red";
      }

        //  echo $bike;  
      
  // debug($data);
     
    
      if($check == false){

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
        $msg= "Posted Succesfully";
        $warn = "fa fa-check-circle";
        $style = "font-size:20px;color:green; padding:1px;";

        $bike = $power_type = $discription = $model_year = $engine_type = $engine = $model_no = $price = ""; 
        
      } 
    }
  }catch(PDOException $e){
    $msgexist = "Error :There is an error to Post Data ".$e->getMessage();
  } 

  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'header-footer'.DS.'main-header.php';
  include PATH.DS.'components'.DS.'sidebar.php';
  include PATH.DS.'post'.DS.'post-form.php';
  include PATH.DS.'header-footer'.DS.'footer.php';

?>
