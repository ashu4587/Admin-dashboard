<!--main-section--------------->
	<section class="main">
	<!--logo------------->
	
	<!--side-menu------------->
			<div class="side-box">
		<!--search------------->
		<div class="search">
		<!--icon----------->
		<i class="fas fa-search"></i>
		<input placeholder="Search...." type="text" />
		</div>

		</div>
    <!--img--------->
    <div class="m-img">
    <img alt="<?php echo($latest[0]['id']); ?>" src="<?php echo $latest[0]['bike_image'];?>"/>  
    </div>
	<!--text------------>
		<div class="m-text">
  <h1><font>ju</font>st</h1>
  <h2>Lau<font>nched</font></h2>
  <!-- <h2> summer collection</h2> -->
	<!--btn------------>
	<h3><font><?php echo $latest[0]['bike'];?></font></h3>
	<b><a class="price"href="#"><?php echo $latest[0]['price'];?> <small>INR</small></a></b>
	<a class="m-btn" href="full-detail.php?id=<?php echo $latest[0]['id']; ?>">Details</a>
	</div>
	<!--social-------->
		<div class="social">
	<a href="#"><i class="fab fa-facebook-f"></i></a>
	<a href="#"><i class="fab fa-twitter"></i></a>
	<a href="#"><i class="fab fa-instagram"></i></a>
	<a href="#"><i class="fab fa-youtube"></i></a>

	</div>

	</section>
	<section class="product">
		<!--heading------------>
	<div class="p-heading">
		<h3>New<font>Arri</font>vals</h3>
	</div>
	<!--product-container----------------->
	<div class="product-container">
	<!--box-1------------>
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
	
	<!--box-2------------>

	</section>
	<!--our-brand-section----------------->
	<section class="our-brand">
	<!--text-->
	<div class="brand-text">
		<!--heading-->
		<h3>Most <font>Expensive</font></h3>
		<h4><?php echo $pricebased[0]['bike'];?> Bike 2021 New Arrivals Mini Messenger in <font>BMW Super Bikes</font> </h4>
		<!--details-->
		<p><?php echo $pricebased[0]['bike'];?> bike price starts at <?php echo $pricebased[0]['price'];?> RS. BMW offers 11 new bike models and 11 upcoming models in India. The most popular BMW bikes are G 310 R , S 1000 RR and G 310 GS . The expensive BMW bike is S 1000 RR which is priced at Rs. 23.75 Lakh . The upcoming BMW bikes include R nineT , M 1000 RR and F 750 GS .</p>
	<b><?php echo $pricebased[0]['bike'];?></b><br>
	<!--price--->
	<b><a class="price"href="#"><?php echo $pricebased[0]['price'];?><small> INR</small></a></b>
	<!--buy-btn-->
	<a class="btn-expensive" href="full-detail.php?id=<?php echo $pricebased[0]['id']; ?>">More Details</a>
	</div>
	</div>

	<!--img-->
	<div class="brand-img"><img src="<?php echo $pricebased[0]['bike_image'];?>"/></div>
	</section>
	<!--watches------------------->
	<section class="product">
		<!--heading------------>
	<div class="p-heading">
		<h3>Low <font> Priced</font> Bikes</h3>
	</div>
	<!--product-container----------------->
	<div class="product-container">
		<!--box-1------------>
		<?php foreach($pricelow as $cheapbike){?>
		<div class="p-box">
		<img alt="1" src="<?php echo $cheapbike['bike_image'];?>" />
		<!--details--------->
		<b><?php echo $cheapbike['bike'];?></b>
		<!--price--->
		<a class="price" href="#"><?php echo $cheapbike['price'];?><small> INR</small></a>
		<!--buy-btn-->
		<a class="buy-btn" href="full-detail.php?id=<?php echo $cheapbike['id']; ?>">More Details</a>
		</div>
		<?php }?>
	</section>
	<!--subscribe------------------------->
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
