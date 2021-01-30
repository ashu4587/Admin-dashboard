<?php 
  include '../database/connection.php';
  if(
    empty($_SESSION["login_id"]) ||
    empty($_SESSION["login_pass"])
  ){
    header("Location:http://localhost/Admin-dashboard/login/crud-login.php");
    exit();
  }
  $delete_msg = $search = "";
  $check = false;

  $getid = !empty($_GET['id'])?$_GET['id']:'';
  $fetch   = "SELECT * FROM `".POSTS."`WHERE `id`=:listid";
  $listing = $connection->prepare($fetch);
  $listing->execute([
  'listid' => $getid,
  ]);
  $idcheck    = $listing->fetchAll(PDO::FETCH_ASSOC);
  $countRow = count($idcheck);
  

  #single delete
  if(isset($_GET['action']) && ($_GET['action']) == 'remove'){
    if($countRow == 0){
      header('location:http://localhost/Admin-dashboard/components/error-page.php');
      $check = true;
    }
    if($check == false){
    $delete  = "DELETE FROM `".POSTS."` WHERE `id`= :id";
    $Del     = $connection->prepare($delete);
    $Del-> bindValue(':id', $_GET['id'] ,PDO::PARAM_INT);
    $Del->execute();
    $delete_msg = "Record deleted successfully";
    $delclr = "green";
    }else{
      $delete_msg  = "There is an Error to delete the Record";
      $delclr = "red";
    }
  }

 #multidelete

  if(isset($_POST['multidelete']) && ($_POST['multidelete']) == 'select_delete'){
    if($countRow == 0){
      header('location:http://localhost/Admin-dashboard/components/error-page.php');
      $check = true;
    }
    
    $users = !empty($_POST['user'])? $_POST['user']:[];
    $ids   = implode(',',$users);
    if(empty($ids)){
      $delete_msg = "Please select an id to delete *";
      $delclr ="red";
    }
    $records  = "DELETE FROM `".POSTS."` WHERE `id` in ({$ids})";
    $delete_selected = $connection->prepare($records);
    $delete_selected->execute();
    if($delete_selected == true){
    $delete_success = "Selected Records deleted Sucesfully";
    $delclr = "green";
    }else{
      $delete_failed= "there is an error in multidelete";
      $delclr = "red";
    }
  }
  if(!empty($_GET['search'])){
    $search = " WHERE `user_name` LIKE :searchValue || `model_no` LIKE :searchValue || `price` LIKE :searchValue || `engine_type` LIKE :searchValue || `engine` LIKE :searchValue ";
  }

  $fetch   = "SELECT * FROM `".POSTS."` {$search} ORDER BY `id` DESC";
  $listing = $connection->prepare($fetch);
  if(!empty( $_GET['search'] )){
    $listing-> bindValue(':searchValue', '%'.$_GET['search'].'%');
  }
  $listing->execute();
  $data    = $listing->fetchAll(PDO::FETCH_ASSOC);
  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'header-footer'.DS.'main-header.php'; 
  include PATH.DS.'components'.DS.'sidebar.php';
?>


<div class="content-wrapper" style="position:relative;">
  <div class="table" style="height:auto; background-color: #05e8ba;
  background-image: linear-gradient(315deg, #05e8ba 0%, #087ee1 74%);
  ">

  <!-- Search box html -->
    <div class="listing" style="background-color: #ca7968;
    background-image: linear-gradient(315deg, #ca7968 0%, #0c0c0c 74%);
    justify-content:center; padding:8px;" >
    <center><p style="margin-bottom:<?php echo $margin; ?>; color:<?php echo $delclr; ?>;"><?php echo $delete_msg ; ?></p></center>
    <form method="get" action="">
      <div class="search" style="float: right;  ">
        <input type="text" name="search" placeholder="serach..." style="border-radius:5px; border:1px; width:100%; margin-left:-20px; height:25px;">
        <!-- <button type="submit" class="bt btn-primary"name="searchbtn" style="border-radius:5px; height:28px">Search</button> -->
      </div>
    </form>

     <!-- multi-delete select bxo html -->
    <form method="post" action="">
      <div class="action">
        <select style="width:8%; border-radius:5px; height:30px;" name="multidelete">
          <option value="">Select</option>
          <option value="select_delete"> Delete</option>
        </select>
        <button type="submit" class="bt btn-warning" name="remove_selected" style="border-radius:5px; width:5%; height:30px; ">Action</button>
      </div>
      </div>
    <table class="table">
      <thead class="thead-dark" style="background-color: #000000;
        background-image: linear-gradient(147deg, #000000 0%, #434343 74%); color:white; justify-content:center">
        <tr>
          <td><input type="checkbox"></td>
          <th>ID</th>
          <th>POSTED BY</th>
          <th>BIKE NAME</th>
          <th>MODEL NO</th>
          <th>MODEL YEAR</th>
          <th>ENGINE GEN.</th>
          <th>IMAGE</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <?php foreach($data as $values){ ?>
      <tbody style="background-color: #05e8ba;
  background-image: linear-gradient(315deg, #05e8ba 0%, #087ee1 74%);">
        <tr>
          <td>
            <input type="checkbox" name="user[]" value ="<?php echo $values['id'] ?>">
          </td>
          <td><?php echo $values['id']; ?></td>
          <td><?php echo $values['user_name']; ?></td>
          <td> <?php echo $values['bike']; ?></td>
          <td><?php echo $values['model_no']; ?></td>
          <td><?php echo $values['model_year']; ?></td>
          <td><?php echo $values['engine_type']; ?></td>
          <td><img src="<?php echo $values['bike_image']; ?>" height="100" width="150"></td>
          <td>
            <a href="" class="btn btn-success">EDIT</a>
            <a class="btn btn-danger" style="font-size: small;" href= "posts-listing.php?id=<?php echo $values['id'];?> &action=remove ">DELETE</a>
          </td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    </form>

    <?php include PATH.DS.'components'.DS.'right-sidebar.php'; ?>
  </div>
<?php include PATH.DS.'header-footer'.DS.'footer.php'; ?>