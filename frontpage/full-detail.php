<?php 
  include '../database/connection.php';

  $fetch   = "SELECT * FROM `".POSTS."` ORDER BY `id` DESC LIMIT 3";
  $listing = $connection->prepare($fetch);
  $listing->execute();
  $allbikes    = $listing->fetchAll(PDO::FETCH_ASSOC);

  $fetch   = "SELECT * FROM `".POSTS."` WHERE `id`=:id";
  $listing = $connection->prepare($fetch);
  $listing->execute([
    'id'=> $_GET['id'],
  ]);
  $detail    = $listing->fetchAll(PDO::FETCH_ASSOC);
  foreach($detail as $full){};
  include PATH.DS.'header-footer'.DS.'header.php';
  include PATH.DS.'components'.DS.'navbar.php';
?>
<div class = "" style="padding: 200px; background-color: #000000;
background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
;">
<div class="full-main" style="background-color: #182b3a;
background-image: linear-gradient(315deg, #182b3a 0%, #20a4f3 74%);
border-radius:20px;
">
  <strong>
    <center>
     <div style= "color:white; background-color:	#404040; padding:5px; border-radius:20px; width:100%; margin-bottom:40px; ">
       <h1><b><?php echo $full['bike'];?></b></h1>
     </div>
  <div class= "img">
  <img style="border-radius:10px; " src="<?php //echo $filefolder ;
      echo $full['bike_image'];
      ?>" <?php echo(!empty($full['bike_image'])?$resolution:''); ?>>
  </div>
      

    <h1><strong> <?php echo $full['model_no'];?> </strong></h1>
    <table class="table table-bordered">
      <thead class="thead-dark">
        <th>Price:-</th>
        <td><?php echo $full['price'];?> / INR</td> 
      </thead>
      <thead class="thead-dark">
       <th>Engine power:-</th>
       <td><?php echo $full['engine']; ?></td>
      </thead>
      <thead class="thead-dark">
      <th>Engine Gen:-</th>
      <td><?php echo $full['engine_type']; ?></td>
      </thead>
      <thead class="thead-dark">
      <th>Manufacturing Year:-</th>
      <td><?php echo $full['model_year']; ?></td>
      </thead>
      <thead class="thead-dark">
      <th>Start Type:-</th>
      <td><?php echo $full['power_type']; ?></td>
      </thead>
      <thead class="thead-dark">
      <th>Description:-</th>
      <td><?php echo $full['description']; ?></td>
      </thead>
      <thead class="thead-dark">
      <th> Posted on:-</th>
      <td><?php echo $full['created_on']; ?></td>
      </thead>
      <thead class="thead-dark">
      <th> Posted By:-</th>
      <td><?php echo $full['user_name']; ?></td>
      </thead>
     
    </table>
    <a class="btn btn-success" href="#" style="color:white; margin:40px; width:300px; height:45px; font-size:20px; border-radius:8px;">Book Now</a>
    </div> 

  </strong>
  </center>
  <center>
    <div style="background-color:black ; padding:.5px; margin-top:50px">
      <h3><b>May You Also Like This</b></h3>
    </div>
  </center>
  
  <div class="product-container">
  <?php foreach($allbikes as $bikes){ ?>
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

</div>
<section class="subcribe-container">
		<!--heading-->
		<h3>Subcribe For New Product Notification</h3>
		<!--Input-------->
		<div class="subcribe-input">
			<input placeholder="Eample@gmail.com" type="email" />
			<a class="subcribe-btn" href="#">Send</a>
		</div>
	</section>
	<!--footer--------------------->
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
<?php include PATH.DS.'header-footer'.DS.'footer.php'; ?>