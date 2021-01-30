<?php 
  include '../database/connection.php';
  $delete_msg = "";
  
  if(isset($_GET['action']) && ($_GET['action']) == 'remove'){
    $delete  = "DELETE FROM `".POSTS."` WHERE `id`= :id";
    $Del     = $connection->prepare($delete);
    $Del-> bindValue(':id', $_GET['id'] ,PDO::PARAM_INT);
    $Del->execute();
    if($delete == true){
      $delete_msg = "Record deleted successfully";
    }else{
      $delete_msg  = "There is an Error to delete the Record";
    }
  }

  $fetch   = "SELECT * FROM `".POSTS."` ORDER BY `id` DESC ";
  $listing = $connection->prepare($fetch);
  $listing->execute();
  $data    = $listing->fetchAll(PDO::FETCH_ASSOC);
  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'header-footer'.DS.'main-header.php'; 
  include PATH.DS.'components'.DS.'sidebar.php';
?>

<div class="content-wrapper" style="position:relative;">
<?php echo $delete_msg ; ?>
<div class="table" style="height:auto; background-color: #05e8ba;
     background-image: linear-gradient(315deg, #05e8ba 0%, #087ee1 74%);
 ">
 <div class="listing" style="background-color: #ca7968;
background-image: linear-gradient(315deg, #ca7968 0%, #0c0c0c 74%);
 justify-content:center; padding:20px;" >
 <form method="post" action="">
 <div class="action" style="margin-top: -7px;">
 <select style="width:8%; border-radius:5px; height:30px;">
 <option>Select</option>
 <option> Delete</option>
 </select>
 <button type="submit" class="bt btn-success"name="searchbtn" style="border-radius:5px; width:5%; height:30px; ">Action</button>
 </div>
 </form>
 <form method="get" action="">
 <div class="search" style="float: right;margin-top:-25px; ">
 <input type="text" name="search" placeholder="serach..." style="border-radius:5px; border:1px; width:80%; margin-left:-20px; height:25px;">
 <button type="submit" class="bt btn-primary"name="searchbtn" style="border-radius:5px; height:28px">Search</button>
 </div>
 </form>
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
        <th>IMAGE</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <?php foreach($data as $values){ ?>
    <tbody style="background-color: #05e8ba;
background-image: linear-gradient(315deg, #05e8ba 0%, #087ee1 74%);">
      <tr>
        <td><input type="checkbox"></td>
        <td><?php echo $values['id']; ?></td>
        <td><?php echo $values['user_name']; ?></td>
        <td> <?php echo $values['bike']; ?></td>
        <td><?php echo $values['model_no']; ?></td>
        <td><?php echo $values['model_year']; ?></td>
        <td><img src="<?php echo $values['bike_image']; ?>" height="100" width="150"></td>
        <td>
          <a href="" class="btn btn-success">EDIT</a>
          <a class="btn btn-danger" style="font-size: small;" href= "posts-listing.php?id=<?php echo $values['id'];?> &action=remove ">DELETE</a>
        </td>
      </tr>
    </tbody>
    <?php } ?>
  </table>

<?php include PATH.DS.'components'.DS.'right-sidebar.php'; ?>
</div>
<?php

  include PATH.DS.'header-footer'.DS.'footer.php';

?>