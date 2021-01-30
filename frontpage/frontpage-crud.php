<?php
  include '../database/connection.php';
  
  $fetch   = "SELECT * FROM `".POSTS."` ORDER BY `id` DESC LIMIT 8";
  $listing = $connection->prepare($fetch);
  $listing->execute();
  $data    = $listing->fetchAll(PDO::FETCH_ASSOC);
  
  $fetch   = "SELECT * FROM `".POSTS."` ORDER BY `model_year` DESC";
  $listing = $connection->prepare($fetch);
  $listing->execute();
  $latest   = $listing->fetchAll(PDO::FETCH_ASSOC);

  $fetch      = "SELECT * FROM `".POSTS."` ORDER BY `price` DESC";
  $listing    = $connection->prepare($fetch);
  $listing->execute();
  $pricebased = $listing->fetchAll(PDO::FETCH_ASSOC);

  $fetch    = "SELECT * FROM `posts` WHERE `price` <= 250000 ORDER BY `price`  DESC   LIMIT 4";
  $listing  = $connection->prepare($fetch);
  $listing->execute();
  $pricelow = $listing->fetchAll(PDO::FETCH_ASSOC);

  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'components'.DS.'navbar.php';
  include PATH.DS.'frontpage'.DS.'frontpage.php';
  include PATH.DS.'header-footer'.DS.'footer.php';

?>

