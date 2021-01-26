<?php 
  include '../database/connection.php';
  $fetch   = "SELECT * FROM `".REGISTER."`";
  $listing = $connection->prepare($fetch);
  $listing->execute();
  $data    = $listing->fetchAll(PDO::FETCH_ASSOC);
  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'header-footer'.DS.'main-header.php'; 
  include PATH.DS.'components'.DS.'sidebar.php';
?>
<div class="content-wrapper" style="position:relative;">
<div class="table" style="height:870px; background-color: #05e8ba;
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
        <th>USERNAME</th>
        <th>FULLNAME</th>
        <th>PHONE</th>
        <th>EMAIL</th>
        <th>COUNTRY</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <?php foreach($data as $values){ ?>
    <tbody style="background-color: #05e8ba;
background-image: linear-gradient(315deg, #05e8ba 0%, #087ee1 74%);">
      <tr>
        <td><input type="checkbox"></td>
        <td><?php echo $values['id']; ?></td>
        <td><?php echo $values['username']; ?></td>
        <td>
          <?php echo $values['firstname']; ?>
          <?php echo $values['lastname']; ?>
        </td>
        <td><?php echo $values['phone']; ?></td>
        <td><?php echo $values['email']; ?></td>
        <td><?php echo $values['country']; ?></td>
        <td>
          <a href="" class="btn btn-success">EDIT</a>
         <a href="" class="btn btn-danger">DELETE</a>
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