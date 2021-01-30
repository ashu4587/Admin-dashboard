<?php include '../database/connection.php';

$fetch   = "SELECT * FROM `".POSTS."` ORDER BY `id` DESC LIMIT 8";
$listing = $connection->prepare($fetch);
$listing->execute();
$data    = $listing->fetchAll(PDO::FETCH_ASSOC);

  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'components'.DS.'navbar.php';
  
  
?>
<div style="padding:100px;">
<section class="main">
<div class="product-container">
<?php foreach($data as $bikes){ ?>
	<div class="p-box">
	<img alt="<?php echo($bikes['id']); ?>" src="<?php echo $bikes['bike_image'];?>" />
	<!--details--------->
	<b><?php echo $bikes['bike'];?></b>
	<!--price--->
	<b><a class="price"href="#"><?php echo $bikes['price'];?> <small>INR</small></a></b>
	<!--buy-btn-->
	<a class="buy-btn" href="full-detail.php?id=<?php echo $bikes['id']; ?>">More Details</a>
	</div>
	<?php } ?>
	</div>
</section>
<footer>
		<!--footer-menu---------------->
		<ul class="footer-menu">
			<li><a href="#">Man</a></li>
			<li><a href="#">Women</a></li>
			<li><a href="#">Kids</a></li>
			<li><a href="#">Bags</a></li>
			<li><a href="#">Watchs</a></li>
		</ul>
	</footer>
</div>
<?php include PATH.DS.'header-footer'.DS.'footer.php'; ?>