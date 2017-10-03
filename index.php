<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Eshop a Flat E-Commerce Bootstrap Responsive Website Template | Home :: w3layouts</title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/item-slider.js"></script>

<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/produk-item-2.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/item-slider.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<style>
.banner-category{
	padding: 0 0 0 0;
	outline: 2px solid white;
	outline-offset: -2px;
	}
</style>

<!-- CDN -->

</head>
<body>
<!--Header-->
	<?php
	include ('header.php');
	?>
<!--End-Header-->
<!--<div class="container">
<div class="row">

<div class="col-md-4">
<img class="img-responsive" src="http://id-live.slatic.net/original/ebb42beb2d83b99bdd568facd33feede.jpg" />
</div>

<div class="col-md-4">
<div class="row">
<img class="img-responsive" src="http://id-live.slatic.net/original/774b734d9920632b6849b199f2d6b939.jpg" />
</div>
<div class="row">
<img class="img-responsive" src="http://id-live.slatic.net/original/774b734d9920632b6849b199f2d6b939.jpg" />
</div>
</div>

<div class="col-md-4">
<img class="img-responsive" src="http://id-live.slatic.net/original/ebb42beb2d83b99bdd568facd33feede.jpg" />
</div>
</div>
</div>-->
	
		<!-- Produk by kategori START-->
			<?php include ("banner_kategori.php");?>

		<!-- Produk by kategori END-->
				
		<!-- content-section-starts-here -->
		<div class="container">
			<div class="main-content">
				
				<!-- info-strip-starts-here -->
				<div class="online-strip">
					<div class="col-xs-12 col-sm-4 follow-us">
						<h3>follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
					</div>
					<div class="col-xs-12 col-sm-4 shipping-grid">
						<div class="shipping">
							<img src="images/shipping.png" alt="" />
						</div>
						<div class="shipping-text">
							<h3>Free Shipping</h3>
							<p>on orders over $ 199</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-xs-12 col-sm-4 online-order">
						<p>Order online</p>
						<h3>Tel:999 4567 8902</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- banner-strip-end-here -->
				
				
				<!--produk-grid-start-->
				<div class="products-grid">
				<header>
					<h3 class="head text-center">Latest Products</h3>
				</header>
					
					
					
<?php
require_once "koneksi.php";
$sql = "select gambar, id_produk, nama_produk, harga FROM tb_produk ORDER BY nama_produk limit 12";
$hasil = mysqli_query($koneksi, $sql);
$hasil2 = mysqli_query($koneksi, $sql);

if($hasil === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

while($row_img = mysqli_fetch_assoc($hasil)) {
?>
					
					<div class="col-sm-4 col-md-3 product simpleCart_shelfItem text-center">
						
						<a href="single.php?id=<?php echo $row_img['id_produk']?>">
						<div class="stretchy-wrapper">
						<div>
						<img style="max-width:100%; max-height:100%;" src="images/dridenim/<?php echo ($row_img['gambar']); ?>" />
						</div>
						</div>
						</a>
						
						<div class="mask">
							<a href="single.php?id=<?php echo $row_img['id_produk']?>">Quick View</a>
						</div>
						<a class="product_name" href="single.php?id=<?php echo $row_img['id_produk']?>"><?php echo$row_img['nama_produk'] ?></a>
						<p><a class="item_add" href="single.php?id=<?php echo $row_img['id_produk']?>"><i></i> <span class="item_price"><?php echo $row_img['harga']?></span></a></p>
					</div>
<?php
}
while($row_img = mysqli_fetch_assoc($hasil2)) {
?>

					<!-- Product Item -->
					<div class="product-grid col-xs-12 col-sm-4 col-md-3 product">
					  <div class="product-item">
						
						<div class="image">
						  <a href="single.php?id=<?php echo $row_img['id_produk']?>">
						  <div class="stretchy-wrapper">
						  <div>
						  <img style="max-width:100%; max-height:100%;" src="images/dridenim/<?php echo ($row_img['gambar']); ?>" alt="<?php echo ($row_img['gambar']); ?>">
						  </div>
						  </div>
						  </a>
						</div>
						
						<div class="caption">
						  <div class="name text-center">
							<a href="single.php?id=<?php echo $row_img['id_produk']?>"><?php echo$row_img['nama_produk'] ?></a>
						  </div>
						  <div class="price">
							<span><?php echo $row_img['harga']?></span>
						  </div>
						  <div class="cart">
							<a href="add_to_cart.php?act=add&amp;barang_id=<?php echo $row_img["id_produk"];?>&amp;ref=index.php" type="button" class="btn btn-primary"> <span>Add to Cart</span></a>
						  </div>
						</div>
						</div>
					</div>
					<!--/ Product Item -->
<?php
}
?>

					<div class="clearfix"></div>
				</div>
				<!--produk-grid-end-->
				
			</div>
		</div>
		
		
		<div class="other-products">
		<div class="container">
			<h3 class="like text-center">Featured Collection</h3>        			
				     
					 <?php include ("item-slider.php"); ?>
					 <!-- item-slider-ori-here-->
					 
				   </div>
				   </div>
		<!-- content-section-ends-here -->
		<div class="news-letter">
			<div class="container">
				<div class="join">
					<h6>JOIN OUR MAILING LIST</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter Your Email Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="footer">
		<div class="container">
		 <div class="footer_top">
			<div class="span_of_4">
				<div class="col-md-3 span1_of_4">
					<h4>Shop</h4>
					<ul class="f_nav">
						<li><a href="#">new arrivals</a></li>
						<li><a href="#">men</a></li>
						<li><a href="#">women</a></li>
						<li><a href="#">accessories</a></li>
						<li><a href="#">kids</a></li>
						<li><a href="#">brands</a></li>
						<li><a href="#">trends</a></li>
						<li><a href="#">sale</a></li>
						<li><a href="#">style videos</a></li>
					</ul>	
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>help</h4>
					<ul class="f_nav">
						<li><a href="#">frequently asked  questions</a></li>
						<li><a href="#">men</a></li>
						<li><a href="#">women</a></li>
						<li><a href="#">accessories</a></li>
						<li><a href="#">kids</a></li>
						<li><a href="#">brands</a></li>
					</ul>	
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>account</h4>
					<ul class="f_nav">
						<li><a href="account.html">login</a></li>
						<li><a href="register.html">create an account</a></li>
						<li><a href="#">create wishlist</a></li>
						<li><a href="checkout.html">my shopping bag</a></li>
						<li><a href="#">brands</a></li>
						<li><a href="#">create wishlist</a></li>
					</ul>				
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>popular</h4>
					<ul class="f_nav">
						<li><a href="#">new arrivals</a></li>
						<li><a href="#">men</a></li>
						<li><a href="#">women</a></li>
						<li><a href="#">accessories</a></li>
						<li><a href="#">kids</a></li>
						<li><a href="#">brands</a></li>
						<li><a href="#">trends</a></li>
						<li><a href="#">sale</a></li>
						<li><a href="#">style videos</a></li>
						<li><a href="#">login</a></li>
						<li><a href="#">brands</a></li>
					</ul>			
				</div>
				<div class="clearfix"></div>
				</div>
		  </div>
		  <div class="cards text-center">
				<img src="images/cards.jpg" alt="" />
		  </div>
		  <div class="copyright text-center">
				<p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>
		</div>
		</div>
</body>
</html>