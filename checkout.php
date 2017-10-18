<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>

<!DOCTYPE html>
<html>
<head>
<title>Eshop a Flat E-Commerce Bootstrap Responsive Website Template | Chectout :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/rajaongkir.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
</head>
<body>
	<!-- header-section-starts -->
	<?php
	include ('header.php');
	?>
	<!-- header-section-ends -->
	
		<!-- checkout -->
<div class="cart-items">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Cart
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			 <h2>MY SHOPPING BAG</h2>
		<!--<div class="cart-gd">
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/l1.jpg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p>Min. order value:</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : $10.00</p>
							 <span>Delivered in 1-1:30 hours</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/l2.jpg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p>Min. order value:</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : $10.00</p>
							 <span>Delivered in 3-3:30 hours</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>
			  <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
							$('.cart-header3').fadeOut('slow', function(c){
						$('.cart-header3').remove();
					});
					});	  
					});
			 </script>
			  <div class="cart-header3">
				 <div class="close3"> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/l3.jpg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p>Min. order value:</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : $10.00</p>
							 <span>Delivered On Tomorrow</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>
		</div>-->

		<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1" style="padding:0;">
            <table class="table table-hover">
                <thead> 
                    <tr>
                        <th class="table-xs">Product</th>
                        <th class="table-xs text-center">Qty</th>
                        <th class="table-xs text-center">Price</th>
                        <th class="table-xs text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
					<?php
					//MENAMPILKAN DETAIL KERANJANG BELANJA//					
					if (isset($_SESSION['items'])) {
					
						foreach ($_SESSION['items'] as $key => $val) {
						
						require_once ("koneksi.php");
						$sql= "select pro.id_produk, pro.nama_produk, pro.stok, pro.harga, pro.gambar, kat.nama_kategori from tb_produk as pro inner join tb_kategori as kat on pro.id_kategori=kat.id_kategori where id_produk = '$key'";
						$hasil = mysqli_query($koneksi, $sql);
						//$query = mysql_query($koneksi, "select * from tb_produk where id_produk = '$key'");
						$data = mysqli_fetch_assoc($hasil);
					
						if($data === FALSE) { 
							die(mysql_error()); // TODO: better error handling
						}
						
						$jumlah_harga = $data['harga'] * $val;
						$no = 1;
					?>
                    <tr style="border-bottom: 1px solid #ddd;">
					
                        <td class="col-xs-6 col-sm-6 col-md-6 col-lg-4" style="padding: 4px;">
                        <div class="media">
                            <a class="thumbnail pull-left" style="margin:0 10px 0 0; padding:4px" href="single.php?id=<?php echo $key ?>"> <img class="media-object" src="http://localhost/web/images/dridenim/<?php echo $data['gambar']?>" style="width: 72px; height: 72px;"> </a>
                            <div class="table-xs media-body">
                                <h4 class="media-heading" style="padding: 0px 0;"><a href="single.php?id=<?php echo $key ?>"><?php echo $data['nama_produk'] ?></a></h4>
                                <h6 class="media-heading" style="padding: 0px 0;"> Categori: <a href="#"><?php echo $data['nama_kategori'] ?></a></h6>
                                <span>Stok: </span><span class="text-success"><strong>
								<?php if($data['stok']=="t"){$stok="Tersedia";}elseif($data['stok']=="h"){$stok="Habis";}echo $stok; ?>
								</strong></span>
                            </div>
                        </div></td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: center; padding: 4px;">
							
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding:0;">
									<a href="add_to_cart.php?act=min&amp;barang_id=<?php echo $data['id_produk'];?>&amp;ref=checkout.php" type="button" class="btn btn-link btn-xs">
												<span class="glyphicon glyphicon-minus-sign" style="font-size: 20px;"> </span>
									</a>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center" style="padding:0;">
									<input type="text" class="form-control text-center" id="quantity" style="padding:0;" value="<?php echo $val ?>" disabled>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding:0;">
									<a href="add_to_cart.php?act=plus&amp;barang_id=<?php echo $data['id_produk'];?>&amp;ref=checkout.php" type="button" class="btn btn-link btn-xs">
											<span class="glyphicon glyphicon-plus-sign" style="font-size: 20px;"> </span>
									</a>
								</div>

                        </td>
                        <td class="table-xs col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center" style="padding: 4px;"><strong><?php echo $data['harga'] ?></strong></td>
                        <td class="table-xs col-xs-1 col-sm-1 col-md-1 col-lg-2 text-center" style="padding: 4px;"><strong><?php echo $jumlah_harga ?></strong></td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-2">
						<a href="add_to_cart.php?act=del&amp;barang_id=<?php echo $data['id_produk'];?>&amp;ref=checkout.php" type="button" class="btn btn-xs btn-danger">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a></td>
                    
					</tr>
					<?php
						}
					}
					if($total_belanja==0){
					?>
					<tr>
						<td class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h4>Ups, Keranjang Belanja kosong!</h4>
						</td>
					</tr>
					<?php } ?>
		
                </tbody>
                <tfoot>
                    <tr>
                        
                    </tr>                  
                </tfoot>
            </table>
			
			<div class="col-xs-12 shoping-bag" style="border-bottom: 1px solid #ccc;">
				
				<div class="shoping-bag col-lg-6 col-sm-6 col-xs-12">   
                        <select id="province" name="province" class="input-sm col-xs-12">
                            <option value="0" selected="selected">(please select a province)</option>
                            <?php include 'modul/rajaongkir.php';?>
                            <?php get_province();?>
						</select>
						 <select id="city" name="city" class="input-sm col-xs-12">
                            <option value="0" selected="selected">(please select a city)</option>
                            
						</select>
                </div>
				<div class="shoping-bag col-lg-3 col-sm-3 col-xs-6 pull-right">        
						<div class="text-right"><h5><strong><?php echo number_format($total_belanja); ?><br>-</strong></h5><h3>Rp <?php echo number_format($total_belanja); ?></h3></div>
                </div>
				<div class="shoping-bag col-lg-3 col-sm-3 col-xs-6 pull-right">   
                        <h5>Subtotal<br>Estimated shipping</h5><h3>Total</h3>
                </div>				    
            </div>
			
			<div class="col-xs-12 hidden-xs shoping-bag" style="padding-top:5px;">
				
				<div class="shoping-bag col-lg-3 col-sm-3 col-xs-6 pull-right">         
					<button type="button" class="btn btn-md btn-success pull-right">
						Checkout <span class="glyphicon glyphicon-play"></span>
					</button>
				</div>
				<div class="shoping-bag col-lg-3 col-sm-3 col-xs-6 pull-right">
					<a href="index.php" type="button" class="btn btn-md btn-default">
						<span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
					</a>
				</div>
			</div>
			<div class="col-xs-12 hidden-sm hidden-md hidden-lg shoping-bag" style="padding-top:5px;">
				
				<div class="shoping-bag col-lg-3 col-sm-3 col-xs-6 pull-right">         
					<button type="button" class="btn btn-xs btn-success pull-right">
						Checkout <span class="glyphicon glyphicon-play"></span>
					</button>
				</div>
				<div class="shoping-bag col-lg-3 col-sm-3 col-xs-6 pull-right">
					<a href="index.php" type="button" class="btn btn-xs btn-default">
						<span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
					</a>
				</div>
			</div>
			
        </div>
    </div>
</div>


	</div>
</div>

<!-- //checkout -->	
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