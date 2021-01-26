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
<div class="content-wrapper" >
<div class="table" style="height:870px; background-color: #05e8ba;
     background-image: linear-gradient(315deg, #05e8ba 0%, #087ee1 74%);
 ">
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