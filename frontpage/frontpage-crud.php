<?php
  include '../database/connection.php';
  
  $fetch   = "SELECT * FROM `".POSTS."` ";
  $listing = $connection->prepare($fetch);
  $listing->execute();
  $data    = $listing->fetchAll(PDO::FETCH_ASSOC);

  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'components'.DS.'navbar.php';
  include PATH.DS.'frontpage'.DS.'frontpage.php';
  include PATH.DS.'header-footer'.DS.'footer.php';

?>

